<x-layouts.app :title="__('Membership')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-3 md:grid-cols-3">
            {{-- Current Membership Status --}}
            <div class="bg-white rounded-lg border border-[hsl(var(--color-border))] p-4 hover:shadow-md transition-shadow duration-200">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-sm font-semibold text-[hsl(var(--color-text-primary))]">Current Status</h3>
                    <span class="px-2 py-1 text-xs font-medium bg-[hsl(var(--color-accent-1))] text-white rounded-full">Unregistered</span>
                </div>
                <p class="text-xs text-[hsl(var(--color-text-secondary))] mb-3">
                    Complete your membership registration
                </p>

                <div class="space-y-2 mb-3">
                    <div class="flex items-center text-xs text-[hsl(var(--color-text-muted))]">
                        <svg class="w-3 h-3 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                        </svg>
                        Workshop Credits: 10 remaining
                    </div>
                    <div class="flex items-center text-xs text-[hsl(var(--color-text-muted))]">
                        <svg class="w-3 h-3 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Studio Access: 7hrs/week
                    </div>
                    <div class="flex items-center text-xs text-[hsl(var(--color-text-muted))]">
                        <svg class="w-3 h-3 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Membership Type: Basic
                    </div>
                </div>

                <button class="w-full px-3 py-1.5 bg-[hsl(var(--color-accent-1))] hover:bg-[hsl(var(--color-accent-3))] text-white rounded text-xs transition-colors duration-200">
                    Register Now
                </button>
            </div>

            {{-- Available Plans --}}
            <div class="bg-white rounded-lg border border-[hsl(var(--color-border))] p-4 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center mb-3">
                    <svg class="w-4 h-4 text-[hsl(var(--color-accent-1))] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <h3 class="text-sm font-semibold text-[hsl(var(--color-text-primary))]">Available Plans</h3>
                </div>
                <p class="text-xs text-[hsl(var(--color-text-secondary))] mb-3">
                    Choose the plan that fits your needs
                </p>

                <div class="space-y-2 mb-3">
                    <div class="flex justify-between">
                        <span class="text-xs text-[hsl(var(--color-text-muted))]">Basic Plan</span>
                        <span class="text-xs font-medium text-[hsl(var(--color-text-primary))]">MWK 2,000</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-xs text-[hsl(var(--color-text-muted))]">Premium Plan</span>
                        <span class="text-xs font-medium text-[hsl(var(--color-accent-1))]">MWK 5,000</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-xs text-[hsl(var(--color-text-muted))]">Enterprise</span>
                        <span class="text-xs font-medium text-[hsl(var(--color-accent-1))]">MWK 10,000</span>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button class="flex-1 px-2 py-1.5 border border-[hsl(var(--color-accent-3))] text-[hsl(var(--color-accent-3))] hover:bg-[hsl(var(--color-accent-3))] hover:text-white rounded text-xs transition-colors duration-200">
                        View Plans
                    </button>
                    <button class="flex-1 px-2 py-1.5 bg-[hsl(var(--color-accent-1))] hover:bg-[hsl(var(--color-accent-3))] text-white rounded text-xs transition-colors duration-200">
                        Compare
                    </button>
                </div>
            </div>

            {{-- Payment History --}}
            <div class="bg-white rounded-lg border border-[hsl(var(--color-border))] p-4">
                <h3 class="text-sm font-semibold text-[hsl(var(--color-text-primary))] mb-3">Payment History</h3>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="px-2 py-1 text-xs font-medium bg-[hsl(var(--color-accent-2))] text-[hsl(var(--color-accent-1))] rounded-full">No payments yet</span>
                        <span class="text-xs text-[hsl(var(--color-text-muted))]"></span>
                    </div>
                    
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-xs text-[hsl(var(--color-text-muted))]">Last Payment</span>
                            <span class="text-xs font-medium text-[hsl(var(--color-text-muted))]">-</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-xs text-[hsl(var(--color-text-muted))]">Next Due</span>
                            <span class="text-xs font-medium text-[hsl(var(--color-accent-1))]">Register to see</span>
                        </div>
                    </div>
                </div>

                <button class="w-full mt-3 px-3 py-1.5 border border-[hsl(var(--color-accent-3))] text-[hsl(var(--color-accent-3))] hover:bg-[hsl(var(--color-accent-3))] hover:text-white rounded text-xs transition-colors duration-200">
                    View All Payments
                </button>
            </div>
        </div>

        {{-- Membership Registration Section --}}
        <div class="bg-white rounded-xl border border-[hsl(var(--color-border))] p-6">
            <div class="text-center mb-6">
                <h2 class="text-xl font-bold text-[hsl(var(--color-text-primary))] mb-2">
                    Complete Your Membership Registration
                </h2>
                <p class="text-sm text-[hsl(var(--color-text-secondary))]">
                    You're one step away from unlocking access to cutting-edge facilities, expert mentorship, and a thriving community of innovators.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- User Profile --}}
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-[hsl(var(--color-text-primary))]">Your Profile</h3>
                    
                    <div class="flex items-center space-x-4 p-4 bg-[hsl(var(--color-accent-2))] rounded-lg">
                        @if(auth()->user()->avatar)
                            <img src="{{ auth()->user()->avatar }}" 
                                 alt="{{ auth()->user()->name ?? 'John Doe' }}" 
                                 class="w-12 h-12 rounded-lg object-cover flex-shrink-0">
                        @else
                            <div class="w-12 h-12 bg-gradient-to-br from-accent-1 to-accent-3 rounded-lg flex items-center justify-center text-white font-bold text-lg flex-shrink-0">
                                {{ substr(auth()->user()->name ?? 'John Doe', 0, 1) }}
                            </div>
                        @endif
                        <div class="min-w-0 flex-1">
                            <h4 class="text-base font-semibold text-[hsl(var(--color-text-primary))] truncate">
                                {{ auth()->user()->name ?? 'John Doe' }}
                            </h4>
                            <p class="text-sm text-[hsl(var(--color-text-secondary))] truncate">
                                {{ auth()->user()->email ?? 'john.doe@example.com' }}
                            </p>
                        </div>
                    </div>

                    {{-- Membership Benefits --}}
                    <div class="space-y-3">
                        <h4 class="text-base font-semibold text-[hsl(var(--color-text-primary))]">What's Included</h4>
                        
                        <div class="space-y-3">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-semibold text-[hsl(var(--color-text-primary))] text-sm">24/7 Lab Access</h5>
                                    <p class="text-xs text-[hsl(var(--color-text-muted))] leading-relaxed">
                                        Unlimited access to our state-of-the-art innovation laboratory with the latest equipment and tools.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-semibold text-[hsl(var(--color-text-primary))] text-sm">Expert Mentorship</h5>
                                    <p class="text-xs text-[hsl(var(--color-text-muted))] leading-relaxed">
                                        One-on-one sessions with industry professionals and academic researchers.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-semibold text-[hsl(var(--color-text-primary))] text-sm">Innovation Community</h5>
                                    <p class="text-xs text-[hsl(var(--color-text-muted))] leading-relaxed">
                                        Connect with like-minded students and access to exclusive workshops and events.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h5 class="font-semibold text-[hsl(var(--color-text-primary))] text-sm">Project Support</h5>
                                    <p class="text-xs text-[hsl(var(--color-text-muted))] leading-relaxed">
                                        Dedicated support for bringing your innovative ideas from concept to reality.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Membership Plan & Payment --}}
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-[hsl(var(--color-text-primary))]">Membership Plan</h3>
                    
                    {{-- Single Membership Plan --}}
                    <div class="p-6 border-2 border-[hsl(var(--color-accent-1))] bg-[hsl(var(--color-accent-2))]/30 dark:bg-[hsl(var(--color-accent-1))]/10 rounded-xl">
                        {{-- Plan Header --}}
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 space-y-2 sm:space-y-0">
                            <div>
                                <h4 class="text-lg font-bold text-[hsl(var(--color-text-primary))]">Semester Membership</h4>
                                <p class="text-sm text-[hsl(var(--color-text-secondary))]">Perfect for focused project work</p>
                            </div>
                            <div class="text-left sm:text-right">
                                <div class="text-2xl font-bold text-[hsl(var(--color-text-primary))]">
                                    MWK 2,000
                                </div>
                                <div class="text-sm text-[hsl(var(--color-text-secondary))]">per semester</div>
                            </div>
                        </div>

                        {{-- Features --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 mb-4">
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm text-[hsl(var(--color-text-muted))]">24/7 Lab access</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm text-[hsl(var(--color-text-muted))]">Expert mentorship</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm text-[hsl(var(--color-text-muted))]">Workshop access</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm text-[hsl(var(--color-text-muted))]">Community events</span>
                            </div>
                        </div>
                    </div>

                    {{-- Action Buttons --}}    
                    <div class="flex flex-col gap-3">
                        <button type="button" class="w-full bg-[hsl(var(--color-accent-1))] hover:bg-[hsl(var(--color-accent-3))] text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-[1.02] focus:ring-4 focus:ring-[hsl(var(--color-accent-1))]/20 outline-none flex items-center justify-center space-x-2 group">
                            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span>Complete Payment</span>
                        </button>

                        <a href="{{ route('home') }}" class="w-full bg-slate-100 hover:bg-slate-200 dark:bg-slate-700 dark:hover:bg-slate-600 text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-[1.02] focus:ring-4 focus:ring-slate-200/50 dark:focus:ring-slate-600/50 outline-none flex items-center justify-center space-x-2 group">
                            <svg class="w-5 h-5 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span>Cancel</span>
                        </a>
                    </div>

                    {{-- PayChangu Security Badge --}}
                    <div class="flex items-center justify-center space-x-2 text-sm text-[hsl(var(--color-text-muted))]">
                        <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span>Secure payments powered by</span>
                        <span class="font-semibold text-[hsl(var(--color-accent-1))]">PayChangu</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Content Area --}}
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-[hsl(var(--color-border))]">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23f3f4f6" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
        </div>
    </div>
</x-layouts.app>
