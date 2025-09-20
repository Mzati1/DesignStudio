@props(['feeAmount', 'feeCurrency', 'membershipFee', 'user' => null])

@php
    $user = $user ?? auth()->user();
    $firstName = $user->name ? explode(' ', $user->name)[0] : 'User';
    $lastName = $user->name ? (count(explode(' ', $user->name)) > 1 ? implode(' ', array_slice(explode(' ', $user->name), 1)) : '') : '';
    $userEmail = $user->email;
    $metaData = json_encode(['membership_type' => 'annual', 'fee_id' => $membershipFee->id ?? null]);
@endphp

<form method="POST" action="{{ route('payment.initialize') }}" class="w-full space-y-4">
    @csrf
    {{-- Hidden fields for payment data --}}
    <input type="hidden" name="amount" value="{{ $feeAmount }}">
    <input type="hidden" name="currency" value="{{ $feeCurrency }}">
    <input type="hidden" name="first_name" value="{{ $firstName }}">
    <input type="hidden" name="last_name" value="{{ $lastName }}">
    <input type="hidden" name="email" value="{{ $userEmail }}">
    <input type="hidden" name="meta" value="{{ $metaData }}">
    
    {{-- Static Agenda Field (Hidden) --}}
    <input type="hidden" name="agenda" value="Registration Fee">
    
    {{-- Customization Fields (Hidden - populated from database) --}}
    <input type="hidden" name="customization_title" value="{{ $membershipFee->name ?? 'Design Studio Membership' }}">
    <input type="hidden" name="customization_description" value="{{ $membershipFee->description ?? 'Annual membership for Design Studio access and benefits' }}">
    
    {{-- Logo Asset - Using config value --}}
    {{-- 
    To use a logo asset, you can:
    1. Set APP_LOGO_URL in your .env file: APP_LOGO_URL=https://yourdomain.com/images/logo.png
    2. Or use asset() helper: {{ asset('images/logo.png') }}
    3. Or use a direct URL: https://yourdomain.com/images/logo.png
    --}}
    <input type="hidden" name="customization_logo" value="{{ config('app.logo_url') }}">
    
    <button type="submit"
        class="w-full bg-accent-1 hover:bg-accent-3 text-white font-semibold py-3 sm:py-4 px-6 sm:px-8 rounded-lg transition-all duration-200 transform hover:scale-[1.02] focus:ring-4 focus:ring-accent-1/20 dark:focus:ring-accent-1/20 outline-none flex items-center justify-center space-x-2 group text-sm sm:text-base">
        <svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform group-hover:scale-110"
            fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
        </svg>
        <span>Complete Payment</span>
    </button>
</form>
