@extends('layouts.app')

@section('title', 'Payment Verification')

@section('content')
    {{-- Skeleton Loading State --}}
    <x-membership.skeleton-loader />

    {{-- Main Content --}}
    <div id="main-content"
        class="hidden min-h-screen bg-gradient-to-br from-[hsl(var(--color-accent-2))] via-white to-slate-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-800">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            {{-- Welcome Section --}}
            <x-membership.welcome-header 
                :title="$isSuccess ? 'Payment Successful!' : 'Payment Verification'" 
                :subtitle="$isSuccess ? 'Your payment has been processed successfully. Welcome to the Design Studio!' : 'We encountered an issue with your payment. Please review the details below.'" />

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-12">

                {{-- Payment Status Summary --}}
                <div class="lg:col-span-2 space-y-6 sm:space-y-8">
                    <x-payment-verification.status-card 
                        :isSuccess="$isSuccess" 
                        :status="$status" 
                        :txRef="$tx_ref" />
                    
                    {{-- Payment Details --}}
                    <x-payment-verification.payment-details 
                        :amount="$amount" 
                        :currency="$currency" 
                        :payment="$payment" />
                </div>

                {{-- Main Verification Content --}}
                <div class="lg:col-span-3">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-4 sm:p-6 lg:p-8">
                        
                        @if($isSuccess)
                            {{-- Success Content --}}
                            <x-payment-verification.success-content 
                                :payment="$payment" 
                                :amount="$amount" 
                                :currency="$currency" />
                        @else
                            {{-- Failure Content --}}
                            <x-payment-verification.failure-content 
                                :error="$error" 
                                :status="$status" 
                                :txRef="$tx_ref" />
                        @endif

                        {{-- Action Buttons --}}
                        <x-payment-verification.action-buttons 
                            :isSuccess="$isSuccess" 
                            :txRef="$tx_ref" />

                        {{-- PayChangu Security Badge --}}
                        <x-membership.security-badge />
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
