{{-- resources/views/components/navigation.blade.php --}}
@php
    $navigationConfig = [
        'brand' => [
            'name' => config('app.name', 'Laravel'),
            'route' => 'home',
            'icon' => '<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>',
        ],
        'mainNav' => [
            [
                'label' => 'Home',
                'route' => 'home',
                'routeCheck' => 'home',
            ],
            [
                'label' => 'About',
                'route' => 'home', // Change to actual about route
                'routeCheck' => 'about',
            ],
            [
                'label' => 'Services',
                'type' => 'dropdown',
                'routeCheck' => 'services*',
                'items' => [
                    [
                        'label' => 'Web Development',
                        'description' => 'Custom websites & apps',
                        'route' => 'home', // Change to actual route
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>',
                    ],
                    [
                        'label' => 'Consulting',
                        'description' => 'Strategic guidance',
                        'route' => 'home', // Change to actual route
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364-.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>',
                    ],
                    [
                        'label' => 'Support',
                        'description' => '24/7 assistance',
                        'route' => 'home', // Change to actual route
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>',
                    ],
                ],
            ],
            [
                'label' => 'Resources',
                'type' => 'dropdown',
                'routeCheck' => 'resources*',
                'items' => [
                    [
                        'label' => 'Documentation',
                        'description' => 'API & guides',
                        'route' => 'home', // Change to actual route
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>',
                    ],
                    [
                        'label' => 'Blog',
                        'description' => 'Latest insights',
                        'route' => 'home', // Change to actual route
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>',
                    ],
                    [
                        'label' => 'Help Center',
                        'description' => 'Get support',
                        'route' => 'home', // Change to actual route
                        'icon' =>
                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                    ],
                ],
            ],
            [
                'label' => 'Contact',
                'route' => 'home', // Change to actual contact route
                'routeCheck' => 'contact',
            ],
        ],
        'userMenu' => [
            'guest' => [
                [
                    'label' => 'Sign In',
                    'description' => 'Access your account',
                    'route' => 'login',
                    'icon' =>
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>',
                ],
                [
                    'label' => 'Sign Up',
                    'description' => 'Create new account',
                    'route' => 'register',
                    'icon' =>
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>',
                ],
            ],
            'authenticated' => [
                [
                    'label' => 'Profile',
                    'route' => 'home', // Change to actual profile route
                    'icon' =>
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>',
                ],
                [
                    'label' => 'Settings',
                    'route' => 'home', // Will be conditionally shown if profile.edit route exists
                    'routeExists' => 'profile.edit',
                    'icon' =>
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>',
                ],
                [
                    'label' => 'Dashboard',
                    'route' => 'dashboard',
                    'routeExists' => 'dashboard',
                    'icon' =>
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>',
                ],
                [
                    'label' => 'Admin Panel',
                    'route' => 'home', // Change to actual admin route
                    'permission' => 'admin',
                    'icon' =>
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>',
                ],
            ],
        ],
        'notifications' => [
            'enabled' => true, // Set to false to hide notifications
            'sampleData' => [
                [
                    'title' => 'System Update',
                    'message' => 'New features are now available',
                    'time' => '2 hours ago',
                ],
                [
                    'title' => 'Profile Updated',
                    'message' => 'Your profile has been updated successfully',
                    'time' => '1 day ago',
                ],
                [
                    'title' => 'Welcome!',
                    'message' => 'Thanks for joining our platform',
                    'time' => '3 days ago',
                ],
            ],
        ],
    ];
@endphp

