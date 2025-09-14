@props(['user' => null])

@php
    $user = $user ?? auth()->user();
    $userName = $user->name ?? 'John Doe';
    $userEmail = $user->email ?? 'john.doe@example.com';
    $userAvatar = $user->avatar ?? null;
@endphp

<div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-4 sm:p-6">
    <div class="flex items-center space-x-3 sm:space-x-4">
        @if($userAvatar)
            <img src="{{ $userAvatar }}" 
                 alt="{{ $userName }}" 
                 class="w-12 h-12 sm:w-16 sm:h-16 rounded-xl object-cover flex-shrink-0">
        @else
            <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gradient-to-br from-accent-1 to-accent-3 rounded-xl flex items-center justify-center text-white font-bold text-lg sm:text-xl flex-shrink-0">
                {{ substr($userName, 0, 1) }}
            </div>
        @endif
        <div class="min-w-0 flex-1">
            <h3 class="text-base sm:text-lg font-semibold text-slate-900 dark:text-white truncate">
                {{ $userName }}
            </h3>
            <p class="text-sm text-slate-500 dark:text-slate-400 truncate">
                {{ $userEmail }}
            </p>
        </div>
    </div>
</div>
