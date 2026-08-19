@props(['skills'])

<section id="skills" data-reveal class="border-t border-slate-200 py-20 dark:border-slate-800">
    <div class="mx-auto max-w-5xl px-6">
        <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Készségek</h2>

        <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-3">
            @foreach ($skills as $category => $items)
                <div>
                    <h3 class="mb-4 font-semibold text-slate-900 dark:text-white">{{ $category }}</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($items as $skill)
                            <span class="rounded-full bg-indigo-50 px-3 py-1.5 text-sm font-medium text-indigo-700 dark:bg-indigo-950 dark:text-indigo-300">
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
