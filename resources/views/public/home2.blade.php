@extends('templates.public')

@section('title', 'Home')

@section('content')
    <div class="bg-[#FAF6EF] font-sans text-[#1A1A17] antialiased">
        <div id="main">

            {{-- ============================================================
                 HERO — bottom-left, oversized display, cinematic image
            ============================================================ --}}
            <section class="relative flex min-h-[100svh] flex-col justify-end overflow-hidden bg-[#0F2E2C]">

                <img src="{{ asset('assets/hero/hero.webp') }}" alt="Aksi damai untuk bumi"
                    class="absolute inset-0 h-full w-full scale-[1.03] object-cover object-center md:object-top"
                    loading="eager">

                <div class="absolute inset-0 bg-gradient-to-t from-[#0F2E2C] via-[#0F2E2C]/40 to-[#0F2E2C]/25"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#0F2E2C]/85 via-[#0F2E2C]/25 to-transparent"></div>

                <div
                    class="wrap absolute inset-x-0 top-0 z-10 flex items-center justify-between pt-28 text-[10px] font-medium uppercase tracking-[0.28em] text-[#FAF6EF]/55">
                    <span class="flex items-center gap-3">
                        <span class="size-1.5 rounded-full bg-[#D18E2E]"></span>
                        Gerakan lingkungan — sejak 1971
                    </span>
                    <span class="hidden sm:block">Jakarta · Indonesia</span>
                </div>

                <div class="wrap relative z-10 grid grid-cols-12 gap-y-10 pb-10 pt-44 md:pb-14">
                    <div class="col-span-12 lg:col-span-10">
                        <p class="mb-7 flex items-center gap-4 text-[10px] uppercase tracking-[0.3em] text-[#FAF6EF]/70">
                            <span class="h-px w-12 bg-[#D18E2E]"></span>
                            Aksi iklim 2026
                        </p>
                        <h1
                            class="font-display text-[clamp(3.2rem,10vw,9.5rem)] uppercase leading-[0.84] tracking-[-0.02em] text-[#FAF6EF]">
                            Bertindak<br>
                            untuk <span class="text-[#D18E2E]">Bumi.</span>
                        </h1>
                    </div>

                    <div
                        class="col-span-12 grid gap-10 border-t border-[#FAF6EF]/20 pt-8 md:grid-cols-12 md:items-start">
                        <div class="md:col-span-6 lg:col-span-4">
                            <p class="max-w-md text-base font-light leading-relaxed text-[#FAF6EF]/80 md:text-lg">
                                Krisis iklim nyata. Kita tidak bisa diam. Bergabunglah dengan jutaan orang di seluruh
                                dunia untuk melindungi hutan, laut, dan kehidupan.
                            </p>
                            <div class="mt-7 flex flex-wrap items-center gap-3">
                                <a href="#"
                                    class="rounded-full bg-[#D18E2E] px-7 py-3.5 text-[10px] font-bold uppercase tracking-[0.22em] text-[#1A1A17] transition-colors hover:bg-[#c07f24]">
                                    Mulai Beraksi
                                </a>
                                <a href="#"
                                    class="rounded-full border border-[#FAF6EF]/30 px-7 py-3.5 text-[10px] font-bold uppercase tracking-[0.22em] text-[#FAF6EF] transition-colors hover:bg-[#FAF6EF] hover:text-[#0F2E2C]">
                                    Pelajari Isu
                                </a>
                            </div>
                        </div>

                        <div class="hidden md:col-span-3 md:col-start-10 md:block lg:col-start-11">
                            <div class="flex flex-col items-start gap-3 text-[10px] uppercase tracking-[0.25em] text-[#FAF6EF]/50">
                                <span
                                    class="grid size-10 place-items-center rounded-full border border-[#FAF6EF]/25 text-sm">↓</span>
                                <span>Gulir</span>
                                <span class="mt-8 font-display text-4xl leading-none text-[#FAF6EF]">
                                    01<span class="text-[#FAF6EF]/35">/06</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ============================================================
                 STATS — asymmetric, hairlines, no cards
            ============================================================ --}}
            <section class="border-b border-[#1A1A17]/10">
                <div class="wrap grid gap-12 py-16 lg:grid-cols-12 lg:gap-6 lg:py-24">
                    <div class="lg:col-span-3">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[#1A1A17]/45">
                            01 — Dampak
                        </p>
                        <p class="mt-4 max-w-[16rem] text-sm leading-relaxed text-[#1A1A17]/60">
                            Angka yang berbicara lebih jujur daripada janji. Setiap titik air adalah hasil kerja
                            bertahun-tahun bersama komunitas.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-4 lg:col-span-9 lg:gap-x-8">
                        <div class="border-t border-[#1A1A17]/20 pt-5">
                            <p class="font-display text-[clamp(2.4rem,4.4vw,4rem)] leading-[0.85] tracking-tight text-[#0F2E2C]">
                                <span data-count="1240000">1,240,000</span>
                            </p>
                            <p class="mt-3 text-[10px] uppercase tracking-[0.2em] text-[#1A1A17]/55">
                                people with safe water
                            </p>
                        </div>
                        <div class="border-t border-[#1A1A17]/20 pt-5 sm:mt-12">
                            <p class="font-display text-[clamp(2.4rem,4.4vw,4rem)] leading-[0.85] tracking-tight text-[#0F2E2C]">
                                <span data-count="3860">3,860</span>
                            </p>
                            <p class="mt-3 text-[10px] uppercase tracking-[0.2em] text-[#1A1A17]/55">
                                water points built
                            </p>
                        </div>
                        <div class="border-t border-[#1A1A17]/20 pt-5 sm:mt-4">
                            <p class="font-display text-[clamp(2.4rem,4.4vw,4rem)] leading-[0.85] tracking-tight text-[#0F2E2C]">
                                <span data-count="612">612</span>
                            </p>
                            <p class="mt-3 text-[10px] uppercase tracking-[0.2em] text-[#1A1A17]/55">
                                schools with clean water
                            </p>
                        </div>
                        <div class="border-t border-[#1A1A17]/20 pt-5 sm:mt-16">
                            <p class="font-display text-[clamp(2.4rem,4.4vw,4rem)] leading-[0.85] tracking-tight text-[#0F2E2C]">
                                <span data-count="94">94</span>%
                            </p>
                            <p class="mt-3 text-[10px] uppercase tracking-[0.2em] text-[#1A1A17]/55">
                                still working after 5 years
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ============================================================
                 MISSION — broken 12-col grid, overlapping amber badge
            ============================================================ --}}
            <section class="wrap py-24 lg:py-36">
                <div class="grid items-start gap-14 lg:grid-cols-12 lg:gap-8">
                    <div class="relative lg:col-span-5">
                        <span
                            class="absolute -left-3 -top-3 hidden h-full w-full border border-[#D18E2E]/50 lg:block"
                            aria-hidden="true"></span>
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('assets/img/about.svg') }}" alt="" width="1200" height="900"
                                loading="lazy" class="aspect-[4/5] w-full object-cover">
                        </div>
                        <div class="relative -mt-10 ml-6 w-[15rem] bg-[#D18E2E] p-6 text-[#1A1A17] sm:ml-auto sm:mr-[-1.5rem] sm:mt-[-3rem] lg:mr-[-2.5rem]">
                            <p class="font-display text-5xl leading-none">
                                200<span class="text-2xl">M</span>
                            </p>
                            <p class="mt-2 text-xs font-medium leading-snug">
                                hours a day women and girls spend collecting water
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-span-6 lg:col-start-7 lg:pt-10">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[#2E635F]">
                            02 — Our mission
                        </p>
                        <h2
                            class="mt-5 font-display text-[clamp(2.1rem,4.4vw,3.8rem)] uppercase leading-[0.92] tracking-tight text-[#0F2E2C]">
                            Water that lasts, run by the people who use it.
                        </h2>
                        <p class="mt-7 max-w-xl text-base font-light leading-relaxed text-[#1A1A17]/70 md:text-lg">
                            One in four people still lacks safe drinking water. Too many water projects break within a
                            few years. We do things differently: every system we fund is chosen, owned and maintained by
                            its community, with local mechanics and fair fees that keep it working for decades.
                        </p>

                        <ul class="mt-10 grid border-l border-t border-[#1A1A17]/15 sm:grid-cols-2">
                            <li class="border-b border-r border-[#1A1A17]/15 p-5">
                                <p class="font-display text-xs text-[#D18E2E]">01</p>
                                <p class="mt-3 text-sm font-semibold">
                                    Community owned
                                </p>
                                <p class="mt-1 text-sm leading-relaxed text-[#1A1A17]/55">
                                    Local water committees lead every project.
                                </p>
                            </li>
                            <li class="border-b border-r border-[#1A1A17]/15 p-5">
                                <p class="font-display text-xs text-[#D18E2E]">02</p>
                                <p class="mt-3 text-sm font-semibold">
                                    Built to last
                                </p>
                                <p class="mt-1 text-sm leading-relaxed text-[#1A1A17]/55">
                                    Monitored by sensor for 10 years.
                                </p>
                            </li>
                            <li class="border-b border-r border-[#1A1A17]/15 p-5">
                                <p class="font-display text-xs text-[#D18E2E]">03</p>
                                <p class="mt-3 text-sm font-semibold">
                                    Radically transparent
                                </p>
                                <p class="mt-1 text-sm leading-relaxed text-[#1A1A17]/55">
                                    Every project mapped and reported.
                                </p>
                            </li>
                            <li class="border-b border-r border-[#1A1A17]/15 p-5">
                                <p class="font-display text-xs text-[#D18E2E]">04</p>
                                <p class="mt-3 text-sm font-semibold">
                                    Locally staffed
                                </p>
                                <p class="mt-1 text-sm leading-relaxed text-[#1A1A17]/55">
                                    92% of our team live where they work.
                                </p>
                            </li>
                        </ul>

                        <a class="group mt-9 inline-flex items-center gap-3 text-[10px] font-bold uppercase tracking-[0.22em] text-[#0F2E2C]"
                            href="about.html">
                            <span class="border-b border-[#0F2E2C]/40 pb-1 transition-colors group-hover:border-[#D18E2E]">
                                More about our approach
                            </span>
                            <svg aria-hidden="true" class="size-4 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            {{-- ============================================================
                 PROGRAMS — editorial index rows, not a 3-card grid
            ============================================================ --}}
            <section class="wrap pb-24 lg:pb-36">
                <div class="flex flex-wrap items-end justify-between gap-6 border-b border-[#1A1A17]/15 pb-8">
                    <div>
                        <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[#2E635F]">
                            03 — What we do
                        </p>
                        <h2
                            class="mt-4 max-w-2xl font-display text-[clamp(2.1rem,4.6vw,4rem)] uppercase leading-[0.9] tracking-tight text-[#0F2E2C]">
                            Three ways your gift brings water home
                        </h2>
                    </div>
                    <a href="programs.html"
                        class="rounded-full border border-[#1A1A17]/30 px-6 py-3 text-[10px] font-bold uppercase tracking-[0.2em] text-[#0F2E2C] transition-colors hover:border-[#0F2E2C] hover:bg-[#0F2E2C] hover:text-[#FAF6EF]">
                        All six programs
                    </a>
                </div>

                <div class="border-b border-[#1A1A17]/15">
                    <a href="programs.html#east-africa"
                        class="group grid grid-cols-12 items-start gap-x-4 gap-y-4 border-t border-[#1A1A17]/15 px-1 py-8 transition-colors hover:bg-[#0F2E2C] hover:px-4 md:items-center">
                        <span
                            class="col-span-2 font-display text-sm tracking-wide text-[#1A1A17]/35 transition-colors group-hover:text-[#D18E2E] md:col-span-1">
                            01
                        </span>
                        <span class="col-span-2 md:col-span-1">
                            <svg aria-hidden="true" class="size-7 text-[#2E635F] transition-colors group-hover:text-[#D18E2E]"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewbox="0 0 24 24">
                                <path d="M12 3s-6 7-6 11a6 6 0 0 0 12 0c0-4-6-11-6-11Z"></path>
                            </svg>
                        </span>
                        <h3
                            class="col-span-8 font-display text-[clamp(1.5rem,2.6vw,2.4rem)] uppercase leading-[0.95] tracking-tight text-[#0F2E2C] transition-colors group-hover:text-[#FAF6EF] md:col-span-4">
                            Community wells &amp; boreholes
                        </h3>
                        <p
                            class="col-span-12 max-w-md text-sm font-light leading-relaxed text-[#1A1A17]/60 transition-colors group-hover:text-[#FAF6EF]/65 md:col-span-4">
                            Deep, solar-pumped boreholes with village water committees who own, run and repair them.
                        </p>
                        <div
                            class="col-span-12 flex items-center justify-between gap-4 text-[10px] font-semibold uppercase tracking-[0.18em] text-[#2E635F] transition-colors group-hover:text-[#FAF6EF] md:col-span-2">
                            <span>1,940 water points</span>
                            <svg aria-hidden="true" class="size-5 shrink-0 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </div>
                    </a>

                    <a href="programs.html#east-africa"
                        class="group grid grid-cols-12 items-start gap-x-4 gap-y-4 border-t border-[#1A1A17]/15 px-1 py-8 transition-colors hover:bg-[#0F2E2C] hover:px-4 md:items-center">
                        <span
                            class="col-span-2 font-display text-sm tracking-wide text-[#1A1A17]/35 transition-colors group-hover:text-[#D18E2E] md:col-span-1">
                            02
                        </span>
                        <span class="col-span-2 md:col-span-1">
                            <svg aria-hidden="true" class="size-7 text-[#2E635F] transition-colors group-hover:text-[#D18E2E]"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewbox="0 0 24 24">
                                <path
                                    d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.4 2.4-2.6-.4-.4-2.6Z">
                                </path>
                            </svg>
                        </span>
                        <h3
                            class="col-span-8 font-display text-[clamp(1.5rem,2.6vw,2.4rem)] uppercase leading-[0.95] tracking-tight text-[#0F2E2C] transition-colors group-hover:text-[#FAF6EF] md:col-span-4">
                            Pump mechanics cooperatives
                        </h3>
                        <p
                            class="col-span-12 max-w-md text-sm font-light leading-relaxed text-[#1A1A17]/60 transition-colors group-hover:text-[#FAF6EF]/65 md:col-span-4">
                            Training and tool kits for local mechanics, so a broken pump is fixed in days, not months.
                        </p>
                        <div
                            class="col-span-12 flex items-center justify-between gap-4 text-[10px] font-semibold uppercase tracking-[0.18em] text-[#2E635F] transition-colors group-hover:text-[#FAF6EF] md:col-span-2">
                            <span>312 mechanics trained</span>
                            <svg aria-hidden="true" class="size-5 shrink-0 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </div>
                    </a>

                    <a href="programs.html#southern-africa"
                        class="group grid grid-cols-12 items-start gap-x-4 gap-y-4 border-t border-[#1A1A17]/15 px-1 py-8 transition-colors hover:bg-[#0F2E2C] hover:px-4 md:items-center">
                        <span
                            class="col-span-2 font-display text-sm tracking-wide text-[#1A1A17]/35 transition-colors group-hover:text-[#D18E2E] md:col-span-1">
                            03
                        </span>
                        <span class="col-span-2 md:col-span-1">
                            <svg aria-hidden="true" class="size-7 text-[#2E635F] transition-colors group-hover:text-[#D18E2E]"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewbox="0 0 24 24">
                                <path d="M9 3h6v6h6v6h-6v6H9v-6H3V9h6Z"></path>
                            </svg>
                        </span>
                        <h3
                            class="col-span-8 font-display text-[clamp(1.5rem,2.6vw,2.4rem)] uppercase leading-[0.95] tracking-tight text-[#0F2E2C] transition-colors group-hover:text-[#FAF6EF] md:col-span-4">
                            Water for health clinics
                        </h3>
                        <p
                            class="col-span-12 max-w-md text-sm font-light leading-relaxed text-[#1A1A17]/60 transition-colors group-hover:text-[#FAF6EF]/65 md:col-span-4">
                            Running water, hand-washing stations and safe sanitation for rural clinics and maternity
                            wards.
                        </p>
                        <div
                            class="col-span-12 flex items-center justify-between gap-4 text-[10px] font-semibold uppercase tracking-[0.18em] text-[#2E635F] transition-colors group-hover:text-[#FAF6EF] md:col-span-2">
                            <span>148 clinics equipped</span>
                            <svg aria-hidden="true" class="size-5 shrink-0 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </section>

            {{-- ============================================================
                 STORY — image left, quote as the hero, amber caption overlap
            ============================================================ --}}
            <section class="wrap pb-24 lg:pb-36">
                <div class="grid items-center gap-12 lg:grid-cols-12 lg:gap-0">
                    <div class="relative lg:col-span-6">
                        <div class="overflow-hidden">
                            <img src="{{ asset('assets/img/story-amina.svg') }}"
                                alt="Illustration: Amina and her family at the new borehole in Lokichar" width="1200"
                                height="900" loading="lazy"
                                class="aspect-[4/5] w-full object-cover sm:aspect-[5/4] lg:aspect-[4/5]">
                        </div>
                        <div class="absolute bottom-0 left-0 bg-[#D18E2E] px-5 py-4 text-[#1A1A17]">
                            <p class="text-[10px] font-bold uppercase tracking-[0.22em]">
                                Lokichar, Kenya
                            </p>
                        </div>
                    </div>

                    <div class="lg:col-span-5 lg:col-start-8 lg:py-16">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[#2E635F]">
                            04 — Story spotlight · Lokichar, Kenya
                        </p>
                        <h2
                            class="mt-5 font-display text-[clamp(2rem,4vw,3.4rem)] uppercase leading-[0.92] tracking-tight text-[#0F2E2C]">
                            The well that brought Amina back to school
                        </h2>

                        <blockquote class="mt-8 border-l-2 border-[#D18E2E] pl-6">
                            <p
                                class="font-display text-[clamp(1.3rem,2.1vw,1.8rem)] leading-[1.25] tracking-tight text-[#1A1A17]">
                                “Now I walk to school, not to the river. I want to be an engineer and build wells like
                                this one.”
                            </p>
                            <footer class="mt-4 text-[10px] font-bold uppercase tracking-[0.25em] text-[#1A1A17]/50">
                                Amina, 13
                            </footer>
                        </blockquote>

                        <a class="group mt-9 inline-flex items-center gap-3 rounded-full bg-[#0F2E2C] px-7 py-3.5 text-[10px] font-bold uppercase tracking-[0.22em] text-[#FAF6EF] transition-colors hover:bg-[#2E635F]"
                            href="story.html">
                            Read Amina's story
                            <svg aria-hidden="true" class="size-4 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            {{-- ============================================================
                 APPEAL — dark forest bento, panel overlaps upward
            ============================================================ --}}
            <section class="bg-[#0F2E2C] py-20 text-[#FAF6EF] lg:py-28">
                <div class="wrap grid gap-12 lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-7">
                        <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-[#D18E2E]">
                            05 — Dry Season Appeal 2026
                        </p>
                        <h2
                            class="mt-5 max-w-2xl font-display text-[clamp(2.2rem,4.6vw,4rem)] uppercase leading-[0.9] tracking-tight">
                            Help us reach 40 villages before the rains fail.
                        </h2>

                        <div class="mt-12" data-campaign="" data-goal="750000" data-raised="528400">
                            <div class="flex flex-wrap items-end justify-between gap-4 border-b border-[#FAF6EF]/15 pb-5">
                                <p class="font-display text-[clamp(2.4rem,4vw,3.4rem)] leading-none">
                                    $<span data-raised-text="">528,400</span>
                                </p>
                                <p class="text-[10px] uppercase tracking-[0.2em] text-[#FAF6EF]/55">
                                    of $<span data-goal-text="">750,000</span> goal
                                </p>
                            </div>

                            <div aria-label="Appeal progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                class="mt-6 h-1.5 w-full overflow-hidden bg-[#FAF6EF]/15" role="progressbar">
                                <div class="h-full bg-[#D18E2E] transition-[width] duration-1000" data-progress=""></div>
                            </div>

                            <dl class="mt-6 flex flex-wrap gap-x-10 gap-y-4 text-[10px] uppercase tracking-[0.18em]">
                                <div>
                                    <dt class="inline text-[#FAF6EF]/50">Donors</dt>
                                    <dd class="ml-2 inline font-bold text-[#FAF6EF]">2,315</dd>
                                </div>
                                <div>
                                    <dt class="inline text-[#FAF6EF]/50">Days left</dt>
                                    <dd class="ml-2 inline font-bold text-[#FAF6EF]">18</dd>
                                </div>
                                <div>
                                    <dt class="inline text-[#FAF6EF]/50">Matched by</dt>
                                    <dd class="ml-2 inline font-bold text-[#FAF6EF]">The Halden Fund</dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <div class="lg:col-span-4 lg:col-start-9 lg:-mt-24">
                        <div class="border border-[#FAF6EF]/15 bg-[#FAF6EF] p-7 text-[#1A1A17] sm:p-9">
                            <p class="text-sm leading-relaxed text-[#1A1A17]/70">
                                Every gift to the appeal is
                                <strong class="font-semibold text-[#0F2E2C]">doubled</strong>
                                until we hit our goal.
                            </p>
                            <a class="mt-6 flex w-full items-center justify-center rounded-full bg-[#D18E2E] px-6 py-4 text-[10px] font-bold uppercase tracking-[0.22em] text-[#1A1A17] transition-colors hover:bg-[#c07f24]"
                                href="donate.html?appeal=dry-season">
                                Double my gift
                            </a>
                            <p class="mt-4 text-center text-[9px] uppercase tracking-[0.2em] text-[#1A1A17]/40">
                                Secure · Tax-deductible · Cancel anytime
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- ============================================================
                 PARTNERS — label left, hairline grid of marks
            ============================================================ --}}
            <section class="border-b border-[#1A1A17]/10">
                <div class="wrap grid gap-10 py-14 lg:grid-cols-12 lg:items-center">
                    <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[#1A1A17]/45 lg:col-span-3">
                        06 — With thanks to our partners
                    </p>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:col-span-9">
                        <span class="flex items-center gap-3 border-b border-r border-[#1A1A17]/10 py-6 pr-4 text-sm font-semibold tracking-tight text-[#1A1A17]/55 transition-colors hover:text-[#0F2E2C]">
                            <svg aria-hidden="true" class="size-6 shrink-0" viewbox="0 0 24 24">
                                <path d="M2 9 q5 -5 10 0 t10 0 M2 16 q5 -5 10 0 t10 0" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-width="2"></path>
                            </svg>
                            Northwind
                        </span>
                        <span class="flex items-center gap-3 border-b border-r border-[#1A1A17]/10 py-6 pl-4 text-sm font-semibold tracking-tight text-[#1A1A17]/55 transition-colors hover:text-[#0F2E2C]">
                            <svg aria-hidden="true" class="size-6 shrink-0" viewbox="0 0 24 24">
                                <path d="M4 20 C4 8 12 4 20 4 C20 14 14 20 4 20 Z" fill="currentColor"></path>
                            </svg>
                            Halden Fund
                        </span>
                        <span class="flex items-center gap-3 border-b border-[#1A1A17]/10 py-6 pr-4 text-sm font-semibold tracking-tight text-[#1A1A17]/55 transition-colors hover:text-[#0F2E2C] sm:border-r sm:pl-4">
                            <svg aria-hidden="true" class="size-6 shrink-0" viewbox="0 0 24 24">
                                <circle cx="12" cy="12" fill="currentColor" r="5"></circle>
                                <path d="M12 1v4M12 19v4M1 12h4M19 12h4M4 4l3 3M17 17l3 3M4 20l3-3M17 7l3-3"
                                    stroke="currentColor" stroke-width="1.5"></path>
                            </svg>
                            Solace
                        </span>
                        <span class="flex items-center gap-3 border-b border-[#1A1A17]/10 py-6 pl-4 text-sm font-semibold tracking-tight text-[#1A1A17]/55 transition-colors hover:text-[#0F2E2C] lg:border-r lg:pl-0">
                            <svg aria-hidden="true" class="size-6 shrink-0" viewbox="0 0 24 24">
                                <circle cx="12" cy="12" fill="none" r="8" stroke="currentColor" stroke-width="4"></circle>
                            </svg>
                            Meridian
                        </span>
                        <span class="flex items-center gap-3 border-b border-[#1A1A17]/10 py-6 pr-4 text-sm font-semibold tracking-tight text-[#1A1A17]/55 transition-colors hover:text-[#0F2E2C] sm:border-r sm:border-b-0 sm:pl-4">
                            <svg aria-hidden="true" class="size-6 shrink-0" viewbox="0 0 24 24">
                                <path d="M12 2 C12 2 4 11 4 15.5 A8 8 0 0 0 20 15.5 C20 11 12 2 12 2 Z"
                                    fill="currentColor"></path>
                            </svg>
                            Aquila
                        </span>
                        <span class="flex items-center gap-3 py-6 pl-4 text-sm font-semibold tracking-tight text-[#1A1A17]/55 transition-colors hover:text-[#0F2E2C] sm:pl-4">
                            <svg aria-hidden="true" class="size-6 shrink-0" viewbox="0 0 24 24">
                                <path d="M12 2 21 7v10l-9 5-9-5V7Z" fill="currentColor"></path>
                            </svg>
                            Brightlane
                        </span>
                    </div>
                </div>
            </section>

            {{-- ============================================================
                 NEWSLETTER — asymmetric split
            ============================================================ --}}
            <section class="wrap py-24 lg:py-32">
                <div class="grid gap-12 lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-5">
                        <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-[#2E635F]">
                            Field notes
                        </p>
                        <h2
                            class="mt-4 font-display text-[clamp(2.1rem,4.2vw,3.6rem)] uppercase leading-[0.9] tracking-tight text-[#0F2E2C]">
                            Stories from the field, once a month
                        </h2>
                        <p class="mt-5 max-w-md text-sm leading-relaxed text-[#1A1A17]/60 md:text-base">
                            Photos, updates and the occasional good-news surprise from the communities you support. No
                            spam, ever.
                        </p>
                    </div>

                    <div class="lg:col-span-6 lg:col-start-7 lg:pt-10">
                        <form
                            data-success-text="Thanks for subscribing! Your first field note arrives next month."
                            data-validate="" novalidate="">
                            <!-- Demo form: connect it to your email provider in assets/js/main.js. -->
                            <div class="grid gap-6 sm:grid-cols-2">
                                <div>
                                    <label class="sr-only" for="nl-name">
                                        First name
                                    </label>
                                    <input autocomplete="given-name"
                                        class="w-full border-0 border-b border-[#1A1A17]/25 bg-transparent px-0 py-3 text-sm text-[#1A1A17] placeholder:text-[#1A1A17]/40 focus:border-[#0F2E2C] focus:outline-none"
                                        id="nl-name" name="name" placeholder="First name" required="" />
                                </div>
                                <div>
                                    <label class="sr-only" for="nl-email">
                                        Email address
                                    </label>
                                    <input autocomplete="email"
                                        class="w-full border-0 border-b border-[#1A1A17]/25 bg-transparent px-0 py-3 text-sm text-[#1A1A17] placeholder:text-[#1A1A17]/40 focus:border-[#0F2E2C] focus:outline-none"
                                        id="nl-email" name="email" placeholder="Email address" required=""
                                        type="email" />
                                </div>
                            </div>
                            <div class="mt-7 flex flex-wrap items-center gap-5">
                                <button
                                    class="rounded-full bg-[#D18E2E] px-7 py-3.5 text-[10px] font-bold uppercase tracking-[0.22em] text-[#1A1A17] transition-colors hover:bg-[#c07f24]"
                                    type="submit">
                                    Sign up
                                </button>
                                <p class="text-[10px] uppercase tracking-[0.18em] text-[#1A1A17]/40">
                                    One email a month. Unsubscribe anytime.
                                </p>
                            </div>
                            <p class="mt-5 hidden border border-[#2E635F]/20 bg-[#2E635F]/5 p-4 text-sm text-[#0F2E2C]"
                                data-success="" role="status">
                            </p>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        {{-- ================================================================
             FOOTER — dark forest, oversized wordmark, sharp grid
        ================================================================= --}}
        <footer class="bg-[#0F2E2C] text-[#FAF6EF]">
            <div class="wrap pt-16 lg:pt-20">
                <div class="border-b border-[#FAF6EF]/15 pb-10">
                    <a class="inline-flex items-center gap-3" href="index.html">
                        <svg aria-hidden="true" class="size-10 shrink-0" viewbox="0 0 40 40">
                            <circle cx="20" cy="20" fill="#2E635F" r="20"></circle>
                            <circle cx="27" cy="13" fill="#D18E2E" r="5"></circle>
                            <path d="M18 9s-8 9.5-8 15a8 8 0 0 0 16 0c0-5.5-8-15-8-15Z" fill="#FAF6EF"></path>
                            <path d="M14.5 25a3.6 3.6 0 0 0 3.5 3.5" fill="none" stroke="#0F2E2C"
                                stroke-linecap="round" stroke-width="2"></path>
                        </svg>
                        <span class="text-[10px] font-bold uppercase tracking-[0.28em] text-[#FAF6EF]/60">
                            Safe water, for good
                        </span>
                    </a>
                    <p
                        class="mt-8 font-display text-[clamp(2.6rem,9vw,7.5rem)] uppercase leading-[0.82] tracking-[-0.02em]">
                        Clearwater<br class="sm:hidden"> Trust
                    </p>
                </div>

                <div class="grid gap-12 py-12 md:grid-cols-2 lg:grid-cols-12 lg:gap-8">
                    <div class="lg:col-span-4">
                        <p class="max-w-xs text-sm leading-relaxed text-[#FAF6EF]/65">
                            Safe water, for good. Working alongside communities in nine countries since 2009.
                        </p>
                        <p class="mt-6 text-[10px] uppercase tracking-[0.2em] leading-relaxed text-[#FAF6EF]/45">
                            418 Washington Ave N, Minneapolis, MN 55401
                            <br />
                            hello@example.org · (612) 555-0142
                        </p>
                    </div>

                    <div class="lg:col-span-2 lg:col-start-6">
                        <h2 class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#D18E2E]">
                            Our work
                        </h2>
                        <ul class="mt-5 grid gap-3 text-sm">
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]" href="programs.html">
                                    Programs
                                </a>
                            </li>
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]" href="stories.html">
                                    Stories
                                </a>
                            </li>
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]"
                                    href="about.html#finances">
                                    Where money goes
                                </a>
                            </li>
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]" href="about.html">
                                    About us
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-2">
                        <h2 class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#D18E2E]">
                            Take part
                        </h2>
                        <ul class="mt-5 grid gap-3 text-sm">
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]" href="donate.html">
                                    Donate
                                </a>
                            </li>
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]"
                                    href="get-involved.html">
                                    Volunteer
                                </a>
                            </li>
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]"
                                    href="get-involved.html#fundraise">
                                    Fundraise
                                </a>
                            </li>
                            <li>
                                <a class="text-[#FAF6EF]/65 transition-colors hover:text-[#FAF6EF]" href="events.html">
                                    Events
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:col-span-4">
                        <h2 class="text-[10px] font-bold uppercase tracking-[0.25em] text-[#D18E2E]">
                            Field notes, monthly
                        </h2>
                        <p class="mt-5 text-sm leading-relaxed text-[#FAF6EF]/65">
                            One email a month with stories from the communities you support.
                        </p>
                        <form class="mt-5" data-success-text="You're subscribed. Look out for our next field note."
                            data-validate="" novalidate="">
                            <!-- Demo form: connect it to your email provider in assets/js/main.js. -->
                            <div class="flex flex-col gap-3 sm:flex-row">
                                <div class="min-w-0 flex-1">
                                    <label class="sr-only" for="footer-email">
                                        Email address
                                    </label>
                                    <input autocomplete="email"
                                        class="w-full border-0 border-b border-[#FAF6EF]/25 bg-transparent px-0 py-3 text-sm text-[#FAF6EF] placeholder:text-[#FAF6EF]/40 focus:border-[#D18E2E] focus:outline-none"
                                        id="footer-email" name="email" placeholder="you@example.com" required=""
                                        type="email" />
                                </div>
                                <button
                                    class="shrink-0 rounded-full bg-[#D18E2E] px-6 py-3.5 text-[10px] font-bold uppercase tracking-[0.22em] text-[#1A1A17] transition-colors hover:bg-[#c07f24]"
                                    type="submit">
                                    Subscribe
                                </button>
                            </div>
                            <p class="mt-4 hidden border border-[#FAF6EF]/20 bg-[#FAF6EF]/5 p-3 text-sm text-[#FAF6EF]"
                                data-success="" role="status">
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="border-t border-[#FAF6EF]/15">
                <div
                    class="wrap flex flex-col gap-4 py-7 text-[10px] uppercase tracking-[0.16em] text-[#FAF6EF]/45 sm:flex-row sm:items-center sm:justify-between">
                    <p>
                        ©
                        <span data-year="">2026</span>
                        Clearwater Trust. Registered 501(c)(3) nonprofit, EIN 00-0000000.
                    </p>
                    <ul class="flex flex-wrap gap-6">
                        <li>
                            <a class="transition-colors hover:text-[#FAF6EF]" href="about.html#finances">
                                Financials
                            </a>
                        </li>
                        <li>
                            <a class="transition-colors hover:text-[#FAF6EF]" href="get-involved.html#partners">
                                Partnerships
                            </a>
                        </li>
                        <li>
                            <a class="transition-colors hover:text-[#FAF6EF]" href="donate.html#faq">
                                Donor FAQ
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection
