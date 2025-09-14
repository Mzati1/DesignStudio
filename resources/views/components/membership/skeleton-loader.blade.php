@props(['duration' => 1500])

<div id="skeleton-loader"
    class="min-h-screen bg-gradient-to-br from-[hsl(var(--color-accent-2))] via-white to-slate-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-800">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        {{-- Header Skeleton --}}
        <div class="text-center mb-16">
            <div class="h-12 bg-slate-200 dark:bg-slate-700 rounded-full w-64 mx-auto mb-8 animate-pulse"></div>
            <div class="h-16 bg-slate-200 dark:bg-slate-700 rounded-lg w-3/4 mx-auto mb-6 animate-pulse"></div>
            <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-2/3 mx-auto mb-2 animate-pulse"></div>
            <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-1/2 mx-auto animate-pulse"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12">
            {{-- Profile Skeleton --}}
            <div class="lg:col-span-2 space-y-8">
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-16 h-16 bg-slate-200 dark:bg-slate-700 rounded-xl animate-pulse"></div>
                        <div class="space-y-2">
                            <div class="h-5 bg-slate-200 dark:bg-slate-700 rounded w-32 animate-pulse"></div>
                            <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-40 animate-pulse"></div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-6">
                    <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-32 mb-6 animate-pulse"></div>
                    <div class="space-y-6">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-slate-200 dark:bg-slate-700 rounded-lg animate-pulse"></div>
                                <div class="flex-1 space-y-2">
                                    <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-24 animate-pulse"></div>
                                    <div class="h-3 bg-slate-200 dark:bg-slate-700 rounded w-full animate-pulse"></div>
                                    <div class="h-3 bg-slate-200 dark:bg-slate-700 rounded w-3/4 animate-pulse"></div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            {{-- Payment Skeleton --}}
            <div class="lg:col-span-3">
                <div
                    class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-slate-200 dark:border-slate-700 p-8">
                    <div class="mb-8">
                        <div class="h-8 bg-slate-200 dark:bg-slate-700 rounded w-48 mb-2 animate-pulse"></div>
                        <div class="h-5 bg-slate-200 dark:bg-slate-700 rounded w-64 animate-pulse"></div>
                    </div>

                    <div class="p-6 border-2 border-slate-200 dark:border-slate-700 rounded-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="space-y-2">
                                <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded w-40 animate-pulse"></div>
                                <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-32 animate-pulse"></div>
                            </div>
                            <div class="text-right space-y-1">
                                <div class="h-8 bg-slate-200 dark:bg-slate-700 rounded w-20 animate-pulse"></div>
                                <div class="h-4 bg-slate-200 dark:bg-slate-700 rounded w-16 animate-pulse"></div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            @for ($i = 0; $i < 4; $i++)
                                <div class="h-6 bg-slate-200 dark:bg-slate-700 rounded animate-pulse"></div>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 mt-8">
                    <div class="flex-1 h-14 bg-slate-200 dark:bg-slate-700 rounded-lg animate-pulse"></div>
                    <div class="flex-1 h-14 bg-slate-200 dark:bg-slate-700 rounded-lg animate-pulse"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show skeleton for specified duration then reveal content
        setTimeout(function() {
            document.getElementById('skeleton-loader').classList.add('hidden');
            document.getElementById('main-content').classList.remove('hidden');
        }, {{ $duration }});
    });
</script>
