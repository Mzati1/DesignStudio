@props(['isSuccess', 'txRef'])

<div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
    @if($isSuccess)
        {{-- Success Actions --}}
        <a href="{{ route('dashboard') }}" 
           class="flex-1 bg-gradient-to-r from-accent-1 to-accent-3 hover:from-accent-1/90 hover:to-accent-3/90 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 text-center">
            Go to Dashboard
        </a>
        
        <a href="{{ route('members.register') }}" 
           class="flex-1 bg-white dark:bg-slate-700 hover:bg-slate-50 dark:hover:bg-slate-600 text-slate-900 dark:text-white font-semibold py-3 px-6 rounded-lg border border-slate-200 dark:border-slate-600 transition-all duration-200 text-center">
            Make Another Payment
        </a>
    @else
        {{-- Failure Actions --}}
        <a href="{{ route('members.register') }}" 
           class="flex-1 bg-gradient-to-r from-accent-1 to-accent-3 hover:from-accent-1/90 hover:to-accent-3/90 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 text-center">
            Try Again
        </a>
        
        <a href="{{ route('home') }}" 
           class="flex-1 bg-white dark:bg-slate-700 hover:bg-slate-50 dark:hover:bg-slate-600 text-slate-900 dark:text-white font-semibold py-3 px-6 rounded-lg border border-slate-200 dark:border-slate-600 transition-all duration-200 text-center">
            Back to Home
        </a>
    @endif
</div>
