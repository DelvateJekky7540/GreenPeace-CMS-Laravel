@extends('templates.public')

@section('title', 'Home')

@section('content')
    
    <body class="min-h-screen overflow-x-clip">
        <main id="main">


            <section class="relative h-screen min-h-[600px] w-full overflow-hidden bg-black">

                {{-- 1. Background Image --}}
                {{-- Gunakan object-center md:object-top agar monumen tidak terpotong di mobile --}}
                <img src="{{ asset('assets/hero/hero.webp') }}" alt="Aksi damai untuk bumi" class="absolute inset-0 h-full w-full object-cover object-center md:object-top" loading="eager">

                {{-- 2. Overlay Gelap --}}
                {{-- Saya gunakan gradient dari kiri (gelap) ke kanan (terang) agar teks di kiri sangat jelas --}}
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
                {{-- Tambahan gradient dari bawah agar teks bawah juga aman --}}
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>

                {{-- 3. Konten Utama --}}
                <div class="relative z-10 h-full flex flex-col justify-end pb-20 md:pb-32 w-full">
                    
                    {{-- Gunakan class "wrap" dari template agar sejajar dengan Navbar --}}
                    <div class="wrap flex flex-col items-start gap-6">
                        
                        {{-- Judul (Gunakan font-display / Anton) --}}
                        <h1 class="text-white text-5xl md:text-7xl lg:text-[6.5rem] font-display leading-[1.05] tracking-tight max-w-4xl uppercase">
                            Bertindak untuk <br>Bumi.
                        </h1>

                        {{-- Paragraf --}}
                        <p class="text-white/90 text-base md:text-lg leading-relaxed max-w-xl font-light">
                            Krisis iklim nyata. Kita tidak bisa diam. Bergabunglah dengan jutaan orang di seluruh dunia untuk melindungi hutan, laut, dan kehidupan.
                        </p>

                        {{-- Tombol CTA (Sangat disarankan) --}}
                        <div class="mt-4 flex flex-wrap gap-4">
                            <a href="#" class="bg-[#66CC00] text-black px-8 py-4 rounded-full font-bold hover:bg-[#5AB800] transition-colors shadow-lg">
                                Mulai Beraksi
                            </a>
                            <a href="#" class="bg-white/10 backdrop-blur-md text-white border border-white/30 px-8 py-4 rounded-full font-bold hover:bg-white/20 transition-colors">
                                Pelajari Isu
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <section class="border-y border-line bg-white/60">
                <div class="wrap grid gap-10 py-14 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="reveal" style="--d:0ms">
                        <p class="font-display text-[clamp(2.4rem,4.5vw,3.6rem)] leading-none font-semibold text-sea-800">
                            <span data-count="1240000">
                                1,240,000
                            </span>
                        </p>
                        <p class="mt-2 text-muted">
                            people with safe water
                        </p>
                    </div>
                    <div class="reveal" style="--d:90ms">
                        <p class="font-display text-[clamp(2.4rem,4.5vw,3.6rem)] leading-none font-semibold text-sea-800">
                            <span data-count="3860">
                                3,860
                            </span>
                        </p>
                        <p class="mt-2 text-muted">
                            water points built
                        </p>
                    </div>
                    <div class="reveal" style="--d:180ms">
                        <p class="font-display text-[clamp(2.4rem,4.5vw,3.6rem)] leading-none font-semibold text-sea-800">
                            <span data-count="612">
                                612
                            </span>
                        </p>
                        <p class="mt-2 text-muted">
                            schools with clean water
                        </p>
                    </div>
                    <div class="reveal" style="--d:270ms">
                        <p class="font-display text-[clamp(2.4rem,4.5vw,3.6rem)] leading-none font-semibold text-sea-800">
                            <span data-count="94">
                                94
                            </span>
                            %
                        </p>
                        <p class="mt-2 text-muted">
                            still working after 5 years
                        </p>
                    </div>
                </div>
            </section>

            <section class="wrap grid items-center gap-14 pt-28 lg:grid-cols-2">
                <div class="reveal relative">
                    <img alt="" class="aspect-[4/3] w-full rounded-[2rem] object-cover" height="900" loading="lazy"
                        src="assets/img/about.svg" width="1200" />
                    <div
                        class="absolute -right-2 -bottom-8 hidden rounded-[1.5rem] bg-sun-400 p-6 text-sea-900 shadow-xl sm:block sm:-right-6">
                        <p class="font-display text-5xl font-semibold">
                            200
                            <span class="text-2xl">
                                M
                            </span>
                        </p>
                        <p class="mt-1 max-w-[10rem] text-sm font-medium">
                            hours a day women and girls spend collecting water
                        </p>
                    </div>
                </div>
                <div>
                    <p class="eyebrow reveal">
                        Our mission
                    </p>
                    <h2 class="section-title reveal mt-4 text-sea-900">
                        Water that lasts, run by the people who use it.
                    </h2>
                    <p class="lead reveal mt-6">
                        One in four people still lacks safe drinking water. Too many water projects break within a few
                        years. We do things differently: every system we fund is chosen, owned and maintained by its
                        community, with local mechanics and fair fees that keep it working for decades.
                    </p>
                    <ul class="reveal mt-8 grid gap-4 sm:grid-cols-2">
                        <li class="flex gap-3">
                            <svg aria-hidden="true" class="mt-0.5 size-5 shrink-0 text-sea-500" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                viewbox="0 0 24 24">
                                <path d="m5 12 5 5 9-10">
                                </path>
                            </svg>
                            <span>
                                <strong>
                                    Community owned
                                </strong>
                                <br />
                                <span class="text-muted">
                                    Local water committees lead every project.
                                </span>
                            </span>
                        </li>
                        <li class="flex gap-3">
                            <svg aria-hidden="true" class="mt-0.5 size-5 shrink-0 text-sea-500" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                viewbox="0 0 24 24">
                                <path d="m5 12 5 5 9-10">
                                </path>
                            </svg>
                            <span>
                                <strong>
                                    Built to last
                                </strong>
                                <br />
                                <span class="text-muted">
                                    Monitored by sensor for 10 years.
                                </span>
                            </span>
                        </li>
                        <li class="flex gap-3">
                            <svg aria-hidden="true" class="mt-0.5 size-5 shrink-0 text-sea-500" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                viewbox="0 0 24 24">
                                <path d="m5 12 5 5 9-10">
                                </path>
                            </svg>
                            <span>
                                <strong>
                                    Radically transparent
                                </strong>
                                <br />
                                <span class="text-muted">
                                    Every project mapped and reported.
                                </span>
                            </span>
                        </li>
                        <li class="flex gap-3">
                            <svg aria-hidden="true" class="mt-0.5 size-5 shrink-0 text-sea-500" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                viewbox="0 0 24 24">
                                <path d="m5 12 5 5 9-10">
                                </path>
                            </svg>
                            <span>
                                <strong>
                                    Locally staffed
                                </strong>
                                <br />
                                <span class="text-muted">
                                    92% of our team live where they work.
                                </span>
                            </span>
                        </li>
                    </ul>
                    <a class="reveal mt-9 inline-flex items-center gap-2 font-semibold text-sea-700 hover:text-sea-900"
                        href="about.html">
                        More about our approach
                        <svg aria-hidden="true" class="size-5" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6">
                            </path>
                        </svg>
                    </a>
                </div>
            </section>
            <section class="wrap pt-28">
                <div class="flex flex-wrap items-end justify-between gap-6">
                    <div>
                        <p class="eyebrow reveal">
                            What we do
                        </p>
                        <h2 class="section-title reveal mt-4 max-w-xl text-sea-900">
                            Three ways your gift brings water home
                        </h2>
                    </div>
                    <a class="reveal btn btn-outline text-sea-800" href="programs.html">
                        All six programs
                    </a>
                </div>
                <div class="mt-12 grid gap-6 md:grid-cols-3">
                    <a class="reveal group card flex flex-col p-7 transition-all hover:-translate-y-1 hover:shadow-[0_30px_60px_-36px_rgb(11_52_51/.5)]"
                        href="programs.html#east-africa" style="--d:0ms">
                        <span class="grid size-12 place-items-center rounded-2xl bg-sea-50 text-sea-600">
                            <svg aria-hidden="true" class="size-6" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M12 3s-6 7-6 11a6 6 0 0 0 12 0c0-4-6-11-6-11Z">
                                </path>
                            </svg>
                        </span>
                        <h3 class="mt-6 text-xl font-semibold text-sea-900">
                            Community wells &amp; boreholes
                        </h3>
                        <p class="mt-2 flex-1 text-muted">
                            Deep, solar-pumped boreholes with village water committees who own, run and repair them.
                        </p>
                        <p
                            class="mt-6 flex items-center justify-between border-t border-line pt-4 text-sm font-semibold text-sea-700">
                            1,940 water points
                            <svg aria-hidden="true" class="size-5 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6">
                                </path>
                            </svg>
                        </p>
                    </a>
                    <a class="reveal group card flex flex-col p-7 transition-all hover:-translate-y-1 hover:shadow-[0_30px_60px_-36px_rgb(11_52_51/.5)]"
                        href="programs.html#east-africa" style="--d:80ms">
                        <span class="grid size-12 place-items-center rounded-2xl bg-sea-50 text-sea-600">
                            <svg aria-hidden="true" class="size-6" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                                <path
                                    d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4l-2.4 2.4-2.6-.4-.4-2.6Z">
                                </path>
                            </svg>
                        </span>
                        <h3 class="mt-6 text-xl font-semibold text-sea-900">
                            Pump mechanics cooperatives
                        </h3>
                        <p class="mt-2 flex-1 text-muted">
                            Training and tool kits for local mechanics, so a broken pump is fixed in days, not months.
                        </p>
                        <p
                            class="mt-6 flex items-center justify-between border-t border-line pt-4 text-sm font-semibold text-sea-700">
                            312 mechanics trained
                            <svg aria-hidden="true" class="size-5 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6">
                                </path>
                            </svg>
                        </p>
                    </a>
                    <a class="reveal group card flex flex-col p-7 transition-all hover:-translate-y-1 hover:shadow-[0_30px_60px_-36px_rgb(11_52_51/.5)]"
                        href="programs.html#southern-africa" style="--d:160ms">
                        <span class="grid size-12 place-items-center rounded-2xl bg-sea-50 text-sea-600">
                            <svg aria-hidden="true" class="size-6" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M9 3h6v6h6v6h-6v6H9v-6H3V9h6Z">
                                </path>
                            </svg>
                        </span>
                        <h3 class="mt-6 text-xl font-semibold text-sea-900">
                            Water for health clinics
                        </h3>
                        <p class="mt-2 flex-1 text-muted">
                            Running water, hand-washing stations and safe sanitation for rural clinics and maternity wards.
                        </p>
                        <p
                            class="mt-6 flex items-center justify-between border-t border-line pt-4 text-sm font-semibold text-sea-700">
                            148 clinics equipped
                            <svg aria-hidden="true" class="size-5 transition-transform group-hover:translate-x-1"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6">
                                </path>
                            </svg>
                        </p>
                    </a>
                </div>
            </section>
            <section class="wrap pt-28">
                <div class="reveal grid overflow-hidden rounded-[2rem] bg-sand lg:grid-cols-2">
                    <img alt="Illustration: Amina and her family at the new borehole in Lokichar"
                        class="h-full min-h-72 w-full object-cover" height="900" loading="lazy"
                        src="assets/img/story-amina.svg" width="1200" />
                    <div class="p-8 sm:p-12 lg:p-14">
                        <p class="eyebrow">
                            Story spotlight · Lokichar, Kenya
                        </p>
                        <h2 class="mt-5 text-[clamp(1.8rem,3.4vw,2.6rem)] leading-tight font-semibold text-sea-900">
                            The well that brought Amina back to school
                        </h2>
                        <blockquote class="mt-6 border-l-4 border-sun-400 pl-5 font-display text-xl text-sea-800 italic">
                            “Now I walk to school, not to the river. I want to be an engineer and build wells like this
                            one.”
                        </blockquote>
                        <p class="mt-4 text-sm font-semibold text-muted">
                            Amina, 13
                        </p>
                        <a class="btn btn-sea mt-8" href="story.html">
                            Read Amina's story
                            <svg aria-hidden="true" class="size-4" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
            <section class="wrap pt-28">
                <div class="reveal relative overflow-hidden rounded-[2.2rem] bg-sea-900 p-8 text-white sm:p-14">
                    <div aria-hidden="true" class="absolute -top-32 -right-24 size-96 rounded-full bg-sea-500/30 blur-3xl">
                    </div>
                    <div class="relative grid gap-10 lg:grid-cols-[1.3fr_1fr] lg:items-end">
                        <div>
                            <p class="text-sm font-bold tracking-wider text-sun-300 uppercase">
                                Dry Season Appeal 2026
                            </p>
                            <h2 class="mt-4 text-[clamp(2rem,4vw,3rem)] leading-tight font-semibold">
                                Help us reach 40 villages before the rains fail.
                            </h2>
                            <div class="mt-10" data-campaign="" data-goal="750000" data-raised="528400">
                                <div class="flex flex-wrap items-end justify-between gap-2">
                                    <p class="font-display text-4xl font-semibold">
                                        $
                                        <span data-raised-text="">
                                            528,400
                                        </span>
                                    </p>
                                    <p class="text-white/70">
                                        of $
                                        <span data-goal-text="">
                                            750,000
                                        </span>
                                        goal
                                    </p>
                                </div>
                                <div aria-label="Appeal progress" aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                    class="progress mt-4" role="progressbar">
                                    <div class="progress-bar" data-progress="">
                                    </div>
                                </div>
                                <dl class="mt-5 flex flex-wrap gap-x-10 gap-y-3 text-sm text-white/75">
                                    <div>
                                        <dt class="inline">
                                            Donors
                                        </dt>
                                        <dd class="inline font-semibold text-white">
                                            2,315
                                        </dd>
                                    </div>
                                    <div>
                                        <dt class="inline">
                                            Days left
                                        </dt>
                                        <dd class="inline font-semibold text-white">
                                            18
                                        </dd>
                                    </div>
                                    <div>
                                        <dt class="inline">
                                            Matched by
                                        </dt>
                                        <dd class="inline font-semibold text-white">
                                            The Halden Fund
                                        </dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <div class="rounded-[1.5rem] bg-white/10 p-6 backdrop-blur">
                            <p class="text-white/80">
                                Every gift to the appeal is
                                <strong class="text-sun-300">
                                    doubled
                                </strong>
                                until we hit our goal.
                            </p>
                            <a class="btn btn-donate btn-lg mt-5 w-full" href="donate.html?appeal=dry-season">
                                Double my gift
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="wrap pt-24">
                <p class="reveal text-center text-sm font-semibold tracking-wider text-muted uppercase">
                    With thanks to our partners
                </p>
                <div class="reveal mt-8 flex flex-wrap items-center justify-center gap-x-12 gap-y-6">
                    <span class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-muted">
                        <svg aria-hidden="true" class="size-7" viewbox="0 0 24 24">
                            <path d="M2 9 q5 -5 10 0 t10 0 M2 16 q5 -5 10 0 t10 0" fill="none" stroke="#1a8a81"
                                stroke-linecap="round" stroke-width="3">
                            </path>
                        </svg>
                        Northwind
                    </span>
                    <span class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-muted">
                        <svg aria-hidden="true" class="size-7" viewbox="0 0 24 24">
                            <path d="M4 20 C4 8 12 4 20 4 C20 14 14 20 4 20 Z" fill="#5b6b68">
                            </path>
                        </svg>
                        Halden Fund
                    </span>
                    <span class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-muted">
                        <svg aria-hidden="true" class="size-7" viewbox="0 0 24 24">
                            <circle cx="12" cy="12" fill="#e8962a" r="5">
                            </circle>
                            <path d="M12 1v4M12 19v4M1 12h4M19 12h4M4 4l3 3M17 17l3 3M4 20l3-3M17 7l3-3" stroke="#e8962a"
                                stroke-width="2">
                            </path>
                        </svg>
                        Solace
                    </span>
                    <span class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-muted">
                        <svg aria-hidden="true" class="size-7" viewbox="0 0 24 24">
                            <circle cx="12" cy="12" fill="none" r="8" stroke="#0d5955" stroke-width="4">
                            </circle>
                        </svg>
                        Meridian
                    </span>
                    <span class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-muted">
                        <svg aria-hidden="true" class="size-7" viewbox="0 0 24 24">
                            <path d="M12 2 C12 2 4 11 4 15.5 A8 8 0 0 0 20 15.5 C20 11 12 2 12 2 Z" fill="#36a59b">
                            </path>
                        </svg>
                        Aquila
                    </span>
                    <span class="flex items-center gap-2.5 text-lg font-bold tracking-tight text-muted">
                        <svg aria-hidden="true" class="size-7" viewbox="0 0 24 24">
                            <path d="M12 2 21 7v10l-9 5-9-5V7Z" fill="#d96c4a">
                            </path>
                        </svg>
                        Brightlane
                    </span>
                </div>
            </section>
            <section class="wrap pt-28">
                <div class="reveal card grid gap-8 p-8 sm:p-12 lg:grid-cols-2 lg:items-center">
                    <div>
                        <h2 class="text-3xl font-semibold text-sea-900">
                            Stories from the field, once a month
                        </h2>
                        <p class="mt-3 text-muted">
                            Photos, updates and the occasional good-news surprise from the communities you support. No spam,
                            ever.
                        </p>
                    </div>
                    <form data-success-text="Thanks for subscribing! Your first field note arrives next month."
                        data-validate="" novalidate="">
                        <!-- Demo form: connect it to your email provider in assets/js/main.js. -->
                        <div class="grid gap-3 sm:grid-cols-[1fr_1fr_auto] sm:items-start">
                            <div>
                                <label class="sr-only" for="nl-name">
                                    First name
                                </label>
                                <input autocomplete="given-name" class="field" id="nl-name" name="name"
                                    placeholder="First name" required="" />
                            </div>
                            <div>
                                <label class="sr-only" for="nl-email">
                                    Email address
                                </label>
                                <input autocomplete="email" class="field" id="nl-email" name="email"
                                    placeholder="Email address" required="" type="email" />
                            </div>
                            <button class="btn btn-sea h-[3.15rem]" type="submit">
                                Sign up
                            </button>
                        </div>
                        <p class="mt-4 hidden rounded-xl bg-sea-50 p-4 text-sm text-sea-800" data-success="" role="status">
                        </p>
                    </form>
                </div>
            </section>
        </main>
        <footer class="relative mt-28 overflow-hidden bg-sea-900 text-white">
            <svg aria-hidden="true" class="absolute inset-x-0 top-0 h-10 w-full text-cream" preserveaspectratio="none"
                viewbox="0 0 1200 40">
                <path d="M0 0h1200v12c-150 24-300 24-450 6S450-6 300 10 75 30 0 18Z" fill="currentColor">
                </path>
            </svg>
            <div class="wrap grid gap-12 pt-24 pb-14 md:grid-cols-2 lg:grid-cols-[1.5fr_1fr_1fr_1.6fr]">
                <div>
                    <a class="flex items-center gap-2.5 font-display text-xl font-semibold" href="index.html">
                        <svg aria-hidden="true" class="size-9 shrink-0" viewbox="0 0 40 40">
                            <circle cx="20" cy="20" fill="#0d5955" r="20">
                            </circle>
                            <circle cx="27" cy="13" fill="#f2b04a" r="5">
                            </circle>
                            <path d="M18 9s-8 9.5-8 15a8 8 0 0 0 16 0c0-5.5-8-15-8-15Z" fill="#6cc4bb">
                            </path>
                            <path d="M14.5 25a3.6 3.6 0 0 0 3.5 3.5" fill="none" stroke="#fff" stroke-linecap="round"
                                stroke-width="2">
                            </path>
                        </svg>
                        Clearwater Trust
                    </a>
                    <p class="mt-4 max-w-xs text-white/70">
                        Safe water, for good. Working alongside communities in nine countries since 2009.
                    </p>
                    <p class="mt-6 text-sm text-white/55">
                        418 Washington Ave N, Minneapolis, MN 55401
                        <br />
                        hello@example.org · (612) 555-0142
                    </p>
                </div>
                <div>
                    <h2 class="text-sm font-bold tracking-wider text-sun-300 uppercase">
                        Our work
                    </h2>
                    <ul class="mt-4 grid gap-2.5">
                        <li>
                            <a class="footer-link" href="programs.html">
                                Programs
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="stories.html">
                                Stories
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="about.html#finances">
                                Where money goes
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="about.html">
                                About us
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-sm font-bold tracking-wider text-sun-300 uppercase">
                        Take part
                    </h2>
                    <ul class="mt-4 grid gap-2.5">
                        <li>
                            <a class="footer-link" href="donate.html">
                                Donate
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="get-involved.html">
                                Volunteer
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="get-involved.html#fundraise">
                                Fundraise
                            </a>
                        </li>
                        <li>
                            <a class="footer-link" href="events.html">
                                Events
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-sm font-bold tracking-wider text-sun-300 uppercase">
                        Field notes, monthly
                    </h2>
                    <p class="mt-4 text-white/70">
                        One email a month with stories from the communities you support.
                    </p>
                    <form class="mt-4" data-success-text="You're subscribed. Look out for our next field note."
                        data-validate="" novalidate="">
                        <!-- Demo form: connect it to your email provider in assets/js/main.js. -->
                        <div class="flex flex-col gap-2 sm:flex-row">
                            <div class="min-w-0 flex-1">
                                <label class="sr-only" for="footer-email">
                                    Email address
                                </label>
                                <input autocomplete="email"
                                    class="field border-white/20! bg-white/10! text-white! placeholder:text-white/50"
                                    id="footer-email" name="email" placeholder="you@example.com" required="" type="email" />
                            </div>
                            <button class="btn btn-donate shrink-0" type="submit">
                                Subscribe
                            </button>
                        </div>
                        <p class="mt-3 hidden rounded-xl bg-white/10 p-3 text-sm" data-success="" role="status">
                        </p>
                    </form>
                </div>
            </div>
            <div
                class="wrap flex flex-wrap items-center justify-between gap-4 border-t border-white/10 py-7 text-sm text-white/55">
                <p>
                    ©
                    <span data-year="">
                        2026
                    </span>
                    Clearwater Trust. Registered 501(c)(3) nonprofit, EIN 00-0000000.
                </p>
                <ul class="flex flex-wrap gap-5">
                    <li>
                        <a class="footer-link" href="about.html#finances">
                            Financials
                        </a>
                    </li>
                    <li>
                        <a class="footer-link" href="get-involved.html#partners">
                            Partnerships
                        </a>
                    </li>
                    <li>
                        <a class="footer-link" href="donate.html#faq">
                            Donor FAQ
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        <script src="assets/js/main.js">
        </script>
    </body>


@endsection


