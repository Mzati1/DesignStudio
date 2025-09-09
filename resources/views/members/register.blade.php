@extends('layouts.app')

@section('title', 'Complete Your Membership')

@section('content')
    <div
        class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-800">

        {{-- Header Navigation --}}
        <div
            class="sticky top-0 z-50 backdrop-blur-xl bg-white/80 dark:bg-slate-900/80 border-b border-slate-200/50 dark:border-slate-700/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <a href="{{ route('home') }}"
                        class="flex items-center space-x-3 text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        <span class="font-medium">Back to Dashboard</span>
                    </a>

                    <div class="flex items-center space-x-2">
                        <div
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/30 dark:text-emerald-300">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            Secure Checkout
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            {{-- Welcome Section --}}
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center space-x-3 bg-gradient-to-r from-blue-100 to-indigo-100 dark:from-blue-950/50 dark:to-indigo-950/50 px-6 py-3 rounded-full mb-8">
                    <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                    <span class="text-sm font-semibold text-blue-700 dark:text-blue-300 uppercase tracking-wider">
                        Membership Activation
                    </span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 dark:text-white mb-6">
                    Welcome to the
                    <span class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 bg-clip-text text-transparent">
                        Innovation Studio
                    </span>
                </h1>

                <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
                    You're one step away from unlocking access to cutting-edge facilities, expert mentorship, and a thriving
                    community of innovators.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">

                {{-- User Profile Summary --}}
                <div class="lg:col-span-2">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6 mb-8">
                        <div class="flex items-center space-x-4 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold text-xl">
                                {{ substr(auth()->user()->name ?? 'U', 0, 1) }}
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-white">
                                    {{ auth()->user()->name ?? 'User Name' }}
                                </h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">
                                    {{ auth()->user()->email ?? 'user@example.com' }}
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Membership Benefits --}}
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-6">What's Included</h3>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">24/7 Lab Access</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-300">Unlimited access to our
                                        state-of-the-art innovation laboratory with the latest equipment and tools.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Expert Mentorship</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-300">One-on-one sessions with industry
                                        professionals and academic researchers.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Innovation Community</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-300">Connect with like-minded students
                                        and access to exclusive workshops and events.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-amber-600 dark:text-amber-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-slate-900 dark:text-white">Project Support</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-300">Dedicated support for bringing
                                        your innovative ideas from concept to reality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Membership Plans & Payment --}}
                <div class="lg:col-span-3">
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-8">
                        <div class="mb-8">
                            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Choose Your Membership</h2>
                            <p class="text-slate-600 dark:text-slate-400">Select the plan that fits your academic journey
                            </p>
                        </div>

                        <div class="space-y-6">

                            {{-- Semester Plan --}}
                            <div class="relative">
                                <input type="radio" name="membership_plan" value="semester" id="semester"
                                    class="peer sr-only" checked>
                                <label for="semester" class="block cursor-pointer">
                                    <div
                                        class="p-6 border-2 border-slate-200 dark:border-slate-700 rounded-xl hover:border-blue-300 dark:hover:border-blue-600 peer-checked:border-blue-500 peer-checked:bg-blue-50/50 dark:peer-checked:bg-blue-950/20 transition-all duration-200">

                                        {{-- Selection Indicator --}}
                                        <div
                                            class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-slate-300 peer-checked:border-blue-500 peer-checked:bg-blue-500 transition-all duration-300 flex items-center justify-center">
                                            <div
                                                class="w-2 h-2 rounded-full bg-white opacity-0 peer-checked:opacity-100 transition-opacity duration-300">
                                            </div>
                                        </div>

                                        {{-- Plan Header --}}
                                        <div class="flex items-center justify-between mb-4">
                                            <div>
                                                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Semester
                                                    Membership</h3>
                                                <p class="text-sm text-slate-500 dark:text-slate-400">Perfect for focused
                                                    project work</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-3xl font-bold text-slate-900 dark:text-white">K2,000</div>
                                                <div class="text-sm text-slate-500 dark:text-slate-400">per semester</div>
                                            </div>
                                        </div>

                                        {{-- Features --}}
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-emerald-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-slate-600 dark:text-slate-300">Lab access</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-emerald-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-slate-600 dark:text-slate-300">Mentorship
                                                    sessions</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-emerald-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-slate-600 dark:text-slate-300">Workshop
                                                    access</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-emerald-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-slate-600 dark:text-slate-300">Community
                                                    events</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            {{-- Annual Plan --}}
                            <div class="relative">
                                <input type="radio" name="membership_plan" value="annual" id="annual"
                                    class="peer sr-only">
                                <label for="annual" class="block cursor-pointer">
                                    <div
                                        class="relative p-6 bg-gradient-to-br from-blue-500 to-purple-600 text-white rounded-xl hover:shadow-lg transition-all duration-200 peer-checked:shadow-xl peer-checked:scale-[1.02]">

                                        {{-- Popular Badge --}}
                                        <div class="absolute -top-3 -right-3">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-amber-100 text-amber-800">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                                Save 33%
                                            </div>
                                        </div>

                                        {{-- Selection Indicator --}}
                                        <div
                                            class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-white peer-checked:bg-white transition-all duration-300 flex items-center justify-center">
                                            <div
                                                class="w-2 h-2 rounded-full bg-blue-500 opacity-0 peer-checked:opacity-100 transition-opacity duration-300">
                                            </div>
                                        </div>

                                        {{-- Plan Header --}}
                                        <div class="flex items-center justify-between mb-4">
                                            <div>
                                                <h3 class="text-xl font-bold">Annual Membership</h3>
                                                <p class="text-blue-100">Best value for dedicated innovators</p>
                                            </div>
                                            <div class="text-right">
                                                <div class="text-3xl font-bold">K4,000</div>
                                                <div class="text-sm text-blue-100 line-through">K6,000</div>
                                                <div class="text-sm text-blue-100">per year</div>
                                            </div>
                                        </div>

                                        {{-- Features --}}
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-blue-100" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-blue-100">Everything in Semester</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-blue-100" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-blue-100">Priority project support</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-blue-100" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-blue-100">Exclusive research access</span>
                                            </div>
                                            <div class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-blue-100" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                                <span class="text-sm text-blue-100">Alumni network</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- Payment Summary --}}
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6 mt-8">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Payment Summary</h3>

                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-2">
                                <span class="text-slate-600 dark:text-slate-300">Selected Plan:</span>
                                <span class="font-semibold text-slate-900 dark:text-white" id="selected-plan-text">
                                    Semester Membership
                                </span>
                            </div>

                            <div
                                class="flex justify-between items-center py-2 border-t border-slate-200 dark:border-slate-700">
                                <span class="text-lg font-semibold text-slate-900 dark:text-white">Total Amount:</span>
                                <span class="text-2xl font-bold text-blue-600 dark:text-blue-400" id="total-amount">
                                    K2,000
                                </span>
                            </div>

                            <div class="text-xs text-slate-500 dark:text-slate-400 flex items-start space-x-2">
                                <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>All payments are processed securely. Membership fees are non-refundable.</span>
                            </div>
                        </div>
                    </div>

                    {{-- Payment Methods --}}
                    <div
                        class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6 mt-8">
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Payment Method</h3>

                        <div class="space-y-4">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <label class="cursor-pointer">
                                    <input type="radio" name="payment_method" value="mobile_money"
                                        class="sr-only peer" checked>
                                    <div
                                        class="flex items-center space-x-3 p-4 border-2 border-slate-200 dark:border-slate-700 rounded-lg peer-checked:border-blue-500 peer-checked:bg-blue-50/50 dark:peer-checked:bg-blue-950/20 transition-all duration-200">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                        <div>
                                            <div class="font-medium text-slate-900 dark:text-white">Mobile Money</div>
                                            <div class="text-xs text-slate-500">TNM Mpamba, Airtel Money</div>
                                        </div>
                                    </div>
                                </label>

                                <label class="cursor-pointer">
                                    <input type="radio" name="payment_method" value="bank_transfer"
                                        class="sr-only peer">
                                    <div
                                        class="flex items-center space-x-3 p-4 border-2 border-slate-200 dark:border-slate-700 rounded-lg peer-checked:border-blue-500 peer-checked:bg-blue-50/50 dark:peer-checked:bg-blue-950/20 transition-all duration-200">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                        </svg>
                                        <div>
                                            <div class="font-medium text-slate-900 dark:text-white">Bank Transfer</div>
                                            <div class="text-xs text-slate-500">Direct bank transfer</div>
                                        </div>
                                    </div>
                                </label>
                            </div>

                            <div
                                class="bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-lg p-4">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-amber-600 dark:text-amber-400 mt-0.5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <div class="text-sm text-amber-800 dark:text-amber-200">
                                        <strong>Important:</strong> Your membership will be activated within 24 hours of
                                        successful payment verification.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <button type="button"
                            class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-[1.02] focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 outline-none flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span>Complete Payment</span>
                        </button>

                        <button type="button"
                            class="sm:w-auto border-2 border-slate-300 dark:border-slate-600 hover:border-blue-500 text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400 font-semibold py-4 px-8 rounded-lg transition-all duration-200 flex items-center justify-center space
