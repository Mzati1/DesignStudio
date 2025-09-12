@extends('layouts.app')

@section('title', 'Complete Your Membership')

@php
    // Get semester membership fee from database
    $semesterFee = \App\Models\Fee::where('slug', 'semester-membership')->first();
    
    // Fallback data if not found in database
    $feeName = $semesterFee->name ?? 'Semester Membership';
    $feeAmount = $semesterFee->amount ?? 2000;
    $feeCurrency = $semesterFee->currency ?? 'MWK';
    $feeDescription = $semesterFee->description ?? 'Perfect for focused project work';
@endphp

@section('content')
    {{-- Skeleton Loading State --}}
    <div id="skeleton-loader"
        class="min-h-screen bg-gradient-to-br from-[hsl(var(--color-accent-2))] via-white to-slate-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
            {{-- Header Skeleton --}}
            <div class="text-center mb-16">
                <div class="h-12 bg-slate-200 dark:bg-slate-700 rounded-full w-64 mx-auto mb-8 animate-pulse"></div>
                <div class="h-16 bg-slate-200 dark:bg-slate-700 rounded-lg w-3/4 mx-auto mb-6 animate-pulse"></div>
                <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-2/3 mx-auto mb-2 animate-pulse"></div>
                <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-1/2 mx-auto animate-pulse"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
                {{-- Profile Skeleton --}}
                <div class="lg:col-span-2 space-y-8">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6">
                        <div class="flex items-center space-x-4 mb-6">
                            <div class="w-16 h-16 bg-slate-200 dark:bg-slate-700 rounded-xl animate-pulse"></div>
                            <div class="space-y-2">
                                <div class="h-5 bg-slate-200 dark:bg-slate-700 rounded w-32 animate-pulse"></div>
                                <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-40 animate-pulse"></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6">
                        <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-32 mb-6 animate-pulse"></div>
                        <div class="space-y-6">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="flex items-start space-x-4">
                                    <div class="w-10 h-10 bg-slate-200 dark:bg-slate-700 rounded-lg animate-pulse"></div>
                                    <div class="flex-1 space-y-2">
                                        <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-24 animate-pulse"></div>
                                        <div class="h-3 bg-slate-200 dark:bg-slate-700 rounded w-full animate-pulse"></div>
                                        <div class="h-3 bg-slate-200 dark:bg-slate-700 rounded w-3/4 animate-pulse"></div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

                {{-- Payment Skeleton --}}
                <div class="lg:col-span-3">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-8">
                        <div class="mb-8">
                            <div class="h-8 bg-slate-200 dark:bg-slate-700 rounded w-48 mb-2 animate-pulse"></div>
                            <div class="h-5 bg-slate-200 dark:bg-slate-700 rounded w-64 animate-pulse"></div>
                        </div>

                        <div class="p-6 border-2 border-slate-200 dark:border-slate-700 rounded-xl">
                            <div class="flex items-center justify-between mb-4">
                                <div class="space-y-2">
                                    <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-40 animate-pulse"></div>
                                    <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-32 animate-pulse"></div>
                                </div>
                                <div class="text-right space-y-1">
                                    <div class="h-8 bg-slate-200 dark:bg-slate-700 rounded w-20 animate-pulse"></div>
                                    <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-16 animate-pulse"></div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-3">
                                @for ($i = 0; $i < 4; $i++)
                                    <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded animate-pulse"></div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <div class="flex-1 h-14 bg-slate-200 dark:bg-slate-700 rounded-lg animate-pulse"></div>
                        <div class="flex-1 h-14 bg-slate-200 dark:bg-slate-700 rounded-lg animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div id="main-content"
        class="hidden min-h-screen bg-gradient-to-br from-[hsl(var(--color-accent-2))] via-white to-slate-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-800">

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            {{-- Welcome Section --}}
            <div class="text-center mb-16 mt-20">

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 dark:text-white mb-6">
                    Welcome to the
                    <span class="bg-gradient-to-r from-accent-1 via-accent-3 to-accent-1 bg-clip-text">
                        Design Studio
                    </span>
                </h1>

                <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    You're one step away from unlocking access to cutting-edge facilities, expert mentorship, and a thriving
                    community of innovators.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-12">

                {{-- User Profile Summary --}}
                <div class="lg:col-span-2 space-y-6 sm:space-y-8">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-4 sm:p-6">
                        <div class="flex items-center space-x-3 sm:space-x-4">
                            @if(auth()->user()->avatar)
                                <img src="{{ auth()->user()->avatar }}" 
                                     alt="{{ auth()->user()->name ?? 'John Doe' }}" 
                                     class="w-12 h-12 sm:w-16 sm:h-16 rounded-xl object-cover flex-shrink-0">
                            @else
                                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-accent-1 to-accent-3 rounded-xl flex items-center justify-center text-white font-bold text-lg sm:text-xl flex-shrink-0">
                                    {{ substr(auth()->user()->name ?? 'John Doe', 0, 1) }}
                                </div>
                            @endif
                            <div class="min-w-0 flex-1">
                                <h3 class="text-base sm:text-lg font-semibold text-slate-900 dark:text-white truncate">
                                    {{ auth()->user()->name ?? 'John Doe' }}
                                </h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400 truncate">
                                    {{ auth()->user()->email ?? 'john.doe@example.com' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Membership Benefits --}}
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-4 sm:p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4 sm:mb-6">What's Included</h3>

                        <div class="space-y-4 sm:space-y-6">
                            <div class="flex items-start space-x-3 sm:space-x-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-emerald-600 dark:text-emerald-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-slate-900 dark:text-white text-sm sm:text-base">24/7 Lab
                                        Access</h4>
                                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                        Unlimited access to our state-of-the-art innovation laboratory with the latest
                                        equipment and tools.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 sm:space-x-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-blue-600 dark:text-blue-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-slate-900 dark:text-white text-sm sm:text-base">Expert
                                        Mentorship</h4>
                                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                        One-on-one sessions with industry professionals and academic researchers.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 sm:space-x-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-purple-600 dark:text-purple-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-slate-900 dark:text-white text-sm sm:text-base">
                                        Innovation Community</h4>
                                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                        Connect with like-minded students and access to exclusive workshops and events.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 sm:space-x-4">
                                <div
                                    class="flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-amber-600 dark:text-amber-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-slate-900 dark:text-white text-sm sm:text-base">Project
                                        Support</h4>
                                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                        Dedicated support for bringing your innovative ideas from concept to reality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div
                            class="p-4 sm:p-6 border-2 border-accent-1 bg-accent-2/30 dark:bg-accent-1/10 rounded-xl mb-6 sm:mb-8">
                            {{-- Plan Header --}}
                            <div
                                class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 space-y-2 sm:space-y-0">
                                <div>
                                    <h3 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white">{{ $feeName }}</h3>
                                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400">{{ $feeDescription }}</p>
                                </div>
                                <div class="text-left sm:text-right">
                                    <div class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">
                                        {{ $feeCurrency }}{{ number_format($feeAmount, 0) }}
                                    </div>
                                    <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400">per semester</div>
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

                        {{-- Error Messages --}}
                        @if ($errors->any())
                            <div class="mb-4 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                                <div class="flex">
                                    <svg class="w-5 h-5 text-red-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div>
                                        <h3 class="text-sm font-medium text-red-800 dark:text-red-200">Please fix the following errors:</h3>
                                        <ul class="mt-2 text-sm text-red-700 dark:text-red-300 list-disc list-inside">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-4 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                                <div class="flex">
                                    <svg class="w-5 h-5 text-red-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <div class="text-sm text-red-700 dark:text-red-300">
                                        {{ session('error') }}
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Action Buttons --}}    
                        <div class="flex flex-col gap-3 sm:gap-4">
                            <form method="POST" action="{{ route('payment.initialize') }}" class="w-full">
                                @csrf
                                {{-- Hidden fields for payment data --}}
                                <input type="hidden" name="amount" value="{{ $feeAmount }}">
                                <input type="hidden" name="currency" value="{{ $feeCurrency }}">
                                <input type="hidden" name="first_name" value="{{ auth()->user()->name ? explode(' ', auth()->user()->name)[0] : 'User' }}">
                                <input type="hidden" name="last_name" value="{{ auth()->user()->name ? (count(explode(' ', auth()->user()->name)) > 1 ? implode(' ', array_slice(explode(' ', auth()->user()->name), 1)) : '') : '' }}">
                                <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                                <input type="hidden" name="meta" value="{{ json_encode(['membership_type' => 'semester', 'fee_id' => $semesterFee->id ?? null]) }}">
                                
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

                            <a href="{{ route('home') }}"
                                class="w-full bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white font-semibold py-3 sm:py-4 px-6 sm:px-8 rounded-lg transition-all duration-200 transform hover:scale-[1.02] focus:ring-4 focus:ring-slate-200/50 dark:focus:ring-slate-600/50 outline-none flex items-center justify-center space-x-2 group text-sm sm:text-base">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 transition-transform group-hover:-translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span>Cancel</span>
                            </a>
                        </div>

                        {{-- PayChangu Security Badge --}}
                        <div
                            class="mt-4 sm:mt-6 flex items-center justify-center space-x-2 text-xs sm:text-sm text-slate-500 dark:text-slate-400">
                            <svg class="w-3 h-3 sm:w-4 sm:h-4 text-emerald-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>Secure payments powered by</span>
                            <span class="font-semibold text-accent-1 dark:text-accent-3">PayChangu</span>
                        </div>
                    </div>
                </div>
            </div>
            </h3>

        </div>

    </div>

    {{-- Simple loading script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show skeleton for 1.5 seconds then reveal content
            setTimeout(function() {
                document.getElementById('skeleton-loader').classList.add('hidden');
                document.getElementById('main-content').classList.remove('hidden');
            }, 1500);

        });
    </script>
@endsection
