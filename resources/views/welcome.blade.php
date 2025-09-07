@extends('layouts.app')

@section('title', 'Welcome to MUST Design Studio')

@section('content')
<div x-data="landingPageData()" class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
    
    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-5 dark:opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="heroGrid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#heroGrid)" />
            </svg>
        </div>

        {{-- Floating Elements --}}
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute top-20 left-10 w-20 h-20 bg-blue-500/10 rounded-full blur-xl animate-pulse"></div>
            <div class="absolute top-40 right-20 w-32 h-32 bg-purple-500/10 rounded-full blur-xl animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-20 left-20 w-24 h-24 bg-green-500/10 rounded-full blur-xl animate-pulse" style="animation-delay: 4s;"></div>
        </div>

        <div class="relative z-10 w-full mx-auto px-[10px] text-center">
            <div class="space-y-8" x-show="true" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 transform translate-y-8" x-transition:enter-end="opacity-100 transform translate-y-0">
                
                {{-- Main Heading --}}
                <div class="space-y-4">
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold bg-gradient-to-r from-gray-900 via-blue-600 to-purple-600 dark:from-white dark:via-blue-400 dark:to-purple-400 bg-clip-text text-transparent leading-tight">
                        MUST Design Studio
                    </h1>
                    <p class="text-2xl md:text-3xl lg:text-4xl font-light text-gray-600 dark:text-gray-300">
                        Creative Excellence
                    </p>
                </div>

                {{-- Tagline --}}
                <p class="max-w-3xl mx-auto text-lg md:text-xl text-gray-600 dark:text-gray-300 leading-relaxed">
                    Transforming ideas into exceptional digital experiences through innovative design, cutting-edge technology, and strategic thinking.
                </p>

                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-8">
                    <button @click="scrollToSection('services')" class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white rounded-2xl font-semibold text-lg shadow-lg transform transition-all duration-200 hover:scale-105 hover:shadow-xl">
                        <span class="flex items-center space-x-2">
                            <span>Explore Our Work</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </button>
                    
                    <button @click="scrollToSection('contact')" class="px-8 py-4 border-2 border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:border-blue-600 dark:hover:border-blue-400 hover:text-blue-600 dark:hover:text-blue-400 rounded-2xl font-semibold text-lg transition-all duration-200 hover:shadow-lg">
                        Get In Touch
                    </button>
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 pt-16 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400" x-text="animateNumber(0, 150, 2000)">150</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400 uppercase tracking-wide">Projects Completed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400" x-text="animateNumber(0, 50, 2000)">50</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400 uppercase tracking-wide">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400" x-text="animateNumber(0, 5, 2000)">5</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400 uppercase tracking-wide">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-blue-600 dark:text-blue-400" x-text="animateNumber(0, 24, 2000)">24</div>
                        <div class="text-sm text-gray-600 dark:text-gray-400 uppercase tracking-wide">Awards Won</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

</div>

<script>
    function landingPageData() {
        return {
            animateNumber(start, end, duration) {
                return end; // For demo purposes, returning end value directly
            },
            
            scrollToSection(sectionId) {
                const element = document.getElementById(sectionId);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        }
    }
</script>
@endsection