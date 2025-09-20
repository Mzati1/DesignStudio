@props([
    'title' => 'Innovation',
    'subtitle' => 'Transforming ideas into exceptional digital experiences',
    'description' => 'At MUST Design Studio, we believe in the power of innovation to solve complex problems and create meaningful impact. Our multidisciplinary approach combines cutting-edge technology with human-centered design.',
    'primaryButtonText' => 'Explore Innovation',
    'primaryButtonAction' => 'scrollToSection(\'innovation\')',
    'secondaryButtonText' => 'Get In Touch',
    'secondaryButtonAction' => 'scrollToSection(\'contact\')'
])

<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-[hsl(var(--color-accent-2))] to-white dark:from-gray-900 dark:to-gray-800">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23f3f4f6\" fill-opacity=\"0.1\"%3E%3Ccircle cx=\"30\" cy=\"30\" r=\"1\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    
    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            {{-- Main Heading --}}
            <h1 class="text-6xl md:text-8xl lg:text-9xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                {{ $title }}
            </h1>
            
            {{-- Subtitle --}}
            <p class="text-2xl md:text-3xl lg:text-4xl font-light text-gray-600 dark:text-gray-300 mb-8 max-w-4xl mx-auto">
                {{ $subtitle }}
            </p>
            
            {{-- Description --}}
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-400 mb-12 max-w-3xl mx-auto leading-relaxed">
                {{ $description }}
            </p>
            
            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button @click="{{ $primaryButtonAction }}" class="group px-8 py-4 bg-accent-1 text-white dark:text-gray-900 rounded-none font-semibold text-lg transition-all duration-200 hover:bg-accent-3 transform hover:scale-105">
                    <span class="flex items-center space-x-2">
                        <span>{{ $primaryButtonText }}</span>
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </span>
                </button>
                
                <button @click="{{ $secondaryButtonAction }}" class="px-8 py-4 border-2 border-accent-1 text-accent-1 hover:bg-accent-1 hover:text-white rounded-none font-semibold text-lg transition-all duration-200">
                    {{ $secondaryButtonText }}
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
