<?php

namespace App\Http\Controllers\Payments;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Services\PaymentService;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    private PaymentService $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function startPayment(array $paymentData): array
    {
        try {
            return $this->paymentService->initialize($paymentData);
        } catch (Exception $e) {
            // Log the error if needed
            // \Log::error('Payment initialization failed: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => 'Payment initialization failed.',
                'details' => $e->getMessage(),
            ];
        }
    }

    public function store(StorePaymentRequest $request): JsonResponse
    {
        try {
            // Verify the transaction first
            $verificationResult = $this->paymentService->verifyTransaction([
                'tx_ref' => $request->tx_ref
            ]);

            if (!$verificationResult['success']) {
                return response()->json([
                    'success' => false,
                    'error' => 'Transaction verification failed',
                    'details' => $verificationResult['error']
                ], 400);
            }

            $transactionData = $verificationResult['data'];

            // Extract card information safely
            $cardInfo = $this->extractCardInfo($transactionData['authorization'] ?? []);

            // Create payment record
            $payment = Payment::create([
                'user_id' => $request->user_id,
                'tx_ref' => $transactionData['tx_ref'],
                'reference' => $transactionData['reference'] ?? null,
                'event_type' => $transactionData['event_type'] ?? null,
                'mode' => $transactionData['mode'] ?? 'sandbox',
                'type' => $transactionData['type'] ?? null,
                'status' => $transactionData['status'],
                'number_of_attempts' => $transactionData['number_of_attempts'] ?? 0,
                'amount' => $transactionData['amount'],
                'charges' => $transactionData['charges'] ?? 0,
                'currency' => $transactionData['currency'] ?? 'MWK',
                'agenda' => $request->agenda ?? null,
                'method' => $transactionData['authorization']['channel'] ?? null,
                'card_brand' => $cardInfo['brand'],
                'card_last4' => $cardInfo['last4'],
                'customization' => $transactionData['customization'] ?? null,
                'logs' => $transactionData['logs'] ?? null,
                'completed_at' => isset($transactionData['authorization']['completed_at'])
                    ? \Carbon\Carbon::parse($transactionData['authorization']['completed_at'])
                    : null,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Payment stored successfully',
                'payment' => $payment,
                'transaction_data' => $transactionData
            ], 201);

        } catch (Exception $e) {
            // Log the error if needed
            // \Log::error('Payment storage failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'error' => 'Payment storage failed',
                'details' => $e->getMessage()
            ], 500);
        }
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
}
