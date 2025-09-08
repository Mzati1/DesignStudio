@extends('layouts.app')

@section('title', 'Welcome to MUST Design Studio')

@section('content')
<div x-data="landingPageData()" class="min-h-screen bg-white dark:bg-gray-900 transition-colors duration-300">
    
    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23f3f4f6" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
        
        <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                {{-- Main Heading --}}
                <h1 class="text-6xl md:text-8xl lg:text-9xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    Innovation
                </h1>
                
                {{-- Subtitle --}}
                <p class="text-2xl md:text-3xl lg:text-4xl font-light text-gray-600 dark:text-gray-300 mb-8 max-w-4xl mx-auto">
                    Transforming ideas into exceptional digital experiences
                </p>
                
                {{-- Description --}}
                <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 mb-12 max-w-3xl mx-auto leading-relaxed">
                    At MUST Design Studio, we believe in the power of innovation to solve complex problems and create meaningful impact. Our multidisciplinary approach combines cutting-edge technology with human-centered design.
                </p>
                
                {{-- CTA Buttons --}}
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <button @click="scrollToSection('innovation')" class="group px-8 py-4 bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-none font-semibold text-lg transition-all duration-200 hover:bg-gray-700 dark:hover:bg-gray-100 transform hover:scale-105">
                        <span class="flex items-center space-x-2">
                            <span>Explore Innovation</span>
                            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </span>
                    </button>
                    
                    <button @click="scrollToSection('contact')" class="px-8 py-4 border-2 border-gray-900 dark:border-white text-gray-900 dark:text-white hover:bg-gray-900 dark:hover:bg-white hover:text-white dark:hover:text-gray-900 rounded-none font-semibold text-lg transition-all duration-200">
                        Get In Touch
                    </button>
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

    {{-- Innovation Focus Section --}}
    <section id="innovation" class="py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                        Innovation at Scale
                    </h2>
                    <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        We're not just creating digital products; we're pioneering the future of human-computer interaction. Our innovation lab combines cutting-edge research with practical application to solve real-world problems.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-2 h-2 bg-gray-900 dark:bg-white rounded-full mt-3 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Research-Driven Design</h3>
                                <p class="text-gray-600 dark:text-gray-300">Every project begins with deep research into user needs, market trends, and technological possibilities.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-2 h-2 bg-gray-900 dark:bg-white rounded-full mt-3 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Emerging Technologies</h3>
                                <p class="text-gray-600 dark:text-gray-300">We experiment with AI, AR/VR, and other emerging technologies to create breakthrough experiences.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-2 h-2 bg-gray-900 dark:bg-white rounded-full mt-3 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Sustainable Innovation</h3>
                                <p class="text-gray-600 dark:text-gray-300">Our solutions are designed for long-term impact, considering environmental and social sustainability.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 rounded-lg overflow-hidden">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%236b7280" fill-opacity="0.1"%3E%3Cpath d="M50 0L100 50L50 100L0 50z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-24 h-24 bg-gray-900 dark:bg-white rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <svg class="w-12 h-12 text-white dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364-.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Innovation Lab</h3>
                                <p class="text-gray-600 dark:text-gray-400">Where ideas become reality</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Research Areas Section --}}
    <section id="research" class="py-24 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    Research Areas
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Our multidisciplinary research spans across cutting-edge domains, pushing the boundaries of what's possible in digital innovation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-white dark:bg-gray-900 p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364-.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Artificial Intelligence</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Exploring the intersection of AI and human creativity to develop intelligent systems that enhance rather than replace human capabilities.
                    </p>
                    <div class="flex items-center text-blue-600 dark:text-blue-400 font-semibold group-hover:text-blue-700 dark:group-hover:text-blue-300 transition-colors">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <div class="group bg-white dark:bg-gray-900 p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Extended Reality</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Creating immersive experiences that blend physical and digital worlds, from AR interfaces to VR collaboration spaces.
                    </p>
                    <div class="flex items-center text-purple-600 dark:text-purple-400 font-semibold group-hover:text-purple-700 dark:group-hover:text-purple-300 transition-colors">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>

                <div class="group bg-white dark:bg-gray-900 p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Sustainable Design</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                        Developing eco-friendly digital solutions that minimize environmental impact while maximizing user value and accessibility.
                    </p>
                    <div class="flex items-center text-green-600 dark:text-green-400 font-semibold group-hover:text-green-700 dark:group-hover:text-green-300 transition-colors">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Historical Innovations Section --}}
    <section id="innovations" class="py-24 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    Historical Innovations
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Pioneering breakthroughs that have shaped the future of design and technology, creating lasting impact across industries.
                </p>
            </div>

            <div class="space-y-24">
                {{-- Innovation 1: First Responsive Design --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <div class="relative">
                        <div class="bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg overflow-hidden min-h-[400px] flex items-center justify-center">
                            <div class="text-center text-gray-400 dark:text-gray-500">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <p class="text-sm">Image placeholder</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2 font-mono">2010</div>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                            The first responsive design framework
                        </h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                            Our team pioneered the first comprehensive responsive design framework that automatically adapted to different screen sizes. This breakthrough revolutionized how websites were built, making them accessible across all devices and establishing the foundation for modern web development practices.
                        </p>
                        <button class="group flex items-center text-gray-900 dark:text-white font-semibold hover:text-gray-700 dark:hover:text-gray-300 transition-colors">
                            <span>Explore this landmark moment</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Innovation 2: AI-Powered Design System --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <div class="order-2 lg:order-1">
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2 font-mono">2023</div>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                            The first AI-powered design system
                        </h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                            We developed the world's first artificial intelligence-powered design system that could automatically generate consistent, accessible, and beautiful user interfaces. This breakthrough enabled designers to focus on creativity while AI handled the technical implementation, transforming the entire design industry.
                        </p>
                        <button class="group flex items-center text-gray-900 dark:text-white font-semibold hover:text-gray-700 dark:hover:text-gray-300 transition-colors">
                            <span>Learn more about the breakthrough</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                    <div class="order-1 lg:order-2 relative">
                        <div class="bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg overflow-hidden min-h-[400px] flex items-center justify-center">
                            <div class="text-center text-gray-400 dark:text-gray-500">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <p class="text-sm">Image placeholder</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Innovation 3: Sustainable Design Methodology --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <div class="relative">
                        <div class="bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-lg overflow-hidden min-h-[400px] flex items-center justify-center">
                            <div class="text-center text-gray-400 dark:text-gray-500">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <p class="text-sm">Image placeholder</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 mb-2 font-mono">2018</div>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                            The first sustainable design methodology
                        </h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                            We created the world's first comprehensive sustainable design methodology that integrated environmental impact assessment into every design decision. This framework has been adopted by over 1,000 companies worldwide, helping them reduce their carbon footprint while maintaining design excellence.
                        </p>
                        <button class="group flex items-center text-gray-900 dark:text-white font-semibold hover:text-gray-700 dark:hover:text-gray-300 transition-colors">
                            <span>Learn more about this history</span>
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Impact Stories Section --}}
    <section id="impact" class="py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    Impact Stories
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    Real-world applications of our research and innovation, creating meaningful change across industries and communities.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div class="space-y-8">
                    <div class="group cursor-pointer">
                        <div class="flex items-start space-x-6 p-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-200">
                            <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                    Healthcare Accessibility
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                                    Developed an AI-powered diagnostic tool that increased early disease detection rates by 40% in underserved communities.
                                </p>
                                <div class="flex items-center text-blue-600 dark:text-blue-400 font-semibold">
                                    <span>Read Case Study</span>
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group cursor-pointer">
                        <div class="flex items-start space-x-6 p-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-200">
                            <div class="w-16 h-16 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                                    Climate Action Platform
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                                    Created a carbon tracking system that helped 500+ companies reduce their environmental footprint by an average of 30%.
                                </p>
                                <div class="flex items-center text-green-600 dark:text-green-400 font-semibold">
                                    <span>Read Case Study</span>
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group cursor-pointer">
                        <div class="flex items-start space-x-6 p-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-200">
                            <div class="w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                    Educational Equity
                                </h3>
                                <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                                    Built an adaptive learning platform that improved student outcomes by 60% in rural schools with limited resources.
                                </p>
                                <div class="flex items-center text-purple-600 dark:text-purple-400 font-semibold">
                                    <span>Read Case Study</span>
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 rounded-lg overflow-hidden">
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%236b7280" fill-opacity="0.1"%3E%3Cpath d="M50 0L100 50L50 100L0 50z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-24 h-24 bg-gray-900 dark:bg-white rounded-full flex items-center justify-center mb-4 mx-auto">
                                    <svg class="w-12 h-12 text-white dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Making Impact</h3>
                                <p class="text-gray-600 dark:text-gray-400">Real solutions for real problems</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section id="contact" class="py-24 bg-gray-900 dark:bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight">
                Join the Innovation
            </h2>
            <p class="text-xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                Be part of the future we're building. Whether you're a researcher, entrepreneur, or organization looking to make an impact, we'd love to collaborate with you.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button class="px-8 py-4 bg-white text-gray-900 rounded-none font-semibold text-lg transition-all duration-200 hover:bg-gray-100 transform hover:scale-105">
                    Start Collaborating
                </button>
                <button class="px-8 py-4 border-2 border-white text-white rounded-none font-semibold text-lg transition-all duration-200 hover:bg-white hover:text-gray-900">
                    Learn More
                </button>
            </div>
            
            {{-- Stats --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 pt-20 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2" x-text="animateNumber(0, 150, 2000)">150</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2" x-text="animateNumber(0, 50, 2000)">50</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Research Partners</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2" x-text="animateNumber(0, 5, 2000)">5</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2" x-text="animateNumber(0, 24, 2000)">24</div>
                    <div class="text-sm text-gray-400 uppercase tracking-wide">Awards Won</div>
                </div>
            </div>
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
            },
            
            init() {
                // Add intersection observer for animations
                this.setupScrollAnimations();
                this.setupParallaxEffects();
            },
            
            setupScrollAnimations() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-fade-in-up');
                        }
                    });
                }, observerOptions);
                
                // Observe all sections
                document.querySelectorAll('section').forEach(section => {
                    observer.observe(section);
                });
            },
            
            setupParallaxEffects() {
                // Add subtle parallax effect to hero section
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    const hero = document.querySelector('section:first-child');
                    if (hero) {
                        hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                    }
                });
            }
        }
    }
