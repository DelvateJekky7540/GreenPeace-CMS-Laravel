@extends('templates.public')

@section('title', 'Tentang ')

@section('content')

<main id="main">

    <section class="wrap grid items-center gap-12 pt-14 pb-16 sm:pt-20 lg:grid-cols-12">
        <div class="lg:col-span-7">
            <p class="eyebrow reveal">About us</p>
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
</main>

@endsection
