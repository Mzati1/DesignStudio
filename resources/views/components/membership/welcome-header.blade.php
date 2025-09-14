@props(['title' => 'Welcome to the Design Studio', 'subtitle' => "You're one step away from unlocking access to cutting-edge facilities, expert mentorship, and a thriving community of innovators."])


<div class="text-center mb-16 mt-20">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-slate-900 dark:text-white mb-6">
        {{ $title }}
        @if(str_contains($title, 'Design Studio'))
            <span class="bg-gradient-to-r from-accent-1 via-accent-3 to-accent-1 bg-clip-text">
                Design Studio
            </span>
        @endif
    </h1>

    <p class="text-xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed">
        {{ $subtitle }}
    </p>
</div>
