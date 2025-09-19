@props([
    'title' => 'Impact Stories',
    'description' => 'Real-world applications of our research and innovation, creating meaningful change across industries and communities.',
    'stories' => [
        [
            'title' => 'Healthcare Accessibility',
            'description' => 'Developed an AI-powered diagnostic tool that increased early disease detection rates by 40% in underserved communities.',
            'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
            'color' => 'accent-1',
            'linkText' => 'Read Case Study'
        ],
        [
            'title' => 'Climate Action Platform',
            'description' => 'Created a carbon tracking system that helped 500+ companies reduce their environmental footprint by an average of 30%.',
            'icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            'color' => 'accent-1',
            'linkText' => 'Read Case Study'
        ],
        [
            'title' => 'Educational Equity',
            'description' => 'Built an adaptive learning platform that improved student outcomes by 60% in rural schools with limited resources.',
            'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
            'color' => 'accent-3',
            'linkText' => 'Read Case Study'
        ]
    ],
    'imageTitle' => 'Making Impact',
    'imageDescription' => 'Real solutions for real problems'
])

<section id="impact" class="py-24 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                {{ $title }}
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-4xl mx-auto leading-relaxed">
                {{ $description }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="space-y-8">
                @foreach($stories as $story)
                <div class="group cursor-pointer">
                    <div class="flex items-start space-x-6 p-6 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-200">
                        <div class="w-16 h-16 bg-[hsl(var(--color-accent-2))] rounded-lg flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-{{ $story['color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $story['icon'] }}"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-{{ $story['color'] }} transition-colors">
                                {{ $story['title'] }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                                {{ $story['description'] }}
                            </p>
                            <div class="flex items-center text-{{ $story['color'] }} font-semibold">
                                <span>{{ $story['linkText'] }}</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="relative">
                <div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 rounded-lg overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%236b7280\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M50 0L100 50L50 100L0 50z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-gray-900 dark:bg-white rounded-full flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-12 h-12 text-white dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $imageTitle }}</h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ $imageDescription }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
