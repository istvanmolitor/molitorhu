@props(['nav'])

<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/80 backdrop-blur dark:border-slate-800/80 dark:bg-slate-950/80">
    <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
        <a href="#top" class="text-sm font-semibold tracking-wide text-slate-900 dark:text-white">
            Molitor <span class="text-indigo-600 dark:text-indigo-400">István</span>
        </a>
        <nav class="hidden items-center gap-8 text-sm font-medium text-slate-600 sm:flex dark:text-slate-300">
            @foreach ($nav as $item)
                <a href="{{ $item['href'] }}" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">{{ $item['label'] }}</a>
            @endforeach
        </nav>
        <a
            href="#contact"
            class="inline-flex items-center rounded-full bg-slate-900 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-600 dark:bg-white dark:text-slate-900 dark:hover:bg-indigo-400"
        >
            Kapcsolatfelvétel
        </a>
    </div>
</header>
