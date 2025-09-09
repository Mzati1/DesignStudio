{{-- resources/views/components/modern-footer.blade.php --}}
<footer class="relative w-full mt-20 bg-gradient-to-b from-zinc-50 to-white dark:from-zinc-900 dark:to-zinc-800"
    id="main-footer">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 opacity-5 dark:opacity-10">
        <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="footerGrid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5" />
                </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#footerGrid)" />
        </svg>
    </div>

    <div class="relative">
        {{-- Main Footer Content --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            @php
                $footerLinks = [
                    'Company' => [
                        ['name' => 'About Us', 'href' => '/about'],
                        ['name' => 'Our Team', 'href' => '/team'],
                        ['name' => 'Careers', 'href' => '/careers'],
                        ['name' => 'Press Kit', 'href' => '/press'],
                    ],
                    'Services' => [
                        ['name' => 'Web Design', 'href' => '/services/web-design'],
                        ['name' => 'UI/UX Design', 'href' => '/services/ui-ux'],
                        ['name' => 'Development', 'href' => '/services/development'],
                        ['name' => 'Branding', 'href' => '/services/branding'],
                    ],
                    'Resources' => [
                        ['name' => 'Blog', 'href' => '/blog'],
                        ['name' => 'Portfolio', 'href' => '/portfolio'],
                        ['name' => 'Case Studies', 'href' => '/case-studies'],
                        ['name' => 'Documentation', 'href' => '/docs'],
                    ],
                    'Support' => [
                        ['name' => 'Help Center', 'href' => '/help'],
                        ['name' => 'Contact Us', 'href' => '/contact'],
                        ['name' => 'Status', 'href' => '/status'],
                        ['name' => 'Feedback', 'href' => '/feedback'],
                    ],
                ];

                $socialPlatforms = [
                    [
                        'name' => 'Twitter',
                        'href' => 'https://twitter.com/mustdesignstudio',
                        'icon' =>
                            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>',
                    ],
                    [
                        'name' => 'LinkedIn',
                        'href' => 'https://linkedin.com/company/mustdesignstudio',
                        'icon' =>
                            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452z"/></svg>',
                    ],
                    [
                        'name' => 'Instagram',
                        'href' => 'https://instagram.com/mustdesignstudio',
                        'icon' =>
                            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C8.396 0 7.929.01 7.102.048 6.273.088 5.718.222 5.238.42a4.83 4.83 0 00-1.771 1.153A4.83 4.83 0 00.42 3.344c-.198.48-.332 1.035-.372 1.864C.01 6.035 0 6.502 0 10.124v3.753c0 3.621.01 4.088.048 4.915.04.829.174 1.384.372 1.864.205.69.478 1.275.905 1.771a4.83 4.83 0 001.771 1.153c.48.198 1.035.332 1.864.372.827.038 1.294.048 4.915.048h3.753c3.621 0 4.088-.01 4.915-.048.829-.04 1.384-.174 1.864-.372a4.83 4.83 0 001.771-1.153 4.83 4.83 0 001.153-1.771c.198-.48.332-1.035.372-1.864.038-.827.048-1.294.048-4.915V10.124c0-3.622-.01-4.089-.048-4.916-.04-.829-.174-1.384-.372-1.864a4.83 4.83 0 00-1.153-1.771A4.83 4.83 0 0019.496.42c-.48-.198-1.035-.332-1.864-.372C16.805.01 16.338 0 12.717 0h-.7z"/></svg>',
                    ],
                    [
                        'name' => 'GitHub',
                        'href' => 'https://github.com/mustdesignstudio',
                        'icon' =>
                            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>',
                    ],
                    [
                        'name' => 'Dribbble',
                        'href' => 'https://dribbble.com/mustdesignstudio',
                        'icon' =>
                            '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.374 0 12s5.374 12 12 12 12-5.374 12-12S18.626 0 12 0zm7.568 5.302c1.4 1.5 2.252 3.5 2.273 5.698-.653-.126-1.425-.275-2.314-.416-.191-4.8-1.13-9.27-1.13-9.27s-.207.084-.829.332zm-1.558-1.967s.901 4.367 1.07 8.956c-.827-.126-1.767-.283-2.8-.456-.2-3.3-.9-6.4-1.9-9.3 1.396.3 2.706.549 3.63.8zM12 2.183c1.725 0 3.315.5 4.663 1.35-.846-.3-1.996-.65-3.663-1.05-1.667.4-2.817.75-3.663 1.05 1.348-.85 2.938-1.35 4.663-1.35zm-4.663 1.35c.846-.3 1.996-.65 3.663-1.05 1.667.4 2.817.75 3.663 1.05-1.348.85-2.938 1.35-4.663 1.35s-3.315-.5-4.663-1.35z"/></svg>',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-8">
                {{-- Brand Section --}}
                <div class="lg:col-span-2 space-y-6">
                    <div class="flex items-center space-x-3">
                        <div id="footer-brand-logo"
                            class="w-12 h-12 bg-gradient-to-br from-zinc-600 to-zinc-700 dark:from-zinc-500 dark:to-zinc-600 rounded-2xl flex items-center justify-center shadow-lg cursor-pointer transform transition-all duration-200 hover:scale-105"
                            onclick="toggleBrandAnimation()">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-zinc-900 dark:text-white">MUST Design Studio</h3>
                            <p class="text-sm text-zinc-600 dark:text-zinc-400">Creative Excellence</p>
                        </div>
                    </div>

                    <p class="text-zinc-600 dark:text-zinc-300 leading-relaxed">
                        Transforming ideas into exceptional digital experiences through innovative design, cutting-edge
                        technology, and strategic thinking.
                    </p>

                    {{-- Social Links --}}
                    <div class="space-y-4">
                        <h4 class="text-sm font-semibold text-zinc-900 dark:text-white uppercase tracking-wider">
                            Follow Us
                        </h4>
                        <div class="flex space-x-3">
                            @foreach ($socialPlatforms as $social)
                                <a href="{{ $social['href'] }}" target="_blank" rel="noopener noreferrer"
                                    class="w-10 h-10 rounded-xl flex items-center justify-center bg-zinc-100 dark:bg-zinc-800 text-zinc-600 dark:text-zinc-400 hover:bg-zinc-600 hover:text-white dark:hover:bg-zinc-500 transition-all duration-200 transform hover:scale-110 hover:shadow-lg social-link"
                                    aria-label="Follow us on {{ $social['name'] }}" data-social="{{ $social['name'] }}"
                                    onmouseenter="showSocialHover('{{ $social['name'] }}')"
                                    onmouseleave="hideSocialHover()">
                                    {!! $social['icon'] !!}
                                </a>
                            @endforeach
                        </div>
                        <p id="social-hover-text"
                            class="text-xs text-zinc-500 dark:text-zinc-400 transition-opacity duration-200 opacity-0 h-4">
                        </p>
                    </div>
                </div>

                {{-- Links Sections --}}
                @foreach ($footerLinks as $category => $links)
                    <div class="space-y-4">
                        <h4 class="text-sm font-semibold text-zinc-900 dark:text-white uppercase tracking-wider">
                            {{ $category }}
                        </h4>
                        <ul class="space-y-3">
                            @foreach ($links as $link)
                                <li>
                                    <a href="{{ $link['href'] }}"
                                        class="text-zinc-600 dark:text-zinc-300 hover:text-zinc-600 dark:hover:text-zinc-400 transition-colors duration-200 text-sm flex items-center group footer-link">
                                        {{ $link['name'] }}
                                        <svg class="w-3 h-3 ml-1 opacity-0 group-hover:opacity-100 transform group-hover:translate-x-1 transition-all duration-200"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-zinc-200 dark:border-zinc-700 bg-zinc-50/50 dark:bg-zinc-800/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col lg:flex-row justify-between items-center space-y-4 lg:space-y-0">
                    <div
                        class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6 text-sm text-zinc-600 dark:text-zinc-400">
                        <p>&copy; {{ date('Y') }} MUST Design Studio. All rights reserved.</p>
                        <div class="flex items-center space-x-1 text-xs">
                            <span>Made with</span>
                            <svg class="w-3 h-3 text-red-500 animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                            <span>by Plasticfoods</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-6 text-sm">
                        <div class="flex space-x-4">
                            <a href="/privacy"
                                class="text-zinc-600 dark:text-zinc-400 hover:text-zinc-600 dark:hover:text-zinc-400 transition-colors">
                                Privacy Policy
                            </a>
                            <a href="/terms"
                                class="text-zinc-600 dark:text-zinc-400 hover:text-zinc-600 dark:hover:text-zinc-400 transition-colors">
                                Terms of Service
                            </a>
                            <a href="/cookies"
                                class="text-zinc-600 dark:text-zinc-400 hover:text-zinc-600 dark:hover:text-zinc-400 transition-colors">
                                Cookie Policy
                            </a>
                        </div>

                        {{-- Back to Top Button --}}
                        <button id="back-to-top-btn" onclick="scrollToTop()"
                            class="inline-flex items-center space-x-2 px-3 py-1.5 text-xs font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-600 dark:hover:text-zinc-400 bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 rounded-lg hover:border-zinc-300 dark:hover:border-zinc-600 transition-all duration-200 transform hover:scale-105">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 10l7-7m0 0l7 7m-7-7v18" />
                            </svg>
                            <span>Back to Top</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // State management
            let footerState = {
                brandAnimation: false,
                currentSocialHover: null
            };

            // Brand logo animation toggle
            window.toggleBrandAnimation = function() {
                footerState.brandAnimation = !footerState.brandAnimation;
                const logo = document.getElementById('footer-brand-logo');

                if (footerState.brandAnimation) {
                    logo.classList.add('animate-pulse');
                    // Auto-remove animation after 3 seconds
                    setTimeout(() => {
                        logo.classList.remove('animate-pulse');
                        footerState.brandAnimation = false;
                    }, 3000);
                } else {
                    logo.classList.remove('animate-pulse');
                }
            };

            // Social media hover effects
            window.showSocialHover = function(platformName) {
                footerState.currentSocialHover = platformName;
                const hoverText = document.getElementById('social-hover-text');
                if (hoverText) {
                    hoverText.textContent = `Connect with us on ${platformName}`;
                    hoverText.classList.remove('opacity-0');
                    hoverText.classList.add('opacity-100');
                }
            };

            window.hideSocialHover = function() {
                footerState.currentSocialHover = null;
                const hoverText = document.getElementById('social-hover-text');
                if (hoverText) {
                    hoverText.classList.add('opacity-0');
                    hoverText.classList.remove('opacity-100');
                    // Clear text after transition
                    setTimeout(() => {
                        if (!footerState.currentSocialHover) {
                            hoverText.textContent = '';
                        }
                    }, 200);
                }
            };

            // Smooth scroll to top
            window.scrollToTop = function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            };

            // Initialize any additional animations or effects
            initFooterAnimations();

            function initFooterAnimations() {
                // Add intersection observer for footer entrance animation
                const footer = document.getElementById('main-footer');
                if (footer) {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                footer.classList.add('footer-visible');
                            }
                        });
                    }, {
                        threshold: 0.1,
                        rootMargin: '0px 0px -50px 0px'
                    });

                    observer.observe(footer);
                }

                // Add stagger animation to footer links
                const footerLinks = document.querySelectorAll('.footer-link');
                footerLinks.forEach((link, index) => {
                    link.style.animationDelay = `${index * 0.05}s`;
                });

                // Add enhanced hover effects to social links
                const socialLinks = document.querySelectorAll('.social-link');
                socialLinks.forEach(link => {
                    link.addEventListener('mouseenter', function() {
                        this.style.transform = 'scale(1.1) rotate(5deg)';
                    });

                    link.addEventListener('mouseleave', function() {
                        this.style.transform = 'scale(1) rotate(0deg)';
                    });
                });
            }

            // Add keyboard accessibility for interactive elements
            document.addEventListener('keydown', function(event) {
                // Allow Enter key to trigger click on focusable elements
                if (event.key === 'Enter' && event.target.matches('#footer-brand-logo, #back-to-top-btn')) {
                    event.target.click();
                }
            });

            // Add focus styles for accessibility
            const focusableElements = document.querySelectorAll(
                '#footer-brand-logo, #back-to-top-btn, .social-link');
            focusableElements.forEach(element => {
                element.addEventListener('focus', function() {
                    this.style.outline = '2px solid #3b82f6';
                    this.style.outlineOffset = '2px';
                });

                element.addEventListener('blur', function() {
                    this.style.outline = 'none';
                });
            });
        });
    </script>

    <style>
        /* CSS animations for footer entrance */
        #main-footer {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        #main-footer.footer-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Stagger animation for footer links */
        .footer-link {
            opacity: 0;
            animation: fadeInUp 0.5s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Enhanced social link animations */
        .social-link {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Custom pulse animation for heart icon */
        @keyframes heartbeat {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        /* Smooth transitions for all interactive elements */
        .transition-all {
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</footer>
