@props(['social'])

<footer class="border-t border-slate-200 py-8 dark:border-slate-800">
    <div class="mx-auto flex max-w-5xl flex-col items-center gap-4 px-6 text-center">
        <div class="flex items-center gap-3">
            <a
                href="{{ $social['linkedin'] }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="LinkedIn"
                class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-500 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-400 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
            >
                <x-home.social-icon icon="linkedin" class="h-4 w-4" />
            </a>
            <a
                href="{{ $social['facebook'] }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Facebook"
                class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-500 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-400 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
            >
                <x-home.social-icon icon="facebook" class="h-4 w-4" />
            </a>
            <a
                href="{{ $social['instagram'] }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Instagram"
                class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-500 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-400 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
            >
                <x-home.social-icon icon="instagram" class="h-4 w-4" />
            </a>
            <a
                href="{{ $social['github'] }}"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="GitHub"
                class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-500 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-400 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
            >
                <x-home.social-icon icon="github" class="h-4 w-4" />
            </a>
        </div>
        <p class="text-sm text-slate-500 dark:text-slate-400">
            &copy; {{ now()->year }} Molitor István. Minden jog fenntartva.
        </p>
    </div>
</footer>
