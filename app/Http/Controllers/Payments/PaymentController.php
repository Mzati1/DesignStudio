<?php

namespace App\Http\Controllers\Payments;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Services\PaymentService;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private PaymentService $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function initialize(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'amount' => 'required|numeric|min:1',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'currency' => 'required|string|max:3',
                'agenda' => 'nullable|string|max:255',
                'customization_title' => 'nullable|string|max:255',
                'customization_description' => 'nullable|string|max:1000',
                'customization_logo' => 'nullable|string|max:500', // Changed from url to string to allow empty values
            ]);

            // Prepare customization data
            $customization = [];
            if ($request->customization_title) {
                $customization['title'] = $request->customization_title;
            }
            if ($request->customization_description) {
                $customization['description'] = $request->customization_description;
            }
            if ($request->customization_logo && !empty(trim($request->customization_logo))) {
                $customization['logo'] = $request->customization_logo;
            }

            // Prepare payment data
            $paymentData = [
                'amount' => $request->amount,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'currency' => $request->currency ?? 'MWK',
                'meta' => $request->meta ? json_decode($request->meta, true) : null,
                'agenda' => $request->agenda,
                'customization' => !empty($customization) ? $customization : null,
            ];

            // Initialize payment with PayChangu
            $result = $this->paymentService->initialize($paymentData);

            if ($result['success'] && isset($result['checkout_url'])) {
                // Redirect to PayChangu checkout
                return redirect($result['checkout_url']);
            } else {
                // Handle error - redirect back with error message
                return redirect()->back()->with('error', $result['error'] ?? 'Payment initialization failed. Please try again.');
            }

        } catch (Exception $e) {
            // Log the error if needed
            // \Log::error('Payment initialization failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Payment initialization failed. Please try again.');
        }
    }

    public function store(Request $request)
    {
        try {
            // Get tx_ref from query parameter
            $tx_ref = $request->get('tx_ref');
            
            if (!$tx_ref) {
                return redirect()->route('payment.verify', [
                    'status' => 'failed',
                    'error' => 'Transaction reference not provided'
                ]);
            }
            
            // Verify the transaction first
            $verificationResult = $this->paymentService->verifyTransaction([
                'tx_ref' => $tx_ref
            ]);

            if (!$verificationResult['success']) {
                // Redirect to verification page with verification failure
                return redirect()->route('payment.verify', [
                    'tx_ref' => $tx_ref,
                    'status' => 'verification_failed',
                    'error' => $verificationResult['error'] ?? 'Transaction verification failed'
                ]);
            }

            $transactionData = $verificationResult['data'];

            // Extract card information safely
            $cardInfo = $this->extractCardInfo($transactionData['authorization'] ?? []);

            // Map Paystack mode to database enum values
            $mode = $this->mapModeToEnum($transactionData['mode'] ?? 'sandbox');

            // Extract agenda and customization from meta data
            $metaData = $transactionData['meta'] ?? [];
            $agenda = $metaData['agenda'] ?? $request->agenda ?? null;
            $customization = $metaData['customization'] ?? $transactionData['customization'] ?? null;

            // Create payment record
            $payment = Payment::create([
                'user_id' => auth()->id(),
                'tx_ref' => $transactionData['tx_ref'],
                'reference' => $transactionData['reference'] ?? null,
                'event_type' => $transactionData['event_type'] ?? null,
                'mode' => $mode,
                'type' => $transactionData['type'] ?? null,
                'status' => $transactionData['status'],
                'number_of_attempts' => $transactionData['number_of_attempts'] ?? 0,
                'amount' => $transactionData['amount'],
                'charges' => $transactionData['charges'] ?? 0,
                'currency' => $transactionData['currency'] ?? 'MWK',
                'agenda' => $agenda,
                'method' => $transactionData['authorization']['channel'] ?? null,
                'card_brand' => $cardInfo['brand'],
                'card_last4' => $cardInfo['last4'],
                'customization' => $customization,
                'logs' => $transactionData['logs'] ?? null,
                'completed_at' => isset($transactionData['authorization']['completed_at'])
                    ? \Carbon\Carbon::parse($transactionData['authorization']['completed_at'])
                    : null,
            ]);

            // Redirect to verification page with payment data
            return redirect()->route('payment.verify', [
                'tx_ref' => $tx_ref,
                'status' => $transactionData['status'],
                'amount' => $transactionData['amount'],
                'currency' => $transactionData['currency'] ?? 'MWK',
                'payment_id' => $payment->id
            ]);

        } catch (Exception $e) {
            // Log the error if needed
            // \Log::error('Payment storage failed: ' . $e->getMessage());

            // Redirect to verification page with error status
            return redirect()->route('payment.verify', [
                'tx_ref' => $request->get('tx_ref'),
                'status' => 'failed',
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Map Paystack mode values to database enum values
     */
    private function mapModeToEnum(string $mode): string
    {
        return match (strtolower($mode)) {
            'test' => 'sandbox',
            'sandbox' => 'sandbox',
            'live' => 'live',
            'production' => 'live',
            default => 'sandbox'
        };
    }

    /**
     * Extract card information safely from authorization data
     */
    private function extractCardInfo(array $authorization): array
    {
        $cardInfo = [
            'brand' => null,
            'last4' => null
        ];

        if (!empty($authorization['card_number'])) {
            // Extract last 4 digits from masked card number (e.g., "230377******0408")
            $cardNumber = $authorization['card_number'];
            if (preg_match('/\*+(\d{4})$/', $cardNumber, $matches)) {
                $cardInfo['last4'] = $matches[1];
            }
        }

        if (!empty($authorization['brand'])) {
            $cardInfo['brand'] = $authorization['brand'];
        }

        return $cardInfo;
    }

    public function verify(Request $request)
    {
        $tx_ref = $request->get('tx_ref');
        $status = $request->get('status');
        $amount = $request->get('amount');
        $currency = $request->get('currency', 'MWK');
        $payment_id = $request->get('payment_id');
        $error = $request->get('error');

        // Determine if payment was successful
        $isSuccess = in_array($status, ['successful', 'completed', 'success']);
        $isFailed = in_array($status, ['failed', 'cancelled', 'verification_failed']);

        // Get payment details if payment_id is provided
        $payment = null;
        if ($payment_id) {
            $payment = Payment::find($payment_id);
        }

        return view('payments.verify', compact(
            'tx_ref',
            'status',
            'amount',
            'currency',
            'payment_id',
            'error',
            'isSuccess',
            'isFailed',
            'payment'
        ));
    }
}
