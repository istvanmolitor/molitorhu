@props(['nav'])

<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/80 backdrop-blur dark:border-slate-800/80 dark:bg-slate-950/80">
    <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-y-4 px-6 py-4">
        <input type="checkbox" id="nav-toggle" class="peer hidden">

        <a href="#top" class="text-sm font-semibold tracking-wide text-slate-900 dark:text-white">
            Molitor <span class="text-indigo-600 dark:text-indigo-400">István</span>
        </a>

        <nav class="hidden items-center gap-6 text-sm font-medium text-slate-600 lg:flex lg:gap-8 dark:text-slate-300">
            @foreach ($nav as $item)
                <a href="{{ $item['href'] }}" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">{{ $item['label'] }}</a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <a
                href="#contact"
                class="hidden items-center rounded-full bg-slate-900 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-600 sm:inline-flex dark:bg-white dark:text-slate-900 dark:hover:bg-indigo-400"
            >
                Kapcsolatfelvétel
            </a>

            <label
                for="nav-toggle"
                class="inline-flex h-9 w-9 cursor-pointer items-center justify-center rounded-full text-slate-600 transition hover:bg-slate-100 lg:hidden dark:text-slate-300 dark:hover:bg-slate-800"
                aria-label="Menü megnyitása"
            >
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5" />
                </svg>
            </label>
        </div>

        <nav class="hidden w-full basis-full flex-col gap-1 pt-2 text-sm font-medium text-slate-600 peer-checked:flex lg:hidden dark:text-slate-300">
            @foreach ($nav as $item)
                <a href="{{ $item['href'] }}" class="rounded-lg px-3 py-2 transition hover:bg-slate-100 hover:text-indigo-600 dark:hover:bg-slate-800 dark:hover:text-indigo-400">{{ $item['label'] }}</a>
            @endforeach
            <a
                href="#contact"
                class="mt-2 inline-flex items-center justify-center rounded-full bg-slate-900 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-600 sm:hidden dark:bg-white dark:text-slate-900 dark:hover:bg-indigo-400"
            >
                Kapcsolatfelvétel
            </a>
        </nav>
    </div>
</header>
