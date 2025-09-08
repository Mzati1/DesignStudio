<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Exception;

class PaymentService
{
    private Client $client;
    private string $apiUrl;
    private string $returnUrl;
    private string $callbackUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = env('PAYCHANGU_API_URL', 'https://api.paychangu.com/payment'); // PayChangu endpoint
        $this->returnUrl = config('app.url') . '/payment/return';
        $this->callbackUrl = config('app.url') . '/payment/callback';
    }

    /**
     * Initialize a payment with PayChangu
     *
     * @param array $paymentData ['amount', 'currency', 'first_name', 'last_name', 'email', 'meta']
     * @return array
     */
    public function initialize(array $paymentData): array
    {
        try {
            $secretKey = env('PAYCHANGU_TEST_SECRET_KEY');
            
            if (empty($secretKey)) {
                throw new Exception('Missing PAYCHANGU_TEST_SECRET_KEY in environment.');
            }

            $txRef = $this->generateTransactionReference();
            $uuid = Str::uuid()->toString();

            $payload = [
                'currency' => strtoupper($paymentData['currency']),
                'uuid' => $uuid,
                'tx_ref' => $txRef,
                'amount' => $paymentData['amount'],
                'first_name' => $paymentData['first_name'],
                'last_name' => $paymentData['last_name'],
                'email' => $paymentData['email'],
                'return_url' => $this->returnUrl,
                'callback_url' => $this->callbackUrl,
                'meta' => json_encode($paymentData['meta'] ?? []),
            ];

            $response = $this->client->post($this->apiUrl, [
                'body' => json_encode($payload),
                'headers' => [
                    'Authorization' => 'Bearer ' . $secretKey,
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);

            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                return [
                    'success' => true,
                    'checkout_url' => $responseData['data']['checkout_url'],
                    'tx_ref' => $responseData['data']['data']['tx_ref'],
                    'amount' => $responseData['data']['data']['amount'],
                    'currency' => $responseData['data']['data']['currency'],
                ];
            }

            return [
                'success' => false,
                'error' => $responseData['message'] ?? 'Payment initialization failed',
            ];

        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => 'Request failed: ' . $e->getMessage(),
            ];
        }
    }

    /**
     * Generate a unique transaction reference
     */
    private function generateTransactionReference(): string
    {
        return 'TXN_' . now()->timestamp . '_' . mt_rand(1000, 9999);
    }
}


/* use case 
 // 3️⃣ Initialize payment
 $result = $paymentService->initialize($paymentData);

 // 4️⃣ Redirect user to PayChangu checkout if successful
 if ($result['success']) {
     return redirect($result['checkout_url']);
 }

 // 5️⃣ Handle failure
 return back()->withErrors($result['error']);*/