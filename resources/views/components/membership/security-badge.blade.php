@props(['provider' => 'PayChangu'])

<div class="mt-4 sm:mt-6 flex items-center justify-center space-x-2 text-xs sm:text-sm text-slate-500 dark:text-slate-400">
    <svg class="w-3 h-3 sm:w-4 sm:h-4 text-emerald-500" fill="none" stroke="currentColor"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
    </svg>
    <span>Secure payments powered by</span>
    <span class="font-semibold text-accent-1 dark:text-accent-3">{{ $provider }}</span>
</div>
