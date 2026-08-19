@props(['about'])

<section id="about" class="border-t border-slate-200 py-20 dark:border-slate-800">
    <div class="mx-auto max-w-5xl px-6">
        <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Rólam</h2>
        <p class="mt-4 max-w-3xl text-2xl leading-snug font-semibold text-slate-900 dark:text-white">
            {{ $about['heading'] }}
        </p>
        @foreach ($about['paragraphs'] as $paragraph)
            <p class="mt-6 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                {{ $paragraph }}
            </p>
        @endforeach
    </div>
</section>
