{{-- resources/views/components/navigation.blade.php --}}
<header 
    x-data="{
        navOpen: false,
        userDropdownOpen: false,
        notificationDropdownOpen: false,
        servicesDropdownOpen: false,
        resourcesDropdownOpen: false,
        
        closeDropdowns() {
            this.userDropdownOpen = false;
            this.notificationDropdownOpen = false;
            this.servicesDropdownOpen = false;
            this.resourcesDropdownOpen = false;
            this.navOpen = false;
        },
        
        logout() {
            document.getElementById('logout-form').submit();
        }
    }" 
    @click.away="closeDropdowns()"
    class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-7xl px-4"
>
    <!-- Main Navigation Container -->
    <nav class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-lg border border-slate-200/20 dark:border-slate-700/30 rounded-2xl shadow-lg shadow-slate-900/5 px-6 py-3">
        <div class="flex items-center justify-between">
            <!-- Logo with Icon -->
            <div class="flex-shrink-0 flex items-center space-x-3">
                <div class="w-8 h-8 bg-slate-900 dark:bg-slate-100 rounded-lg flex items-center justify-center transition-transform duration-300 hover:scale-110">
                    <svg class="w-5 h-5 text-white dark:text-slate-900" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <a href="{{ route('home') }}" class="text-xl font-semibold text-slate-900 dark:text-slate-100 transition-colors duration-200 hover:text-slate-700 dark:hover:text-slate-300">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg {{ request()->routeIs('home') ? 'text-slate-900 dark:text-slate-100 bg-slate-50 dark:bg-slate-800' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100' }}">
                   Home
                </a>
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg {{ request()->routeIs('about') ? 'text-slate-900 dark:text-slate-100 bg-slate-50 dark:bg-slate-800' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100' }}">
                   About
                </a>
                
                <!-- Services Dropdown -->
                <div class="relative" @click.away="servicesDropdownOpen = false">
                    <button 
                        @click="servicesDropdownOpen = !servicesDropdownOpen; resourcesDropdownOpen = false"
                        class="flex items-center px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg {{ request()->routeIs('services*') ? 'text-slate-900 dark:text-slate-100 bg-slate-50 dark:bg-slate-800' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100' }}"
                        :class="{ 'bg-slate-100 dark:bg-slate-800': servicesDropdownOpen }"
                    >
                        Services
                        <svg class="ml-1 w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': servicesDropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div 
                        x-show="servicesDropdownOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute top-full left-0 mt-2 w-56 bg-white dark:bg-slate-800 rounded-xl shadow-xl shadow-slate-900/10 border border-slate-200/50 dark:border-slate-700/50 overflow-hidden"
                        style="display: none;"
                    >
                        <div class="p-2">
                            <a href="{{ route('home') }}" class="flex items-center px-3 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                    <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Web Development</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Custom websites & apps</p>
                                </div>
                            </a>
                            <a href="{{ route('home') }}" class="flex items-center px-3 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                    <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364-.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Consulting</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Strategic guidance</p>
                                </div>
                            </a>
                            <a href="{{ route('home') }}" class="flex items-center px-3 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                    <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Support</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">24/7 assistance</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Resources Dropdown -->
                <div class="relative" @click.away="resourcesDropdownOpen = false">
                    <button 
                        @click="resourcesDropdownOpen = !resourcesDropdownOpen; servicesDropdownOpen = false"
                        class="flex items-center px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100"
                        :class="{ 'bg-slate-100 dark:bg-slate-800': resourcesDropdownOpen }"
                    >
                        Resources
                        <svg class="ml-1 w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': resourcesDropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                    <div 
                        x-show="resourcesDropdownOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute top-full left-0 mt-2 w-56 bg-white dark:bg-slate-800 rounded-xl shadow-xl shadow-slate-900/10 border border-slate-200/50 dark:border-slate-700/50 overflow-hidden"
                        style="display: none;"
                    >
                        <div class="p-2">
                            <a href="{{ route('home') }}" class="flex items-center px-3 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                    <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Documentation</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">API & guides</p>
                                </div>
                            </a>
                            <a href="{{ route('home') }}" class="flex items-center px-3 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                    <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Blog</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Latest insights</p>
                                </div>
                            </a>
                            <a href="{{ route('home') }}" class="flex items-center px-3 py-2.5 text-sm text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                    <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium">Help Center</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Get support</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('home') }}" 
                   class="px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg {{ request()->routeIs('contact') ? 'text-slate-900 dark:text-slate-100 bg-slate-50 dark:bg-slate-800' : 'text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100' }}">
                   Contact
                </a>
            </div>

            <!-- Right Side Controls -->
            <div class="flex items-center space-x-2">
                @auth
                    <!-- Notifications (Only for logged-in users) -->
                    <div class="relative">
                        <button 
                            @click="notificationDropdownOpen = !notificationDropdownOpen; userDropdownOpen = false"
                            class="relative p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-300 group"
                            :class="{ 'bg-slate-100 dark:bg-slate-800': notificationDropdownOpen }"
                        >
                            <svg class="w-5 h-5 text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-slate-100 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5-5 5-5h-5m-6 0H4l5 5-5 5h5m4-8V7a3 3 0 00-6 0v5"></path>
                            </svg>
                            <!-- Notification Badge -->
                            <span class="absolute -top-0.5 -right-0.5 w-3 h-3 bg-red-500 rounded-full text-xs"></span>
                        </button>

                        <!-- Notifications Dropdown -->
                        <div 
                            x-show="notificationDropdownOpen"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-80 bg-white dark:bg-slate-800 rounded-xl shadow-xl shadow-slate-900/10 border border-slate-200/50 dark:border-slate-700/50 overflow-hidden"
                            style="display: none;"
                        >
                            <div class="p-4 border-b border-slate-200 dark:border-slate-700">
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Notifications</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <!-- Sample Notifications -->
                                <div class="p-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 border-b border-slate-100 dark:border-slate-700/50 transition-colors duration-200">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-slate-600 dark:bg-slate-400 rounded-full mt-2"></div>
                                        <div>
                                            <p class="text-sm font-medium text-slate-900 dark:text-slate-100">System Update</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-1">New features are now available</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">2 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 border-b border-slate-100 dark:border-slate-700/50 transition-colors duration-200">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-slate-600 dark:bg-slate-400 rounded-full mt-2"></div>
                                        <div>
                                            <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Profile Updated</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-1">Your profile has been updated successfully</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">1 day ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors duration-200">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-slate-600 dark:bg-slate-400 rounded-full mt-2"></div>
                                        <div>
                                            <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Welcome!</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400 mt-1">Thanks for joining our platform</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">3 days ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 border-t border-slate-200 dark:border-slate-700">
                                <a href="#" class="text-sm text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 font-medium transition-colors duration-200">View all notifications</a>
                            </div>
                        </div>
                    </div>
                @endauth

                <!-- User Profile Dropdown -->
                <div class="relative">
                    <button 
                        @click="userDropdownOpen = !userDropdownOpen; notificationDropdownOpen = false"
                        class="flex items-center space-x-3 px-3 py-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-300 group"
                        :class="{ 'bg-slate-100 dark:bg-slate-800': userDropdownOpen }"
                    >
                        <!-- User Avatar/Icon -->
                        @auth
                            @if(Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-8 h-8 rounded-lg object-cover">
                            @else
                                <div class="w-8 h-8 rounded-lg bg-slate-900 dark:bg-slate-100 flex items-center justify-center text-white dark:text-slate-900 text-sm font-medium">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            @endif
                        @else
                            <div class="w-8 h-8 rounded-lg bg-slate-300 dark:bg-slate-600 flex items-center justify-center">
                                <svg class="w-5 h-5 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        @endauth
                        
                        <!-- User Name -->
                        <div class="hidden sm:block">
                            <span class="text-sm font-medium text-slate-900 dark:text-slate-100">
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Guest
                                @endauth
                            </span>
                        </div>
                        
                        <!-- Dropdown Arrow -->
                        <svg class="w-4 h-4 text-slate-500 dark:text-slate-400 group-hover:text-slate-700 dark:group-hover:text-slate-200 transition-all duration-200" :class="{ 'rotate-180': userDropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- User Dropdown Menu -->
                    <div 
                        x-show="userDropdownOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95 -translate-y-2"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-64 bg-white dark:bg-slate-800 rounded-xl shadow-xl shadow-slate-900/10 border border-slate-200/50 dark:border-slate-700/50 overflow-hidden"
                        style="display: none;"
                    >
                        @guest
                            <!-- Guest User Options -->
                            <div class="p-6 border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
                                <h3 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Welcome!</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Sign in to access your account</p>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('login') }}" class="flex items-center px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium">Sign In</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Access your account</p>
                                    </div>
                                </a>
                                <a href="{{ route('register') }}" class="flex items-center px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium">Sign Up</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Create new account</p>
                                    </div>
                                </a>
                            </div>
                        @else
                            <!-- Logged In User Options -->
                            <div class="p-6 border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
                                <div class="flex items-center space-x-3">
                                    @if(Auth::user()->avatar)
                                        <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-12 h-12 rounded-xl object-cover">
                                    @else
                                        <div class="w-12 h-12 rounded-xl bg-slate-900 dark:bg-slate-100 flex items-center justify-center text-white dark:text-slate-900 font-medium text-lg">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-semibold text-slate-900 dark:text-slate-100">{{ Auth::user()->name }}</p>
                                        <p class="text-sm text-slate-600 dark:text-slate-400">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-2">
                                <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Profile</span>
                                </a>
                                
                                @if(Route::has('profile.edit'))
                                <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Settings</span>
                                </a>
                                @endif
                                
                                @if(Route::has('dashboard'))
                                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Dashboard</span>
                                </a>
                                @endif
                                
                                @can('admin')
                                <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700/50 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-slate-200 dark:group-hover:bg-slate-600 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Admin Panel</span>
                                </a>
                                @endcan
                                
                                <div class="border-t border-slate-200 dark:border-slate-700 my-2"></div>
                                
                                <button 
                                    @click="logout()"
                                    class="flex items-center w-full px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors duration-200 group"
                                >
                                    <div class="w-8 h-8 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-red-100 dark:group-hover:bg-red-900/30 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-slate-600 dark:text-slate-300 group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Sign Out</span>
                                </button>
                            </div>
                        @endauth
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button 
                    @click="navOpen = !navOpen"
                    class="lg:hidden p-2 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-300"
                    :class="{ 'bg-slate-100 dark:bg-slate-800': navOpen }"
                >
                    <svg x-show="!navOpen" class="w-5 h-5 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="navOpen" class="w-5 h-5 text-slate-600 dark:text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div 
            x-show="navOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="lg:hidden mt-6 pt-6 border-t border-slate-200 dark:border-slate-700"
            style="display: none;"
        >
            <div class="flex flex-col space-y-1 pb-4">
                <a href="{{ route('home') }}" @click="navOpen = false" 
                   class="px-4 py-3 text-sm font-medium transition-all duration-200 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg {{ request()->routeIs('home') ? 'text-slate-900 dark:text-slate-100 bg-slate-50 dark:bg-slate-800' : 'text-slate-600 dark:text-slate-400' }}">
                   Home
                </a>
                <a href="{{ route('home') }}" @click="navOpen = false" 
                   class="px-4 py-3 text-sm font-medium transition-all duration-200 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg {{ request()->routeIs('about') ? 'text-slate-900 dark:text-slate-100 bg-slate-50 dark:bg-slate-800' : 'text-slate-600 dark:text-slate-400' }}">
                   About
                </a>
                
                <!-- Mobile Services Section -->
                <div class="px-4 py-2">
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Services</p>
                    <div class="pl-3 space-y-1">
                        <a href="{{ route('home') }}" @click="navOpen = false" 
                           class="block px-3 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-200">
                           Web Development
                        </a>
                        <a href="{{ route('home') }}" @click="navOpen = false" 
                           class="block px-3 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-200">
                           Consulting
                        </a>
                        <a href="{{ route('home') }}" @click="navOpen = false" 
                           class="block px-3 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-200">
                           Support
                        </a>
                    </div>
                </div>

                <!-- Mobile Resources Section -->
                <div class="px-4 py-2">
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Resources</p>
                    <div class="pl-3 space-y-1">
                        <a href="{{ route('home') }}" @click="navOpen = false" 
                           class="block px-3 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-200">
                           Documentation
                        </a>
                        <a href="{{ route('home') }}" @click="navOpen = false" 
                           class="block px-3 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-200">
                           Blog
                        </a>
                        <a href="{{ route('home') }}" @click="navOpen = false" 
                           class="block px-3 py-2 text-sm text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-all duration-200">
                           Help Center
                        </a>
                    </div>
                </div>

                <a href="{{ route('home') }}" @click="navOpen = false" 
                   class="px-4 py-3 text-sm font-medium transition-all duration-200 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg {{ request()->routeIs('contact') ? 'text-slate-900 dark:text-slate-100 bg-slate-50 dark:bg-slate-800' : 'text-slate-600 dark:text-slate-400' }}">
                   Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Hidden Logout Form -->
    @auth
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
    @endauth


</header>