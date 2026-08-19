@props(['contact'])

<section id="contact" data-reveal class="border-t border-slate-200 py-20 dark:border-slate-800">
    <div class="mx-auto max-w-5xl px-6 text-center">
        <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Kapcsolat</h2>
        <p class="mt-4 text-3xl font-bold tracking-tight text-slate-900 dark:text-white">
            {{ $contact['heading'] }}
        </p>
        <p class="mx-auto mt-4 max-w-xl text-lg text-slate-600 dark:text-slate-300">
            {{ $contact['description'] }}
        </p>

        <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
            <a
                href="mailto:{{ $contact['email'] }}"
                class="inline-flex items-center rounded-full bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500"
            >
                {{ $contact['email'] }}
            </a>
        </div>
    </div>
</section>
