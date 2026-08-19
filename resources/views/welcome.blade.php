<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Molitor István — Senior PHP / Laravel fejlesztő</title>
        <meta name="description" content="Molitor István szakmai portfóliója: Senior PHP / Laravel fejlesztő, backend architektúra és API fejlesztés.">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">

        {{-- Header --}}
        <header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/80 backdrop-blur dark:border-slate-800/80 dark:bg-slate-950/80">
            <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
                <a href="#top" class="text-sm font-semibold tracking-wide text-slate-900 dark:text-white">
                    Molitor <span class="text-indigo-600 dark:text-indigo-400">István</span>
                </a>
                <nav class="hidden items-center gap-8 text-sm font-medium text-slate-600 sm:flex dark:text-slate-300">
                    <a href="#about" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">Rólam</a>
                    <a href="#experience" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">Tapasztalat</a>
                    <a href="#skills" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">Készségek</a>
                    <a href="#education" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">Tanulmányok</a>
                    <a href="#contact" class="transition hover:text-indigo-600 dark:hover:text-indigo-400">Kapcsolat</a>
                </nav>
                <a
                    href="#contact"
                    class="inline-flex items-center rounded-full bg-slate-900 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-600 dark:bg-white dark:text-slate-900 dark:hover:bg-indigo-400"
                >
                    Kapcsolatfelvétel
                </a>
            </div>
        </header>

        {{-- Hero --}}
        <section id="top" class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-0 -z-10">
                <div class="absolute -top-32 left-1/2 h-96 w-[42rem] -translate-x-1/2 rounded-full bg-indigo-400/20 blur-3xl dark:bg-indigo-500/10"></div>
            </div>

            <div class="mx-auto grid max-w-5xl grid-cols-1 items-center gap-12 px-6 py-20 sm:py-28 lg:grid-cols-[0.9fr_1.1fr]">
                <div class="mx-auto w-72 shrink-0 sm:w-96 lg:order-first lg:mx-0">
                    <div class="aspect-square overflow-hidden rounded-full bg-gradient-to-br from-indigo-500 to-violet-600 p-1.5 shadow-xl shadow-indigo-500/20">
                        <img
                            src="{{ asset('images/molitor-istvan.jpg') }}"
                            alt="Molitor István"
                            class="h-full w-full rounded-full object-cover"
                            loading="eager"
                            width="384"
                            height="384"
                        >
                    </div>
                </div>

                <div>
                    <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-indigo-200 bg-indigo-50 px-3 py-1 text-xs font-medium tracking-wide text-indigo-700 uppercase dark:border-indigo-900 dark:bg-indigo-950 dark:text-indigo-300">
                        Elérhető új lehetőségekre
                    </p>
                    <h1 class="text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl dark:text-white">
                        Molitor István
                    </h1>
                    <p class="mt-3 text-xl font-medium text-indigo-600 dark:text-indigo-400">
                        Senior PHP / Laravel fejlesztő
                    </p>
                    <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                        8+ év tapasztalat skálázható webalkalmazások és API-k tervezésében,
                        fejlesztésében Laravel és PHP ökoszisztémában — az adatbázis-tervezéstől
                        a felhő alapú üzemeltetésig.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a
                            href="#contact"
                            class="inline-flex items-center rounded-full bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500"
                        >
                            Vegyük fel a kapcsolatot
                        </a>
                        <a
                            href="https://www.linkedin.com/in/istv%C3%A1n-molitor-866779106/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 rounded-full border border-slate-300 px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-200 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
                        >
                            LinkedIn profil
                        </a>
                    </div>

                    <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-sm text-slate-500 dark:text-slate-400">
                        <span class="inline-flex items-center gap-2">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                            Budapest, Magyarország
                        </span>
                        <span>istvanmolitor@gmail.com</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- About --}}
        <section id="about" class="border-t border-slate-200 py-20 dark:border-slate-800">
            <div class="mx-auto max-w-5xl px-6">
                <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Rólam</h2>
                <p class="mt-4 max-w-3xl text-2xl leading-snug font-semibold text-slate-900 dark:text-white">
                    Backend-fókuszú full-stack fejlesztő, aki szereti a tiszta architektúrát és a mérhető eredményeket.
                </p>
                <p class="mt-6 max-w-3xl text-lg leading-relaxed text-slate-600 dark:text-slate-300">
                    Karrieremet PHP fejlesztőként kezdtem, és azóta Laravel-alapú vállalati
                    rendszerek, API-k és integrációk fejlesztésére specializálódtam. Csapatokban
                    dolgozom szívesen, ahol fontos a kódminőség, a tesztelhetőség és a
                    hosszú távon fenntartható architektúra. Emellett szeretem megosztani a
                    tudásomat junior kollégákkal code review-k és mentorálás során.
                </p>
            </div>
        </section>

        {{-- Experience --}}
        <section id="experience" class="border-t border-slate-200 bg-slate-50 py-20 dark:border-slate-800 dark:bg-slate-900/50">
            <div class="mx-auto max-w-5xl px-6">
                <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Szakmai tapasztalat</h2>

                <div class="mt-10 space-y-10">
                    @foreach ([
                        [
                            'role' => 'Senior Backend Fejlesztő',
                            'company' => 'TechNova Kft.',
                            'period' => '2022 — jelenleg',
                            'description' => 'Laravel-alapú mikroszolgáltatások és belső API-k tervezése, csapatvezetői mentorálás, CI/CD folyamatok kialakítása.',
                            'tags' => ['Laravel', 'Docker', 'AWS', 'MySQL'],
                        ],
                        [
                            'role' => 'PHP / Laravel Fejlesztő',
                            'company' => 'WebSolutions Zrt.',
                            'period' => '2019 — 2022',
                            'description' => 'E-kereskedelmi és ügyfélkezelő platformok fejlesztése, harmadik féltől származó fizetési és szállítási integrációk implementálása.',
                            'tags' => ['Laravel', 'Vue.js', 'REST API', 'Redis'],
                        ],
                        [
                            'role' => 'Junior Webfejlesztő',
                            'company' => 'Digital Craft Stúdió',
                            'period' => '2016 — 2019',
                            'description' => 'Ügyféloldali weboldalak és egyedi CMS-megoldások fejlesztése PHP és MySQL alapokon.',
                            'tags' => ['PHP', 'MySQL', 'jQuery'],
                        ],
                    ] as $job)
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

        {{-- Skills --}}
        <section id="skills" class="border-t border-slate-200 py-20 dark:border-slate-800">
            <div class="mx-auto max-w-5xl px-6">
                <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Készségek</h2>

                <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-3">
                    @foreach ([
                        'Backend' => ['PHP', 'Laravel', 'REST API', 'MySQL', 'PostgreSQL', 'Redis'],
                        'Frontend' => ['Vue.js', 'Tailwind CSS', 'JavaScript', 'Blade'],
                        'Eszközök & DevOps' => ['Docker', 'Git', 'CI/CD', 'AWS'],
                    ] as $category => $items)
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

        {{-- Education --}}
        <section id="education" class="border-t border-slate-200 bg-slate-50 py-20 dark:border-slate-800 dark:bg-slate-900/50">
            <div class="mx-auto max-w-5xl px-6">
                <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Tanulmányok</h2>

                <div class="mt-10">
                    <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Mérnökinformatikus BSc</h3>
                    <p class="text-sm font-medium text-indigo-600 dark:text-indigo-400">Óbudai Egyetem</p>
                    <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">2013 — 2016</p>
                </div>
            </div>
        </section>

        {{-- Contact --}}
        <section id="contact" class="border-t border-slate-200 py-20 dark:border-slate-800">
            <div class="mx-auto max-w-5xl px-6 text-center">
                <h2 class="text-sm font-semibold tracking-widest text-indigo-600 uppercase dark:text-indigo-400">Kapcsolat</h2>
                <p class="mt-4 text-3xl font-bold tracking-tight text-slate-900 dark:text-white">
                    Dolgozzunk együtt.
                </p>
                <p class="mx-auto mt-4 max-w-xl text-lg text-slate-600 dark:text-slate-300">
                    Nyitott vagyok új szakmai lehetőségekre és érdekes projektekre — írj bátran.
                </p>

                <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                    <a
                        href="mailto:istvanmolitor@gmail.com"
                        class="inline-flex items-center rounded-full bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500"
                    >
                        istvanmolitor@gmail.com
                    </a>
                    <a
                        href="https://www.linkedin.com/in/istv%C3%A1n-molitor-866779106/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 rounded-full border border-slate-300 px-6 py-3 text-sm font-semibold text-slate-700 transition hover:border-indigo-400 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-200 dark:hover:border-indigo-500 dark:hover:text-indigo-400"
                    >
                        LinkedIn
                    </a>
                </div>
            </div>
        </section>

        <footer class="border-t border-slate-200 py-8 text-center text-sm text-slate-500 dark:border-slate-800 dark:text-slate-400">
            &copy; {{ now()->year }} Molitor István. Minden jog fenntartva.
        </footer>
    </body>
</html>
