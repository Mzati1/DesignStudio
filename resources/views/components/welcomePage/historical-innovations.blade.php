@props([
    'title' => 'Historical Innovations',
    'description' => 'Pioneering breakthroughs that have shaped the future of design and technology, creating lasting impact across industries.',
    'innovations' => [
        [
            'year' => '2010',
            'title' => 'The first responsive design framework',
            'description' => 'Our team pioneered the first comprehensive responsive design framework that automatically adapted to different screen sizes. This breakthrough revolutionized how websites were built, making them accessible across all devices and establishing the foundation for modern web development practices.',
            'linkText' => 'Explore this landmark moment',
            'imageOrder' => 'first'
        ],
        [
            'year' => '2023',
            'title' => 'The first AI-powered design system',
            'description' => 'We developed the world\'s first artificial intelligence-powered design system that could automatically generate consistent, accessible, and beautiful user interfaces. This breakthrough enabled designers to focus on creativity while AI handled the technical implementation, transforming the entire design industry.',
            'linkText' => 'Learn more about the breakthrough',
            'imageOrder' => 'second'
        ],
        [
            'year' => '2018',
            'title' => 'The first sustainable design methodology',
            'description' => 'We created the world\'s first comprehensive sustainable design methodology that integrated environmental impact assessment into every design decision. This framework has been adopted by over 1,000 companies worldwide, helping them reduce their carbon footprint while maintaining design excellence.',
            'linkText' => 'Learn more about this history',
            'imageOrder' => 'first'
        ]
    ]
])

<section id="innovations" class="py-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                {{ $title }}
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                {{ $description }}
            </p>
        </div>

        <div class="space-y-24">
            @foreach($innovations as $innovation)
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                @if($innovation['imageOrder'] === 'first')
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
                    <div class="text-sm text-gray-500 dark:text-gray-400 mb-2 font-mono">{{ $innovation['year'] }}</div>
                    <h3 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                        {{ $innovation['title'] }}
                    </h3>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        {{ $innovation['description'] }}
                    </p>
                    <button class="group flex items-center text-gray-900 dark:text-white font-semibold hover:text-gray-700 dark:hover:text-gray-300 transition-colors">
                        <span>{{ $innovation['linkText'] }}</span>
                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                @else
                <div class="order-2 lg:order-1">
                    <div class="text-sm text-gray-500 dark:text-gray-400 mb-2 font-mono">{{ $innovation['year'] }}</div>
                    <h3 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                        {{ $innovation['title'] }}
                    </h3>
                    <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                        {{ $innovation['description'] }}
                    </p>
                    <button class="group flex items-center text-gray-900 dark:text-white font-semibold hover:text-gray-700 dark:hover:text-gray-300 transition-colors">
                        <span>{{ $innovation['linkText'] }}</span>
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
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
