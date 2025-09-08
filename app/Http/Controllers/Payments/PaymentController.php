<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Services\PaymentService;
use Exception;

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
}
