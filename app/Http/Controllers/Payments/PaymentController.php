<?php

namespace App\Http\Controllers\Payments;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Services\PaymentService;
use Exception;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    private PaymentService $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Start a payment using PaymentService
     *
     * @param array $paymentData
     * @return array
     */
    public function startPayment(array $paymentData): array
    {
        return $this->paymentService->initialize($paymentData);
    }

    /**
     * Store a newly verified Payment
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        // You can implement your logic here, for now return a response
        // return response()->json(['message' => 'Payment stored successfully.']);
    }

    /**
     * Verify Payment
     */

    public function verifyPayment(string $txRef): array
    {
        // return $this->paymentService->verify($txRef);
    }
}
