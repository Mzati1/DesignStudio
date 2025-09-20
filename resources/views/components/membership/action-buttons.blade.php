@props(['feeAmount', 'feeCurrency', 'membershipFee', 'user' => null, 'cancelRoute' => 'home'])

<div class="flex flex-col gap-3 sm:gap-4">
    {{-- Payment Form --}}
    <x-membership.payment-form 
        :feeAmount="$feeAmount" 
        :feeCurrency="$feeCurrency" 
        :membershipFee="$membershipFee" 
        :user="$user" />

    {{-- Cancel Button --}}
    <a href="{{ route($cancelRoute) }}"
        class="w-full bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white font-semibold py-3 sm:py-4 px-6 sm:px-8 rounded-lg transition-all duration-200 transform hover:scale-[1.02] focus:ring-4 focus:ring-slate-200/50 dark:focus:ring-slate-600/50 outline-none flex items-center justify-center space-x-2 group text-sm sm:text-base">
        <svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform group-hover:-translate-x-1"
            fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
        </svg>
        <span>Cancel</span>
    </a>
</div>
