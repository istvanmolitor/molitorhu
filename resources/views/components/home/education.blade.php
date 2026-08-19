@props(['schools'])

<section id="education" class="border-t border-slate-200 bg-slate-50 py-20 dark:border-slate-800 dark:bg-slate-900/50">
    <div class="mx-auto max-w-5xl px-6">
        <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Tanulmányok</h2>

        <div class="mt-10 space-y-8">
            @foreach ($schools as $school)
                <div>
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ $school['degree'] }}</h3>
                    <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">{{ $school['school'] }}</p>
                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">{{ $school['period'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
