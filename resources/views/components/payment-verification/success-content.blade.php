@props(['payment', 'amount', 'currency'])

<div class="mb-6 sm:mb-8">
    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-2">
        Welcome to Design Studio!
    </h2>
    <p class="text-sm sm:text-base text-slate-600 dark:text-slate-400">
        Your membership payment has been processed successfully.
    </p>
</div>

{{-- Success Message --}}
<div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4 mb-6">
    <div class="flex items-start">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-green-800 dark:text-green-200">
                Payment Completed Successfully
            </h3>
            <div class="mt-2 text-sm text-green-700 dark:text-green-300">
                <p>Your membership is now active! You can access all Design Studio facilities and services.</p>
            </div>
        </div>
    </div>
</div>

{{-- Next Steps --}}
<div class="bg-slate-50 dark:bg-slate-700/50 rounded-lg p-4 mb-6">
    <h4 class="text-sm font-semibold text-slate-900 dark:text-white mb-3">What's Next?</h4>
    <ul class="text-sm text-slate-600 dark:text-slate-400 space-y-2">
        <li class="flex items-center">
            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Access your member dashboard
        </li>
        <li class="flex items-center">
            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Book studio facilities
        </li>
        <li class="flex items-center">
            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Join community events
        </li>
        <li class="flex items-center">
            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            Connect with mentors
        </li>
    </ul>
</div>
