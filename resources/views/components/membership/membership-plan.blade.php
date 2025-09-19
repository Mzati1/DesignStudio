@props(['feeName', 'feeAmount', 'feeCurrency', 'feeDescription'])

<div class="p-4 sm:p-6 border-2 border-accent-1 bg-accent-2/30 dark:bg-accent-1/10 rounded-xl mb-6 sm:mb-8">
    {{-- Plan Header --}}
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 space-y-2 sm:space-y-0">
        <div>
            <h3 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white">{{ $feeName }}</h3>
            <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400">{{ $feeDescription }}</p>
        </div>
        <div class="text-left sm:text-right">
            <div class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">
                {{ $feeCurrency }}{{ number_format($feeAmount, 0) }}
            </div>
            <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400">per year</div>
        </div>
    </div>

    {{-- Features --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3">
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-xs sm:text-sm text-slate-600 dark:text-slate-300">24/7 Lab
                access</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-xs sm:text-sm text-slate-600 dark:text-slate-300">Expert
                mentorship</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-xs sm:text-sm text-slate-600 dark:text-slate-300">Workshop
                access</span>
        </div>
        <div class="flex items-center space-x-2">
            <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-xs sm:text-sm text-slate-600 dark:text-slate-300">Community
                events</span>
        </div>
    </div>
</div>