</script>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    /* Smooth scrolling for the entire page */
    html {
        scroll-behavior: smooth;
    }
    
    /* Tech and engineering typography */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'JetBrains Mono', 'Fira Code', 'Consolas', 'Monaco', 'Courier New', monospace;
        font-weight: 600;
        letter-spacing: -0.01em;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 0;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    
    /* Dark mode scrollbar */
    .dark ::-webkit-scrollbar-track {
        background: #374151;
    }
    
    .dark ::-webkit-scrollbar-thumb {
        background: #6b7280;
    }
    
    .dark ::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
    }
    
    /* Harvard-inspired button styles */
    button {
        font-family: 'Arial', sans-serif;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        font-size: 0.875rem;
    }
    
    /* Subtle hover effects */
    .group:hover .group-hover\:scale-110 {
        transform: scale(1.1);
    }
    
    .group:hover .group-hover\:translate-x-1 {
        transform: translateX(0.25rem);
    }
    
    /* Enhanced focus states */
    button:focus {
        outline: 2px solid #3b82f6;
        outline-offset: 2px;
    }
    
    /* Improved spacing and layout */
    section {
        position: relative;
    }
    
    /* Harvard-style grid patterns */
    .grid-pattern {
        background-image: 
            linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px);
        background-size: 20px 20px;
    }
</style>
@endsection