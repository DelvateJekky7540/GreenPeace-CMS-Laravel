@extends('templates.public')

@section('title', 'Tentang ')

@section('content')

<main id="main">

    <section class="wrap grid items-center gap-12 pt-14 pb-16 sm:pt-20 lg:grid-cols-12">
        <div class="lg:col-span-7">
            <p class="eyebrow reveal">About us</p>
            <h1 class="reveal mt-5 text-[clamp(2.5rem,6vw,4.4rem)] leading-[1.03] font-semibold text-sea-900"
                style="--d:80ms">We believe water is a right, and that lasting change is led locally.</h1>
            <p class="lead reveal mt-6 max-w-2xl" style="--d:160ms">Greenpeace ada karena bumi yang rapuh ini butuh suara. Kami adalah organisasi lingkungan global yang didedikasikan untuk bersama-sama melindungi masa depan bumi, manusia dan keanekaragaman di dalamnya.</p>
        </div>
        <div class="reveal relative overflow-hidden rounded-[2rem] shadow-[0_40px_80px_-40px_rgb(11_52_51/.55)] lg:col-span-5"
            style="--d:150ms">
            <img src="assets/img/about.svg" alt="" class="aspect-[4/3] w-full object-cover" width="1200" height="1200"></div>
    </section>
    <section class="wrap grid gap-6 md:grid-cols-2">
        <div class="reveal rounded-[2rem] bg-sea-800 p-9 text-white sm:p-12">
            <p class="text-sm font-bold tracking-wider text-sun-300 uppercase">Our mission</p>
            <p class="mt-4 font-display text-2xl leading-snug sm:text-3xl">To bring safe, lasting water to rural
                communities by backing the people who live there.</p>
        </div>
        <div class="reveal rounded-[2rem] bg-sun-100 p-9 sm:p-12" style="--d:100ms">
            <p class="text-sm font-bold tracking-wider text-sun-600 uppercase">Our vision</p>
            <p class="mt-4 font-display text-2xl leading-snug text-sea-900 sm:text-3xl">A world where no child walks
                hours for water, and every tap keeps running.</p>
        </div>
    </section>

    <section class="wrap grid gap-14 pt-28 lg:grid-cols-[1fr_1.4fr]">
        <div>
            <p class="eyebrow reveal">Our story</p>
            <h2 class="section-title reveal mt-4 text-sea-900">Seventeen years, one village at a time</h2>
            <p class="lead reveal mt-5">What started with one broken pump has grown into a network of partners,
                mechanics and committees, but the approach hasn't changed.</p>
        </div>
        <ol class="relative before:absolute before:top-2 before:bottom-2 before:left-[9px] before:w-0.5 before:bg-line">
            <li class="reveal relative pb-12 pl-10 last:pb-0" style="--d:0ms">
                <span
                    class="absolute top-1 left-0 grid size-5 place-items-center rounded-full bg-sun-400 ring-4 ring-cream"></span>
                <p class="font-display text-2xl font-semibold text-sea-600">2009</p>
                <h3 class="mt-1 text-xl font-semibold text-sea-900">A borehole and a promise</h3>
                <p class="mt-2 max-w-xl text-muted">Founded in Minneapolis after co-founder Grace Wanjiru's home village
                    in Kenya asked for help fixing a broken well.</p>
            </li>
            <li class="reveal relative pb-12 pl-10 last:pb-0" style="--d:60ms">
                <span
                    class="absolute top-1 left-0 grid size-5 place-items-center rounded-full bg-sun-400 ring-4 ring-cream"></span>
                <p class="font-display text-2xl font-semibold text-sea-600">2012</p>
                <h3 class="mt-1 text-xl font-semibold text-sea-900">Community committees</h3>
                <p class="mt-2 max-w-xl text-muted">We make village water committees a condition of every project.
                    Breakdowns fall by two thirds.</p>
            </li>
            <li class="reveal relative pb-12 pl-10 last:pb-0" style="--d:120ms">
                <span
                    class="absolute top-1 left-0 grid size-5 place-items-center rounded-full bg-sun-400 ring-4 ring-cream"></span>
                <p class="font-display text-2xl font-semibold text-sea-600">2015</p>
                <h3 class="mt-1 text-xl font-semibold text-sea-900">First schools in Nepal</h3>
                <p class="mt-2 max-w-xl text-muted">After the earthquake, we help 40 schools rebuild with rainwater
                    harvesting built in.</p>
            </li>
            <li class="reveal relative pb-12 pl-10 last:pb-0" style="--d:180ms">
                <span
                    class="absolute top-1 left-0 grid size-5 place-items-center rounded-full bg-sun-400 ring-4 ring-cream"></span>
                <p class="font-display text-2xl font-semibold text-sea-600">2019</p>
                <h3 class="mt-1 text-xl font-semibold text-sea-900">Sensors on every pump</h3>
                <p class="mt-2 max-w-xl text-muted">Remote sensors flag breakdowns in hours. Repairs now average 3 days.
                </p>
            </li>
            <li class="reveal relative pb-12 pl-10 last:pb-0" style="--d:240ms">
                <span
                    class="absolute top-1 left-0 grid size-5 place-items-center rounded-full bg-sun-400 ring-4 ring-cream"></span>
                <p class="font-display text-2xl font-semibold text-sea-600">2023</p>
                <h3 class="mt-1 text-xl font-semibold text-sea-900">One million people</h3>
                <p class="mt-2 max-w-xl text-muted">Our partners reach the one-millionth person with safe, lasting
                    water.</p>
            </li>
            <li class="reveal relative pb-12 pl-10 last:pb-0" style="--d:300ms">
                <span
                    class="absolute top-1 left-0 grid size-5 place-items-center rounded-full bg-sun-400 ring-4 ring-cream"></span>
                <p class="font-display text-2xl font-semibold text-sea-600">2026</p>
                <h3 class="mt-1 text-xl font-semibold text-sea-900">Mechanics cooperatives</h3>
                <p class="mt-2 max-w-xl text-muted">312 trained mechanics now run their own repair businesses across
                    East Africa.</p>
            </li>
        </ol>
    </section>

    <section class="wrap pt-28">
        <p class="eyebrow reveal">Leadership</p>
        <h2 class="section-title reveal mt-4 text-sea-900">The people behind the work</h2>
        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            <div class="reveal" style="--d:0ms">
                <div class="overflow-hidden rounded-[1.6rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 160 160" class="aspect-square h-auto w-full" aria-hidden="true">
                        <rect width="160" height="160" fill="#fbe1d6" />
                        <path d="M24 160 Q28 116 80 112 Q132 116 136 160 Z" fill="#1a8a81" />
                        <rect x="70" y="92" width="20" height="24" rx="8" fill="#9a6340" />
                        <ellipse cx="80" cy="74" rx="27" ry="31" fill="#9a6340" />
                        <path d="M48 70 Q50 34 80 32 Q110 34 112 70 Q104 52 80 50 Q58 52 48 70 Z" fill="#1f140d" />
                        <circle cx="70" cy="76" r="2.6" fill="#1a1410" />
                        <circle cx="90" cy="76" r="2.6" fill="#1a1410" />
                        <path d="M72 90 Q80 96 88 90" stroke="#1a1410" stroke-width="2.4" fill="none"
                            stroke-linecap="round" /></svg></div>
                <h3 class="mt-4 text-lg font-semibold text-sea-900">Grace Wanjiru</h3>
                <p class="text-muted">Program Director</p>
            </div>
            <div class="reveal" style="--d:80ms">
                <div class="overflow-hidden rounded-[1.6rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 160 160" class="aspect-square h-auto w-full" aria-hidden="true">
                        <rect width="160" height="160" fill="#d2eeeb" />
                        <path d="M24 160 Q28 116 80 112 Q132 116 136 160 Z" fill="#f7c873" />
                        <rect x="70" y="92" width="20" height="24" rx="8" fill="#5c341b" />
                        <ellipse cx="80" cy="74" rx="27" ry="31" fill="#5c341b" />
                        <path d="M50 62 Q52 36 80 36 Q108 36 110 62 Q80 46 50 62 Z" fill="#f2b04a" />
                        <circle cx="70" cy="76" r="2.6" fill="#1a1410" />
                        <circle cx="90" cy="76" r="2.6" fill="#1a1410" />
                        <path d="M72 90 Q80 96 88 90" stroke="#1a1410" stroke-width="2.4" fill="none"
                            stroke-linecap="round" /></svg></div>
                <h3 class="mt-4 text-lg font-semibold text-sea-900">Daniel Okello</h3>
                <p class="text-muted">Chief Executive</p>
            </div>
            <div class="reveal" style="--d:160ms">
                <div class="overflow-hidden rounded-[1.6rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 160 160" class="aspect-square h-auto w-full" aria-hidden="true">
                        <rect width="160" height="160" fill="#f3ebdd" />
                        <path d="M24 160 Q28 116 80 112 Q132 116 136 160 Z" fill="#e98a6b" />
                        <rect x="70" y="92" width="20" height="24" rx="8" fill="#b97d4f" />
                        <ellipse cx="80" cy="74" rx="27" ry="31" fill="#b97d4f" />
                        <path d="M50 62 Q52 36 80 36 Q108 36 110 62 Q80 46 50 62 Z" fill="#d96c4a" />
                        <circle cx="70" cy="76" r="2.6" fill="#1a1410" />
                        <circle cx="90" cy="76" r="2.6" fill="#1a1410" />
                        <path d="M72 90 Q80 96 88 90" stroke="#1a1410" stroke-width="2.4" fill="none"
                            stroke-linecap="round" /></svg></div>
                <h3 class="mt-4 text-lg font-semibold text-sea-900">Priya Shrestha</h3>
                <p class="text-muted">Head of Partnerships</p>
            </div>
            <div class="reveal" style="--d:240ms">
                <div class="overflow-hidden rounded-[1.6rem]"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 160 160" class="aspect-square h-auto w-full" aria-hidden="true">
                        <rect width="160" height="160" fill="#fbe1d6" />
                        <path d="M24 160 Q28 116 80 112 Q132 116 136 160 Z" fill="#c9771a" />
                        <rect x="70" y="92" width="20" height="24" rx="8" fill="#5c341b" />
                        <ellipse cx="80" cy="74" rx="27" ry="31" fill="#5c341b" />
                        <path d="M50 62 Q52 36 80 36 Q108 36 110 62 Q80 46 50 62 Z" fill="#0d5955" />
                        <circle cx="70" cy="76" r="2.6" fill="#1a1410" />
                        <circle cx="90" cy="76" r="2.6" fill="#1a1410" />
                        <path d="M72 90 Q80 96 88 90" stroke="#1a1410" stroke-width="2.4" fill="none"
                            stroke-linecap="round" /></svg></div>
                <h3 class="mt-4 text-lg font-semibold text-sea-900">Lucía Mamani</h3>
                <p class="text-muted">Field Lead, Bolivia</p>
            </div>
        </div>
        <div class="reveal mt-14 grid gap-8 rounded-[2rem] bg-white p-8 sm:p-10 lg:grid-cols-[1fr_2fr]">
            <div>
                <h3 class="text-2xl font-semibold text-sea-900">Board of directors</h3>
                <p class="mt-3 text-muted">Our volunteer board meets quarterly and publishes its minutes. Two seats are
                    held by community representatives from partner countries.</p>
            </div>
            <ul class="grid gap-x-8 sm:grid-cols-2">
                <li class="flex items-center gap-3 border-b border-line py-3"><svg class="size-5 text-sea-500"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="8" r="3.5" />
                        <path d="M2.5 20a6.5 6.5 0 0 1 13 0" />
                        <path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14a6 6 0 0 1 3.5 6" /></svg>Helen Abara, Chair</li>
                <li class="flex items-center gap-3 border-b border-line py-3"><svg class="size-5 text-sea-500"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="8" r="3.5" />
                        <path d="M2.5 20a6.5 6.5 0 0 1 13 0" />
                        <path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14a6 6 0 0 1 3.5 6" /></svg>Martin Kessler, Treasurer</li>
                <li class="flex items-center gap-3 border-b border-line py-3"><svg class="size-5 text-sea-500"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="8" r="3.5" />
                        <path d="M2.5 20a6.5 6.5 0 0 1 13 0" />
                        <path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14a6 6 0 0 1 3.5 6" /></svg>Dr. Ayesha Rahman</li>
                <li class="flex items-center gap-3 border-b border-line py-3"><svg class="size-5 text-sea-500"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="8" r="3.5" />
                        <path d="M2.5 20a6.5 6.5 0 0 1 13 0" />
                        <path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14a6 6 0 0 1 3.5 6" /></svg>Joseph Mwangi</li>
                <li class="flex items-center gap-3 border-b border-line py-3"><svg class="size-5 text-sea-500"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="8" r="3.5" />
                        <path d="M2.5 20a6.5 6.5 0 0 1 13 0" />
                        <path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14a6 6 0 0 1 3.5 6" /></svg>Carmen Vidal</li>
                <li class="flex items-center gap-3 border-b border-line py-3"><svg class="size-5 text-sea-500"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round" aria-hidden="true">
                        <circle cx="9" cy="8" r="3.5" />
                        <path d="M2.5 20a6.5 6.5 0 0 1 13 0" />
                        <path d="M16 4.5a3.5 3.5 0 0 1 0 7M18 14a6 6 0 0 1 3.5 6" /></svg>Tom Hargreaves</li>
            </ul>
        </div>
    </section>

    <section id="finances" class="wrap scroll-mt-24 pt-28">
        <div class="grid items-center gap-14 lg:grid-cols-2">
            <div>
                <p class="eyebrow reveal">Financial transparency</p>
                <h2 class="section-title reveal mt-4 text-sea-900">Where your money goes</h2>
                <p class="lead reveal mt-5">In 2025 we raised $18.6 million. Our accounts are independently audited
                    every year, and every project is published with its cost and GPS location.</p>
                <ul class="reveal mt-8">
                    <li class="flex items-center justify-between gap-4 border-b border-line py-3"><span
                            class="flex items-center gap-3"><span class="size-3.5 rounded-full"
                                style="background:#1a8a81"></span>Programs in the field</span><strong>84%</strong></li>
                    <li class="flex items-center justify-between gap-4 border-b border-line py-3"><span
                            class="flex items-center gap-3"><span class="size-3.5 rounded-full"
                                style="background:#f2b04a"></span>Fundraising</span><strong>10%</strong></li>
                    <li class="flex items-center justify-between gap-4 border-b border-line py-3"><span
                            class="flex items-center gap-3"><span class="size-3.5 rounded-full"
                                style="background:#d96c4a"></span>Management & admin</span><strong>6%</strong></li>
                </ul>
                <div class="reveal mt-8 flex flex-wrap gap-3 text-sm">
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-sea-50 px-4 py-2 font-semibold text-sea-700"><svg
                            class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m5 12 5 5 9-10" /></svg>Independently audited</span>
                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-sea-50 px-4 py-2 font-semibold text-sea-700"><svg
                            class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m5 12 5 5 9-10" /></svg>Top-rated for transparency</span>
                </div>
            </div>
            <div class="reveal card p-8 sm:p-12"><svg viewBox="0 0 180 180" class="mx-auto w-full max-w-[17rem]"
                    role="img" aria-labelledby="donut-title">
                    <title id="donut-title">How we spent each dollar in 2025: Programs in the field 84%, Fundraising
                        10%, Management & admin 6%</title>
                    <circle cx="90" cy="90" r="70" fill="none" stroke="#1a8a81" stroke-width="28"
                        stroke-dasharray="367.45 72.37" stroke-dashoffset="0.00" transform="rotate(-90 90 90)">
                        <title>Programs in the field: 84%</title>
                    </circle>
                    <circle cx="90" cy="90" r="70" fill="none" stroke="#f2b04a" stroke-width="28"
                        stroke-dasharray="41.98 397.84" stroke-dashoffset="-369.45" transform="rotate(-90 90 90)">
                        <title>Fundraising: 10%</title>
                    </circle>
                    <circle cx="90" cy="90" r="70" fill="none" stroke="#d96c4a" stroke-width="28"
                        stroke-dasharray="24.39 415.43" stroke-dashoffset="-413.43" transform="rotate(-90 90 90)">
                        <title>Management & admin: 6%</title>
                    </circle><text x="90" y="86" text-anchor="middle" font-family="Fraunces, Georgia, serif"
                        font-size="30" font-weight="600" fill="#0b3433">84¢</text><text x="90" y="106"
                        text-anchor="middle" font-family="DM Sans, sans-serif" font-size="10" fill="#5b6b68">of every
                        dollar</text>
                </svg>
                <dl class="mt-10 grid grid-cols-2 gap-6 border-t border-line pt-8 text-center">
                    <div>
                        <dt class="text-sm text-muted">Total income 2025</dt>
                        <dd class="mt-1 font-display text-3xl font-semibold text-sea-900">$18.6M</dd>
                    </div>
                    <div>
                        <dt class="text-sm text-muted">Cost to raise $1</dt>
                        <dd class="mt-1 font-display text-3xl font-semibold text-sea-900">$0.12</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section class="wrap mt-28">
        <div
            class="reveal relative overflow-hidden rounded-[2.2rem] bg-sea-800 px-7 py-14 text-white sm:px-14 sm:py-16">
            <img src="assets/img/cta.svg" alt=""
                class="absolute inset-0 size-full object-cover object-bottom opacity-70" width="1200" height="500"
                loading="lazy">
            <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-r from-sea-900 via-sea-900/85 to-sea-900/30">
            </div>
            <div class="relative grid items-center gap-8 lg:grid-cols-[1.5fr_1fr]">
                <div>
                    <h2 class="text-[clamp(2rem,4.5vw,3.2rem)] leading-tight font-semibold">Every $50 is a year of clean
                        water for a family.</h2>
                    <p class="mt-4 max-w-xl text-lg text-white/80">Give once or monthly. 84 cents of every dollar goes
                        straight to the field.</p>
                </div>
                <div class="flex flex-wrap gap-3 lg:justify-end">
                    <a href="donate.html" class="btn btn-donate btn-lg"><svg class="size-5" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                            stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10Z" /></svg>Donate
                        now</a>
                    <a href="get-involved.html" class="btn btn-light btn-lg">Get involved</a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
