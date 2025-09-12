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
    private string $verifyUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = env('PAYCHANGU_API_URL', 'https://api.paychangu.com/payment');
        $this->verifyUrl = env('PAYCHANGU_VERIFY_TRANSACTION_URL', 'https://api.paychangu.com/verify-payment');
        $this->returnUrl = env('APP_LOCALHOST').'/payment/return';
        $this->callbackUrl = env('APP_LOCALHOST').'/payment/callback';
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
                'currency' => 'MWK',
                'uuid' => $uuid,
                'tx_ref' => $txRef,
                'amount' => $paymentData['amount'],
                'first_name' => $paymentData['first_name'],
                'last_name' => $paymentData['last_name'],
                'email' => $paymentData['email'],
                'return_url' => $this->returnUrl,
                'callback_url' => $this->callbackUrl,
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
     * Verify a transaction with PayChangu
     *
     * @param array $transactionData ['tx_ref'] - transaction reference to verify
     * @return array
     */
    public function verifyTransaction(array $transactionData): array
    {
        try {
            $secretKey = env('PAYCHANGU_TEST_SECRET_KEY');

            if (empty($secretKey)) {
                throw new Exception('Missing PAYCHANGU_TEST_SECRET_KEY in environment.');
            }

            if (empty($transactionData['tx_ref'])) {
                throw new Exception('Transaction reference (tx_ref) is required.');
            }

            $verifyEndpoint = $this->verifyUrl . '/' . $transactionData['tx_ref'];

            $response = $this->client->get($verifyEndpoint, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $secretKey,
                    'accept' => 'application/json',
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);

            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                return [
                    'success' => true,
                    'data' => $responseData['data'],
                ];
            }

            return [
                'success' => false,
                'error' => $responseData['message'] ?? 'Transaction verification failed',
                'data' => $responseData['data'] ?? null,
            ];

        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => 'Verification request failed: ' . $e->getMessage(),
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