<header id="navigation-header" class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-7xl px-4">
    <!-- Main Navigation Container -->
    <nav
        class="bg-white/95 dark:bg-zinc-900/95 backdrop-blur-lg border border-zinc-200/20 dark:border-zinc-700/30 rounded-2xl shadow-lg shadow-zinc-900/5 px-6 py-3">
        <div class="flex items-center justify-between">
            <!-- Logo with Icon -->
            <div class="flex-shrink-0 flex items-center space-x-3">
                <div
                    class="w-8 h-8 bg-zinc-900 dark:bg-white rounded-lg flex items-center justify-center transition-transform duration-300 hover:scale-110">
                    <svg class="w-5 h-5 text-white dark:text-zinc-900" fill="currentColor" viewBox="0 0 24 24">
                        {!! $navigationConfig['brand']['icon'] !!}
                    </svg>
                </div>
                <a href="{{ route($navigationConfig['brand']['route']) }}"
                    class="hidden sm:block text-xl font-semibold text-zinc-900 dark:text-white transition-colors duration-200 hover:text-zinc-700 dark:hover:text-zinc-300">
                    {{ $navigationConfig['brand']['name'] }}
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-1">
                @foreach ($navigationConfig['mainNav'] as $index => $navItem)
                    @if (isset($navItem['type']) && $navItem['type'] === 'dropdown')
                        <!-- Dropdown Menu -->
                        <div class="relative" id="dropdown-{{ strtolower($navItem['label']) }}">
                            <button onclick="toggleDropdown('{{ strtolower($navItem['label']) }}')"
                                class="flex items-center px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg dropdown-button {{ request()->routeIs($navItem['routeCheck']) ? 'text-zinc-900 dark:text-white bg-zinc-50 dark:bg-zinc-800' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white' }}">
                                {{ $navItem['label'] }}
                                <svg class="ml-1 w-4 h-4 transition-transform duration-200 dropdown-arrow"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div id="dropdown-menu-{{ strtolower($navItem['label']) }}"
                                class="absolute top-full left-0 mt-2 w-56 bg-white dark:bg-zinc-800 rounded-xl shadow-xl shadow-zinc-900/10 border border-zinc-200/50 dark:border-zinc-700/50 overflow-hidden dropdown-menu opacity-0 scale-95 -translate-y-2 transition-all duration-200 pointer-events-none">
                                <div class="p-2">
                                    @foreach ($navItem['items'] as $subItem)
                                        <a href="{{ route($subItem['route']) }}"
                                            class="flex items-center px-3 py-2.5 text-sm text-zinc-700 dark:text-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-700/50 rounded-lg transition-colors duration-200 group">
                                            <div
                                                class="w-8 h-8 bg-zinc-100 dark:bg-zinc-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-zinc-200 dark:group-hover:bg-zinc-600 transition-colors duration-200">
                                                <svg class="w-4 h-4 text-zinc-600 dark:text-zinc-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    {!! $subItem['icon'] !!}
                                                </svg>
                                            </div>
                                            <div>
                                                <p class="font-medium">{{ $subItem['label'] }}</p>
                                                <p class="text-xs text-zinc-500 dark:text-zinc-400">
                                                    {{ $subItem['description'] }}</p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Regular Link -->
                        <a href="{{ route($navItem['route']) }}"
                            class="px-4 py-2 text-sm font-medium transition-all duration-300 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg {{ request()->routeIs($navItem['routeCheck']) ? 'text-zinc-900 dark:text-white bg-zinc-50 dark:bg-zinc-800' : 'text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white' }}">
                            {{ $navItem['label'] }}
                        </a>
                    @endif
                @endforeach
            </div>

            <!-- Right Side Controls -->
            <div class="flex items-center space-x-2">
                @auth
                    @if ($navigationConfig['notifications']['enabled'])
                        <!-- Notifications (Only for logged-in users) -->
                        <div class="relative">
                            <button onclick="toggleNotifications()" id="notifications-button"
                                class="relative p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300 group">
                                <svg class="w-5 h-5 text-zinc-600 dark:text-zinc-400 group-hover:text-zinc-900 dark:group-hover:text-white transition-colors duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-5-5 5-5h-5m-6 0H4l5 5-5 5h5m4-8V7a3 3 0 00-6 0v5"></path>
                                </svg>
                                <!-- Notification Badge -->
                                <span class="absolute -top-0.5 -right-0.5 w-3 h-3 bg-red-500 rounded-full text-xs"></span>
                            </button>

                            <!-- Notifications Dropdown -->
                            <div id="notifications-dropdown"
                                class="absolute right-0 mt-2 w-80 bg-white dark:bg-zinc-800 rounded-xl shadow-xl shadow-zinc-900/10 border border-zinc-200/50 dark:border-zinc-700/50 overflow-hidden opacity-0 scale-95 -translate-y-2 transition-all duration-200 pointer-events-none">
                                <div class="p-4 border-b border-zinc-200 dark:border-zinc-700">
                                    <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">Notifications</h3>
                                </div>
                                <div class="max-h-96 overflow-y-auto">
                                    @foreach ($navigationConfig['notifications']['sampleData'] as $notification)
                                        <div
                                            class="p-4 hover:bg-zinc-50 dark:hover:bg-zinc-700/50 border-b border-zinc-100 dark:border-zinc-700/50 transition-colors duration-200">
                                            <div class="flex items-start space-x-3">
                                                <div class="w-2 h-2 bg-zinc-600 dark:bg-zinc-400 rounded-full mt-2"></div>
                                                <div>
                                                    <p class="text-sm font-medium text-zinc-900 dark:text-white">
                                                        {{ $notification['title'] }}</p>
                                                    <p class="text-xs text-zinc-600 dark:text-zinc-400 mt-1">
                                                        {{ $notification['message'] }}</p>
                                                    <p class="text-xs text-zinc-500 dark:text-zinc-500 mt-1">
                                                        {{ $notification['time'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="p-4 border-t border-zinc-200 dark:border-zinc-700">
                                    <a href="#"
                                        class="text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white font-medium transition-colors duration-200">View
                                        all notifications</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endauth

                <!-- User Profile Dropdown -->
                <div class="relative">
                    <button onclick="toggleUserMenu()" id="user-menu-button"
                        class="flex items-center space-x-3 px-3 py-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300 group">
                        <!-- User Avatar/Icon -->
                        @auth
                            @if (Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"
                                    class="w-8 h-8 rounded-lg object-cover">
                            @else
                                <div
                                    class="w-8 h-8 rounded-lg bg-zinc-900 dark:bg-white flex items-center justify-center text-white dark:text-zinc-900 text-sm font-medium">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            @endif
                        @else
                            <div class="w-8 h-8 rounded-lg bg-zinc-300 dark:bg-zinc-600 flex items-center justify-center">
                                <svg class="w-5 h-5 text-zinc-600 dark:text-zinc-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        @endauth

                        <!-- User Name -->
                        <div class="hidden sm:block">
                            <span class="text-sm font-medium text-zinc-900 dark:text-white">
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                    Guest
                                @endauth
                            </span>
                        </div>

                        <!-- Dropdown Arrow -->
                        <svg id="user-dropdown-arrow"
                            class="w-4 h-4 text-zinc-500 dark:text-zinc-400 group-hover:text-zinc-700 dark:group-hover:text-zinc-200 transition-all duration-200"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- User Dropdown Menu -->
                    <div id="user-dropdown"
                        class="absolute right-0 mt-2 w-64 bg-white dark:bg-zinc-800 rounded-xl shadow-xl shadow-zinc-900/10 border border-zinc-200/50 dark:border-zinc-700/50 overflow-hidden opacity-0 scale-95 -translate-y-2 transition-all duration-200 pointer-events-none">
                        @guest
                            <!-- Guest User Options -->
                            <div class="p-6 border-b border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800/50">
                                <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">Welcome!</h3>
                                <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">Sign in to access your account</p>
                            </div>
                            <div class="p-2">
                                @foreach ($navigationConfig['userMenu']['guest'] as $guestItem)
                                    <a href="{{ route($guestItem['route']) }}"
                                        class="flex items-center px-4 py-3 text-zinc-700 dark:text-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-700/50 rounded-lg transition-colors duration-200 group">
                                        <div
                                            class="w-8 h-8 bg-zinc-100 dark:bg-zinc-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-zinc-200 dark:group-hover:bg-zinc-600 transition-colors duration-200">
                                            <svg class="w-4 h-4 text-zinc-600 dark:text-zinc-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                {!! $guestItem['icon'] !!}
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-medium">{{ $guestItem['label'] }}</p>
                                            <p class="text-xs text-zinc-500 dark:text-zinc-400">
                                                {{ $guestItem['description'] }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @else
                            <!-- Logged In User Options -->
                            <div class="p-6 border-b border-zinc-200 dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800/50">
                                <div class="flex items-center space-x-3">
                                    @if (Auth::user()->avatar)
                                        <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}"
                                            class="w-12 h-12 rounded-xl object-cover">
                                    @else
                                        <div
                                            class="w-12 h-12 rounded-xl bg-zinc-900 dark:bg-white flex items-center justify-center text-white dark:text-zinc-900 font-medium text-lg">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-semibold text-zinc-900 dark:text-white">{{ Auth::user()->name }}
                                        </p>
                                        <p class="text-sm text-zinc-600 dark:text-zinc-400">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-2">
                                @foreach ($navigationConfig['userMenu']['authenticated'] as $userItem)
                                    @php
                                        $shouldShow = true;

                                        // Check if route exists requirement is met
                                        if (isset($userItem['routeExists']) && !Route::has($userItem['routeExists'])) {
                                            $shouldShow = false;
                                        }

                                        // Check if permission requirement is met
                                        if (isset($userItem['permission']) && !Gate::check($userItem['permission'])) {
                                            $shouldShow = false;
                                        }
                                    @endphp

                                    @if ($shouldShow)
                                        <a href="{{ route($userItem['route']) }}"
                                            class="flex items-center px-4 py-3 text-zinc-700 dark:text-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-700/50 rounded-lg transition-colors duration-200 group">
                                            <div
                                                class="w-8 h-8 bg-zinc-100 dark:bg-zinc-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-zinc-200 dark:group-hover:bg-zinc-600 transition-colors duration-200">
                                                <svg class="w-4 h-4 text-zinc-600 dark:text-zinc-300" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    {!! $userItem['icon'] !!}
                                                </svg>
                                            </div>
                                            <span class="font-medium">{{ $userItem['label'] }}</span>
                                        </a>
                                    @endif
                                @endforeach

                                <div class="border-t border-zinc-200 dark:border-zinc-700 my-2"></div>

                                <button onclick="logout()"
                                    class="flex items-center w-full px-4 py-3 text-zinc-700 dark:text-zinc-300 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors duration-200 group">
                                    <div
                                        class="w-8 h-8 bg-zinc-100 dark:bg-zinc-700 rounded-lg flex items-center justify-center mr-3 group-hover:bg-red-100 dark:group-hover:bg-red-900/30 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-zinc-600 dark:text-zinc-300 group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors duration-200"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Sign Out</span>
                                </button>
                            </div>
                        @endauth
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileNav()" id="mobile-menu-button"
                    class="lg:hidden p-2 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-300">
                    <svg id="mobile-menu-open" class="w-5 h-5 text-zinc-600 dark:text-zinc-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="mobile-menu-close" class="w-5 h-5 text-zinc-600 dark:text-zinc-400 hidden"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-nav"
            class="lg:hidden mt-6 pt-6 border-t border-zinc-200 dark:border-zinc-700 opacity-0 -translate-y-4 transition-all duration-300 pointer-events-none overflow-hidden"
            style="max-height: 0;">
            <div class="flex flex-col space-y-1 pb-4">
                @foreach ($navigationConfig['mainNav'] as $navItem)
                    @if (isset($navItem['type']) && $navItem['type'] === 'dropdown')
                        <!-- Mobile Dropdown Section -->
                        <div class="px-4 py-2">
                            <p
                                class="text-sm font-medium text-zinc-600 dark:text-zinc-400 mb-2">
                                {{ $navItem['label'] }}</p>
                            <div class="pl-3 space-y-1">
                                @foreach ($navItem['items'] as $subItem)
                                    <a href="{{ route($subItem['route']) }}" onclick="closeMobileNav()"
                                        class="block px-3 py-2 text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg transition-all duration-200">
                                        {{ $subItem['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <!-- Mobile Regular Link -->
                        <a href="{{ route($navItem['route']) }}" onclick="closeMobileNav()"
                            class="px-4 py-3 text-sm font-medium transition-all duration-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 rounded-lg {{ request()->routeIs($navItem['routeCheck']) ? 'text-zinc-900 dark:text-white bg-zinc-50 dark:bg-zinc-800' : 'text-zinc-600 dark:text-zinc-400' }}">
                            {{ $navItem['label'] }}
                        </a>
                    @endif
                @endforeach
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // State management
        let state = {
            navOpen: false,
            userDropdownOpen: false,
            notificationDropdownOpen: false,
            servicesDropdownOpen: false,
            resourcesDropdownOpen: false
        };

        // Utility functions
        function closeAllDropdowns() {
            state.userDropdownOpen = false;
            state.notificationDropdownOpen = false;
            state.servicesDropdownOpen = false;
            state.resourcesDropdownOpen = false;
            state.navOpen = false;
            updateUI();
        }

        function updateUI() {
            // Update user dropdown
            updateDropdown('user-dropdown', 'user-dropdown-arrow', 'user-menu-button', state.userDropdownOpen);

            // Update notifications dropdown
            if (document.getElementById('notifications-dropdown')) {
                updateDropdown('notifications-dropdown', null, 'notifications-button', state
                    .notificationDropdownOpen);
            }

            // Update services dropdown
            updateDropdown('dropdown-menu-services', 'dropdown-services .dropdown-arrow',
                'dropdown-services .dropdown-button', state.servicesDropdownOpen);

            // Update resources dropdown
            updateDropdown('dropdown-menu-resources', 'dropdown-resources .dropdown-arrow',
                'dropdown-resources .dropdown-button', state.resourcesDropdownOpen);

            // Update mobile nav
            updateMobileNav();
        }

        function updateDropdown(menuId, arrowSelector, buttonSelector, isOpen) {
            const menu = document.getElementById(menuId);
            const arrow = arrowSelector ? document.querySelector(arrowSelector) : null;
            const button = document.querySelector(buttonSelector);

            if (menu) {
                if (isOpen) {
                    menu.classList.remove('opacity-0', 'scale-95', '-translate-y-2', 'pointer-events-none');
                    menu.classList.add('opacity-100', 'scale-100', 'translate-y-0');
                } else {
                    menu.classList.add('opacity-0', 'scale-95', '-translate-y-2', 'pointer-events-none');
                    menu.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
                }
            }

            if (arrow) {
                if (isOpen) {
                    arrow.classList.add('rotate-180');
                } else {
                    arrow.classList.remove('rotate-180');
                }
            }

            if (button) {
                if (isOpen) {
                    button.classList.add('bg-zinc-100', 'dark:bg-zinc-800');
                } else {
                    button.classList.remove('bg-zinc-100', 'dark:bg-zinc-800');
                }
            }
        }

        function updateMobileNav() {
            const mobileNav = document.getElementById('mobile-nav');
            const openIcon = document.getElementById('mobile-menu-open');
            const closeIcon = document.getElementById('mobile-menu-close');
            const button = document.getElementById('mobile-menu-button');

            if (state.navOpen) {
                mobileNav.style.maxHeight = mobileNav.scrollHeight + 'px';
                mobileNav.classList.remove('opacity-0', '-translate-y-4', 'pointer-events-none');
                mobileNav.classList.add('opacity-100', 'translate-y-0');
                openIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                button.classList.add('bg-zinc-100', 'dark:bg-zinc-800');
            } else {
                mobileNav.style.maxHeight = '0';
                mobileNav.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
                mobileNav.classList.remove('opacity-100', 'translate-y-0');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                button.classList.remove('bg-zinc-100', 'dark:bg-zinc-800');
            }
        }

        // Global functions for onclick handlers
        window.toggleDropdown = function(type) {
            // Close other dropdowns first
            if (type !== 'services') state.servicesDropdownOpen = false;
            if (type !== 'resources') state.resourcesDropdownOpen = false;
            if (type !== 'user') state.userDropdownOpen = false;
            if (type !== 'notifications') state.notificationDropdownOpen = false;

            // Toggle the requested dropdown
            switch (type) {
                case 'services':
                    state.servicesDropdownOpen = !state.servicesDropdownOpen;
                    break;
                case 'resources':
                    state.resourcesDropdownOpen = !state.resourcesDropdownOpen;
                    break;
            }

            updateUI();
        };

        window.toggleUserMenu = function() {
            state.userDropdownOpen = !state.userDropdownOpen;
            state.notificationDropdownOpen = false;
            state.servicesDropdownOpen = false;
            state.resourcesDropdownOpen = false;
            updateUI();
        };

        window.toggleNotifications = function() {
            state.notificationDropdownOpen = !state.notificationDropdownOpen;
            state.userDropdownOpen = false;
            state.servicesDropdownOpen = false;
            state.resourcesDropdownOpen = false;
            updateUI();
        };

        window.toggleMobileNav = function() {
            state.navOpen = !state.navOpen;
            // Close other dropdowns when opening mobile nav
            if (state.navOpen) {
                state.userDropdownOpen = false;
                state.notificationDropdownOpen = false;
                state.servicesDropdownOpen = false;
                state.resourcesDropdownOpen = false;
            }
            updateUI();
        };

        window.closeMobileNav = function() {
            state.navOpen = false;
            updateUI();
        };

        window.logout = function() {
            const logoutForm = document.getElementById('logout-form');
            if (logoutForm) {
                logoutForm.submit();
            }
        };

        // Click outside to close dropdowns
        document.addEventListener('click', function(event) {
            const header = document.getElementById('navigation-header');
            if (!header.contains(event.target)) {
                if (state.userDropdownOpen || state.notificationDropdownOpen ||
                    state.servicesDropdownOpen || state.resourcesDropdownOpen || state.navOpen) {
                    closeAllDropdowns();
                }
            }
        });

        // Handle escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeAllDropdowns();
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            // Close mobile nav on larger screens
            if (window.innerWidth >= 1024 && state.navOpen) {
                state.navOpen = false;
                updateUI();
            }
        });

        // Initialize UI
        updateUI();
    });
</script>
