@extends('layouts.app')

@section('title', 'Complete Your Membership')

@php
    // Get membership fee data from controller
    $feeData = app(\App\Http\Controllers\Members\MemberController::class)->getMembershipFeeData();
    $membershipFee = $feeData['fee'];
    $feeName = $feeData['name'];
    $feeAmount = $feeData['amount'];
    $feeCurrency = $feeData['currency'];
    $feeDescription = $feeData['description'];
@endphp

@section('content')
    {{-- Skeleton Loading State --}}
    <x-membership.skeleton-loader />

    {{-- Main Content --}}
    <div id="main-content"
        class="hidden min-h-screen bg-gradient-to-br from-[hsl(var(--color-accent-2))] via-white to-slate-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-800">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            {{-- Welcome Section --}}
            <x-membership.welcome-header />

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-12">

                {{-- User Profile Summary --}}
                <div class="lg:col-span-2 space-y-6 sm:space-y-8">
                    <x-membership.user-profile />

                    {{-- Membership Benefits --}}
                    <x-membership.membership-benefits />
                </div>

                {{-- Single Membership Plan & Payment --}}
                <div class="lg:col-span-3">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-4 sm:p-6 lg:p-8">
                        <div class="mb-6 sm:mb-8">
                            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-2">Innovation Studio
                                Membership</h2>
                            <p class="text-sm sm:text-base text-slate-600 dark:text-slate-400">Complete your membership to
                                get started</p>
                        </div>

                        {{-- Single Membership Plan --}}
                        <x-membership.membership-plan 
                            :feeName="$feeName" 
                            :feeAmount="$feeAmount" 
                            :feeCurrency="$feeCurrency" 
                            :feeDescription="$feeDescription" />

                        {{-- Error Messages --}}
                        <x-membership.error-messages :errors="$errors" />

                        {{-- Action Buttons --}}    
                        <x-membership.action-buttons 
                            :feeAmount="$feeAmount" 
                            :feeCurrency="$feeCurrency" 
                            :membershipFee="$membershipFee" />

                        {{-- PayChangu Security Badge --}}
                        <x-membership.security-badge />
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
