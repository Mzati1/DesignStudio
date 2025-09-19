@props([
    'title' => 'Innovation at Scale',
    'description' => 'We\'re not just creating digital products; we\'re pioneering the future of human-computer interaction. Our innovation lab combines cutting-edge research with practical application to solve real-world problems.',
    'features' => [
        [
            'title' => 'Research-Driven Design',
            'description' => 'Every project begins with deep research into user needs, market trends, and technological possibilities.'
        ],
        [
            'title' => 'Emerging Technologies',
            'description' => 'We experiment with AI, AR/VR, and other emerging technologies to create breakthrough experiences.'
        ],
        [
            'title' => 'Sustainable Innovation',
            'description' => 'Our solutions are designed for long-term impact, considering environmental and social sustainability.'
        ]
    ],
    'imageTitle' => 'Innovation Lab',
    'imageDescription' => 'Where ideas become reality'
])

<section id="innovation" class="py-24 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white mb-8 leading-tight">
                    {{ $title }}
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                    {{ $description }}
                </p>
                <div class="space-y-6">
                    @foreach($features as $feature)
                    <div class="flex items-start space-x-4">
                        <div class="w-2 h-2 bg-gray-900 dark:bg-white rounded-full mt-3 flex-shrink-0"></div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $feature['title'] }}</h3>
                            <p class="text-gray-600 dark:text-gray-300">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-800 dark:to-gray-700 rounded-lg overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"100\" height=\"100\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%236b7280\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M50 0L100 50L50 100L0 50z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-gray-900 dark:bg-white rounded-full flex items-center justify-center mb-4 mx-auto">
                                <svg class="w-12 h-12 text-white dark:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364-.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
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
