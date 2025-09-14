@props(['amount', 'currency', 'payment'])

<div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6">
    <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Payment Details</h3>
    
    <div class="space-y-3">
        {{-- Amount --}}
        <div class="flex justify-between items-center">
            <span class="text-slate-600 dark:text-slate-400">Amount:</span>
            <span class="font-semibold text-slate-900 dark:text-white">
                {{ number_format($amount, 2) }} {{ $currency }}
            </span>
        </div>

        {{-- Payment Method --}}
        @if($payment && $payment->method)
            <div class="flex justify-between items-center">
                <span class="text-slate-600 dark:text-slate-400">Method:</span>
                <span class="font-medium text-slate-900 dark:text-white capitalize">
                    {{ str_replace('_', ' ', $payment->method) }}
                </span>
            </div>
        @endif

        {{-- Card Details --}}
        @if($payment && $payment->card_brand && $payment->card_last4)
            <div class="flex justify-between items-center">
                <span class="text-slate-600 dark:text-slate-400">Card:</span>
                <span class="font-medium text-slate-900 dark:text-white">
                    {{ ucfirst($payment->card_brand) }} •••• {{ $payment->card_last4 }}
                </span>
            </div>
        @endif

        {{-- Payment Date --}}
        @if($payment && $payment->completed_at)
            <div class="flex justify-between items-center">
                <span class="text-slate-600 dark:text-slate-400">Date:</span>
                <span class="font-medium text-slate-900 dark:text-white">
                    {{ $payment->completed_at->format('M d, Y \a\t g:i A') }}
                </span>
            </div>
        @else
            <div class="flex justify-between items-center">
                <span class="text-slate-600 dark:text-slate-400">Date:</span>
                <span class="font-medium text-slate-900 dark:text-white">
                    {{ now()->format('M d, Y \a\t g:i A') }}
                </span>
            </div>
        @endif

        {{-- Charges --}}
        @if($payment && $payment->charges > 0)
            <div class="flex justify-between items-center">
                <span class="text-slate-600 dark:text-slate-400">Charges:</span>
                <span class="font-medium text-slate-900 dark:text-white">
                    {{ number_format($payment->charges, 2) }} {{ $currency }}
                </span>
            </div>
        @endif
    </div>
</div>
