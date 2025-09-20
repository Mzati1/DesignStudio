@props(['isSuccess', 'status', 'txRef'])

<div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6">
    <div class="text-center">
        {{-- Status Icon --}}
        <div class="mx-auto w-16 h-16 mb-4 rounded-full flex items-center justify-center
            {{ $isSuccess ? 'bg-green-100 dark:bg-green-900/20' : 'bg-red-100 dark:bg-red-900/20' }}">
            @if($isSuccess)
                <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            @else
                <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            @endif
        </div>

        {{-- Status Text --}}
        <h3 class="text-xl font-bold mb-2 {{ $isSuccess ? 'text-green-900 dark:text-green-100' : 'text-red-900 dark:text-red-100' }}">
            {{ $isSuccess ? 'Payment Successful' : 'Payment Failed' }}
        </h3>

        {{-- Transaction Reference --}}
        <div class="text-sm text-slate-600 dark:text-slate-400 mb-4">
            <span class="font-medium">Transaction ID:</span>
            <code class="bg-slate-100 dark:bg-slate-700 px-2 py-1 rounded text-xs ml-1">{{ $txRef }}</code>
        </div>

        {{-- Status Badge --}}
        <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
            {{ $isSuccess ? 'bg-green-100 text-green-800 dark:bg-green-900/20 dark:text-green-300' : 'bg-red-100 text-red-800 dark:bg-red-900/20 dark:text-red-300' }}">
            {{ ucfirst(str_replace('_', ' ', $status)) }}
        </div>
    </div>
</div>
