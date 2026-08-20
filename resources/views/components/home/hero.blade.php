@props(['hero', 'social'])

<section id="top" class="relative overflow-hidden">
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute -top-32 left-1/2 h-96 w-[42rem] -translate-x-1/2 rounded-full bg-indigo-400/20 blur-3xl dark:bg-indigo-500/10"></div>
    </div>

    <div class="mx-auto grid max-w-5xl grid-cols-1 items-center gap-12 px-6 py-20 sm:py-28 lg:grid-cols-[0.9fr_1.1fr]">
        <div class="mx-auto w-72 shrink-0 sm:w-96 lg:order-first lg:mx-0">
            <div class="aspect-square overflow-hidden rounded-full bg-gradient-to-br from-indigo-500 to-violet-600 p-1.5 shadow-xl shadow-indigo-500/20">
                <img
                    src="{{ asset($hero['image']) }}"
                    alt="{{ $hero['name'] }}"
                    class="h-full w-full rounded-full object-cover"
                    loading="eager"
                    width="384"
                    height="384"
                >
            </div>
        </div>

        <div>
            <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl dark:text-white">
                {{ $hero['name'] }}
            </h1>
            <p class="mt-3 text-xl font-medium text-indigo-600 dark:text-indigo-400">
                {{ $hero['title'] }}
            </p>
            <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                {{ $hero['description'] }}
            </p>

            <div class="mt-8 flex flex-col items-start gap-4 sm:flex-row sm:flex-wrap sm:items-center">
                <a
                    href="#contact"
                    class="inline-flex items-center gap-2 rounded-full bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500"
                >
                    <x-home.social-icon icon="mail" class="h-4 w-4" />
                    Vegyük fel a kapcsolatot
                </a>
                <div class="flex flex-wrap items-center gap-4">
                    <a
                        href="{{ $social['linkedin'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn"
                        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-200 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
                    >
                        <x-home.social-icon icon="linkedin" class="h-4 w-4" />
                    </a>
                    <a
                        href="{{ $social['facebook'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook"
                        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-200 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
                    >
                        <x-home.social-icon icon="facebook" class="h-4 w-4" />
                    </a>
                    <a
                        href="{{ $social['instagram'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-200 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
                    >
                        <x-home.social-icon icon="instagram" class="h-4 w-4" />
                    </a>
                    <a
                        href="{{ $social['github'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="GitHub"
                        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-300 text-slate-700 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-200 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
                    >
                        <x-home.social-icon icon="github" class="h-4 w-4" />
                    </a>
                </div>
            </div>

            <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-sm text-slate-500 dark:text-slate-400">
                <span class="inline-flex items-center gap-2">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                    {{ $hero['location'] }}
                </span>
                <span>{{ $hero['email'] }}</span>
            </div>
        </div>
    </div>
</section>
