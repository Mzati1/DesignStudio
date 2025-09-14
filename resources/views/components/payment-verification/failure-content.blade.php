@props(['error', 'status', 'txRef'])

<div class="mb-6 sm:mb-8">
    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-2">
        Payment Verification
    </h2>
    <p class="text-sm sm:text-base text-slate-600 dark:text-slate-400">
        We encountered an issue with your payment. Please review the details below.
    </p>
</div>

{{-- Error Message --}}
<div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4 mb-6">
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800 dark:text-red-200">
                Payment {{ ucfirst(str_replace('_', ' ', $status)) }}
            </h3>
            <div class="mt-2 text-sm text-red-700 dark:text-red-300">
                @if($error)
                    <p>{{ $error }}</p>
                @else
                    <p>Your payment could not be processed at this time. Please try again or contact support if the issue persists.</p>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Possible Reasons --}}
<div class="bg-slate-50 dark:bg-slate-700/50 rounded-lg p-4 mb-6">
    <h4 class="text-sm font-semibold text-slate-900 dark:text-white mb-3">Possible Reasons:</h4>
    <ul class="text-sm text-slate-600 dark:text-slate-400 space-y-2">
        <li class="flex items-start">
            <svg class="w-4 h-4 text-slate-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            Insufficient funds in your account
        </li>
        <li class="flex items-start">
            <svg class="w-4 h-4 text-slate-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            Card details entered incorrectly
        </li>
        <li class="flex items-start">
            <svg class="w-4 h-4 text-slate-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            Network connectivity issues
        </li>
        <li class="flex items-start">
            <svg class="w-4 h-4 text-slate-400 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            Payment gateway timeout
        </li>
    </ul>
</div>

{{-- Support Information --}}
<div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.242l1.562-1.562C15.759 8.071 16 9.007 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.532a1 1 0 00-1.414-1.414l-.705.705a2 2 0 01-2.83 2.83l-1.414 1.414a1 1 0 101.414 1.414l.705-.705a2 2 0 012.83-2.83l1.414-1.414z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-blue-800 dark:text-blue-200">
                Need Help?
            </h3>
            <div class="mt-2 text-sm text-blue-700 dark:text-blue-300">
                <p>If you continue to experience issues, please contact our support team with your transaction reference: <code class="bg-blue-100 dark:bg-blue-800 px-1 py-0.5 rounded text-xs">{{ $txRef }}</code></p>
            </div>
        </div>
    </div>
</div>
