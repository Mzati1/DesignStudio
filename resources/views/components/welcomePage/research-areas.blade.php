@props([
    'title' => 'Research Areas',
    'description' => 'Our multidisciplinary research spans across cutting-edge domains, pushing the boundaries of what\'s possible in digital innovation.',
    'areas' => [
        [
            'title' => 'Artificial Intelligence',
            'description' => 'Exploring the intersection of AI and human creativity to develop intelligent systems that enhance rather than replace human capabilities.',
            'icon' => 'M9.663 17h4.673M12 3v1m6.364-.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
            'color' => 'accent-1',
            'linkText' => 'Learn More'
        ],
        [
            'title' => 'Extended Reality',
            'description' => 'Creating immersive experiences that blend physical and digital worlds, from AR interfaces to VR collaboration spaces.',
            'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
            'color' => 'accent-3',
            'linkText' => 'Learn More'
        ],
        [
            'title' => 'Sustainable Design',
            'description' => 'Developing eco-friendly digital solutions that minimize environmental impact while maximizing user value and accessibility.',
            'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
            'color' => 'accent-1',
            'linkText' => 'Learn More'
        ]
    ]
])

<section id="research" class="py-24 bg-[hsl(var(--color-accent-2))] dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                {{ $title }}
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                {{ $description }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($areas as $area)
            <div class="group bg-white dark:bg-gray-900 p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-[hsl(var(--color-accent-2))] rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-{{ $area['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $area['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">{{ $area['title'] }}</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                    {{ $area['description'] }}
                </p>
                <div class="flex items-center text-{{ $area['color'] }} font-semibold group-hover:text-accent-3 transition-colors">
                    <span>{{ $area['linkText'] }}</span>
                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
