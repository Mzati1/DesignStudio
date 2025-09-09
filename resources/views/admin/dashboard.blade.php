<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-3 md:grid-cols-3">
            {{-- Advanced Prototyping Workshop --}}
            <div class="bg-white rounded-lg border border-[hsl(var(--color-border))] p-4 hover:shadow-md transition-shadow duration-200">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="text-sm font-semibold text-[hsl(var(--color-text-primary))]">Advanced Prototyping</h3>
                    <span class="px-2 py-1 text-xs font-medium bg-[hsl(var(--color-accent-1))] text-white rounded-full">Next Up</span>
                </div>
                <p class="text-xs text-[hsl(var(--color-text-secondary))] mb-3">
                    Learn cutting-edge prototyping techniques
                </p>

                <div class="space-y-2 mb-3">
                    <div class="flex items-center text-xs text-[hsl(var(--color-text-muted))]">
                        <svg class="w-3 h-3 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        March 15, 2024
                    </div>
                    <div class="flex items-center text-xs text-[hsl(var(--color-text-muted))]">
                        <svg class="w-3 h-3 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        2:00 PM - 5:00 PM
                    </div>
                    <div class="flex items-center text-xs text-[hsl(var(--color-text-muted))]">
                        <svg class="w-3 h-3 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                        </svg>
                        8/12 spots filled
                    </div>
                </div>

                {{-- Progress Bar --}}
                <div class="w-full bg-[hsl(var(--color-border))] rounded-full h-1.5 mb-3">
                    <div class="bg-[hsl(var(--color-accent-1))] h-1.5 rounded-full transition-all duration-300" style="width: 67%"></div>
                </div>

                <button class="w-full px-3 py-1.5 bg-[hsl(var(--color-accent-1))] hover:bg-[hsl(var(--color-accent-3))] text-white rounded text-xs transition-colors duration-200">
                    Join Workshop
                </button>
            </div>

            {{-- Robotics Club --}}
            <div class="bg-white rounded-lg border border-[hsl(var(--color-border))] p-4 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center mb-3">
                    <svg class="w-4 h-4 text-[hsl(var(--color-accent-1))] mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <h3 class="text-sm font-semibold text-[hsl(var(--color-text-primary))]">Robotics Club</h3>
                </div>
                <p class="text-xs text-[hsl(var(--color-text-secondary))] mb-3">
                    Build, program, and compete with robots
                </p>

                <div class="space-y-2 mb-3">
                    <div class="flex justify-between">
                        <span class="text-xs text-[hsl(var(--color-text-muted))]">Next Meeting</span>
                        <span class="text-xs font-medium text-[hsl(var(--color-text-primary))]">March 18, 6:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-xs text-[hsl(var(--color-text-muted))]">Current Project</span>
                        <span class="text-xs font-medium text-[hsl(var(--color-text-primary))]">Line Following Bot</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-xs text-[hsl(var(--color-text-muted))]">Members</span>
                        <span class="text-xs font-medium text-[hsl(var(--color-text-primary))]">24 active</span>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button class="flex-1 px-2 py-1.5 border border-[hsl(var(--color-accent-3))] text-[hsl(var(--color-accent-3))] hover:bg-[hsl(var(--color-accent-3))] hover:text-white rounded text-xs transition-colors duration-200">
                        Join Club
                    </button>
                    <button class="flex-1 px-2 py-1.5 bg-[hsl(var(--color-accent-1))] hover:bg-[hsl(var(--color-accent-3))] text-white rounded text-xs transition-colors duration-200">
                        View Projects
                    </button>
                </div>
            </div>

            {{-- Membership Status --}}
            <div class="bg-white rounded-lg border border-[hsl(var(--color-border))] p-4">
                <h3 class="text-sm font-semibold text-[hsl(var(--color-text-primary))] mb-3">Membership Status</h3>
                
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="px-2 py-1 text-xs font-medium bg-[hsl(var(--color-accent-1))] text-white rounded-full">Unregistered</span>
                        <span class="text-xs text-[hsl(var(--color-text-muted))]"></span>
                    </div>
                    
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-xs text-[hsl(var(--color-text-muted))]">Workshop Credits</span>
                            <span class="text-xs font-medium text-[hsl(var(--color-accent-1))]">10 remaining</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-xs text-[hsl(var(--color-text-muted))]">Studio Access</span>
                            <span class="text-xs font-medium text-[hsl(var(--color-accent-1))]">7hrs/week</span>
                        </div>
                    </div>
                </div> 
                <br>

                <button class="w-full mt-3 px-3 py-1.5 border border-[hsl(var(--color-accent-3))] text-[hsl(var(--color-accent-3))] hover:bg-[hsl(var(--color-accent-3))] hover:text-white rounded text-xs transition-colors duration-200">
                    Register
                </button>
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts.app>
