@props(['jobs'])

<section id="experience" class="border-t border-slate-200 bg-slate-50 py-20 dark:border-slate-800 dark:bg-slate-900/50">
    <div class="mx-auto max-w-5xl px-6">
        <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Szakmai tapasztalat</h2>

        <div class="mt-10 space-y-10">
            @foreach ($jobs as $job)
                <div class="relative pl-8 sm:grid sm:grid-cols-[10rem_1fr] sm:gap-8 sm:pl-0">
                    <div class="mb-1 text-sm font-medium text-slate-500 sm:pt-1 dark:text-slate-400">
                        {{ $job['period'] }}
                    </div>
                    <div class="relative border-l border-slate-200 pl-8 sm:border-l sm:pl-8 dark:border-slate-700">
                        <span class="absolute top-1.5 -left-[5px] h-2.5 w-2.5 rounded-full bg-indigo-600 dark:bg-indigo-400"></span>
                        <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ $job['role'] }}</h3>
                        <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">{{ $job['company'] }}</p>
                        <p class="mt-2 max-w-2xl text-slate-600 dark:text-slate-300">{{ $job['description'] }}</p>
                        <div class="mt-3 flex flex-wrap gap-2">
                            @foreach ($job['tags'] as $tag)
                                <span class="rounded-full bg-white px-3 py-1 text-xs font-medium text-slate-600 ring-1 ring-slate-200 dark:bg-slate-800 dark:text-slate-300 dark:ring-slate-700">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
