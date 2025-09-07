{{-- resources/views/components/navigation.blade.php --}}
<header 
    x-data="{
        navOpen: false,
        userDropdownOpen: false,
        notificationDropdownOpen: false,
        
        closeDropdowns() {
            this.userDropdownOpen = false;
            this.notificationDropdownOpen = false;
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
    <nav class="bg-white/90 dark:bg-gray-900/90 backdrop-blur-md border border-gray-200/50 dark:border-gray-700/50 rounded-2xl shadow-xl px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo with Icon -->
            <div class="flex-shrink-0 flex items-center space-x-3">
                <div class="w-8 h-8 bg-gradient-to-br from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <a href="{{ route('home') }}" class="text-2xl font-bold bg-gradient-to-r from-gray-900 to-gray-600 dark:from-white dark:to-gray-300 bg-clip-text text-transparent">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-2">
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400' }}">
                   Home
                </a>
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400' }}">
                   About
                </a>
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400' }}">
                   Services
                </a>
                <a href="{{ route('home') }}" 
                   class="px-4 py-2 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-blue-600 dark:hover:text-blue-400' }}">
                   Contact
                </a>
            </div>

            <!-- Right Side Controls -->
            <div class="flex items-center space-x-3">
                @auth
                    <!-- Notifications (Only for logged-in users) -->
                    <div class="relative">
                        <button 
                            @click="notificationDropdownOpen = !notificationDropdownOpen; userDropdownOpen = false"
                            class="relative p-2.5 rounded-xl bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 group"
                            :class="{ 'ring-2 ring-blue-500 ring-offset-2 dark:ring-offset-gray-900': notificationDropdownOpen }"
                        >
                            <svg class="w-5 h-5 text-gray-600 dark:text-gray-300 group-hover:text-blue-600 dark:group-hover:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5-5 5-5h-5m-6 0H4l5 5-5 5h5m4-8V7a3 3 0 00-6 0v5"></path>
                            </svg>
                            <!-- Notification Badge -->
                            <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center font-medium">3</span>
                        </button>

                        <!-- Notifications Dropdown -->
                        <div 
                            x-show="notificationDropdownOpen"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-80 bg-white dark:bg-gray-800 rounded-xl shadow-xl border border-gray-200 dark:border-gray-700 overflow-hidden"
                            style="display: none;"
                        >
                            <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Notifications</h3>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <!-- Sample Notifications -->
                                <div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700 border-b border-gray-100 dark:border-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">Welcome to {{ config('app.name') }}!</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Complete your profile to get started</p>
                                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">2 hours ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700 border-b border-gray-100 dark:border-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mt-2"></div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">Profile Updated</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Your profile information has been successfully updated</p>
                                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">1 day ago</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-2 h-2 bg-yellow-500 rounded-full mt-2"></div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">System Maintenance</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Scheduled maintenance tonight from 2-4 AM</p>
                                            <p class="text-xs text-gray-400 dark:text-gray-500 mt-1">2 days ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                                <a href="#" class="text-sm text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">View all notifications</a>
                            </div>
                        </div>
                    </div>
                @endauth

                <!-- User Profile Dropdown -->
                <div class="relative">
                    <button 
                        @click="userDropdownOpen = !userDropdownOpen; notificationDropdownOpen = false"
                        class="flex items-center space-x-3 px-3 py-2 rounded-xl bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200 group"
                        :class="{ 'ring-2 ring-blue-500 ring-offset-2 dark:ring-offset-gray-900': userDropdownOpen }"
                    >
                        <!-- User Avatar/Icon -->
                        @auth
                            @if(Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-8 h-8 rounded-lg object-cover">
                            @else
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-sm font-medium">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            @endif
                        @else
                            <div class="w-8 h-8 rounded-lg bg-gray-300 dark:bg-gray-600 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        @endauth
                        
                        <!-- User Name -->
                        <div class="hidden sm:block">
                            <span class="text-sm font-medium text-gray-900 dark:text-white">
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Guest
                                @endauth
                            </span>
                        </div>
                        
                        <!-- Dropdown Arrow -->
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 group-hover:text-gray-700 dark:group-hover:text-gray-200 transition-transform duration-200" :class="{ 'rotate-180': userDropdownOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- User Dropdown Menu -->
                    <div 
                        x-show="userDropdownOpen"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-64 bg-white dark:bg-gray-800 rounded-xl shadow-xl border border-gray-200 dark:border-gray-700 overflow-hidden"
                        style="display: none;"
                    >
                        @guest
                            <!-- Guest User Options -->
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-800">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome!</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">Sign in to access your account</p>
                            </div>
                            <div class="p-2">
                                <a href="{{ route('login') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50">
                                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium">Sign In</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Access your account</p>
                                    </div>
                                </a>
                                <a href="{{ route('register') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:bg-green-200 dark:group-hover:bg-green-900/50">
                                        <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-medium">Sign Up</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Create new account</p>
                                    </div>
                                </a>
                            </div>
                        @else
                            <!-- Logged In User Options -->
                            <div class="p-6 border-b border-gray-200 dark:border-gray-700 bg-gradient-to-r from-blue-50 to-purple-50 dark:from-gray-800 dark:to-gray-800">
                                <div class="flex items-center space-x-3">
                                    @if(Auth::user()->avatar)
                                        <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-12 h-12 rounded-xl object-cover">
                                    @else
                                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white font-medium text-lg">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-300">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-2">
                                <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:bg-purple-200 dark:group-hover:bg-purple-900/50">
                                        <svg class="w-4 h-4 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Profile</span>
                                </a>
                                
                                @if(Route::has('profile.edit'))
                                <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-gray-100 dark:bg-gray-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-gray-200 dark:group-hover:bg-gray-600">
                                        <svg class="w-4 h-4 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Settings</span>
                                </a>
                                @endif
                                
                                @if(Route::has('dashboard'))
                                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50">
                                        <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Dashboard</span>
                                </a>
                                @endif
                                
                                @can('admin')
                                <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-colors duration-200 group">
                                    <div class="w-8 h-8 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:bg-orange-200 dark:group-hover:bg-orange-900/50">
                                        <svg class="w-4 h-4 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Admin Panel</span>
        
                            
                                </a>
                                @endcan
                                
                                <div class="border-t border-gray-200 dark:border-gray-700 my-2"></div>
                                
                                <button 
                                    @click="logout()"
                                    class="flex items-center w-full px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors duration-200 group"
                                >
                                    <div class="w-8 h-8 bg-red-100 dark:bg-red-900/30 rounded-lg flex items-center justify-center mr-3 group-hover:bg-red-200 dark:group-hover:bg-red-900/50">
                                        <svg class="w-4 h-4 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    class="lg:hidden p-2.5 rounded-xl bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-all duration-200"
                    :class="{ 'ring-2 ring-blue-500 ring-offset-2 dark:ring-offset-gray-900': navOpen }"
                >
                    <svg x-show="!navOpen" class="w-5 h-5 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="navOpen" class="w-5 h-5 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div 
            x-show="navOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="lg:hidden mt-6 pt-6 border-t border-gray-200 dark:border-gray-700"
            style="display: none;"
        >
            <div class="flex flex-col space-y-2 pb-4">
                <a href="{{ route('home') }}" @click="navOpen = false" 
                   class="px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                   Home
                </a>
                <a href="{{ route('home') }}" @click="navOpen = false" 
                   class="px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                   About
                </a>
                <a href="{{ route('home') }}" @click="navOpen = false" 
                   class="px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                   Services
                </a>
                <a href="{{ route('home') }}" @click="navOpen = false" 
                   class="px-4 py-3 rounded-xl text-sm font-medium transition-all duration-200 {{ request()->routeIs('home') ? 'bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
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