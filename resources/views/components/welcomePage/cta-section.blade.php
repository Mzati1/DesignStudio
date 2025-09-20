@props([
    'title' => 'Join the Innovation',
    'description' => 'Be part of the future we\'re building. Whether you\'re a researcher, entrepreneur, or organization looking to make an impact, we\'d love to collaborate with you.',
    'primaryButtonText' => 'Start Collaborating',
    'secondaryButtonText' => 'Learn More',
    'stats' => [
        [
            'value' => 150,
            'label' => 'Projects Completed'
        ],
        [
            'value' => 50,
            'label' => 'Research Partners'
        ],
        [
            'value' => 5,
            'label' => 'Years Experience'
        ],
        [
            'value' => 24,
            'label' => 'Awards Won'
        ]
    ]
])

<section id="contact" class="py-24 bg-accent-1 dark:bg-black">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-5xl md:text-6xl font-bold text-white mb-8 leading-tight">
            {{ $title }}
        </h2>
        <p class="text-xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
            {{ $description }}
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <button class="px-8 py-4 bg-white text-gray-900 rounded-none font-semibold text-lg transition-all duration-200 hover:bg-[hsl(var(--color-accent-2))] transform hover:scale-105">
                {{ $primaryButtonText }}
            </button>
            <button class="px-8 py-4 border-2 border-white text-white rounded-none font-semibold text-lg transition-all duration-200 hover:bg-white hover:text-accent-1">
                {{ $secondaryButtonText }}
            </button>
        </div>
        
        {{-- Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 pt-20 max-w-4xl mx-auto">
            @foreach($stats as $stat)
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-2" x-text="animateNumber(0, {{ $stat['value'] }}, 2000)">{{ $stat['value'] }}</div>
                <div class="text-sm text-gray-400 uppercase tracking-wide">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
