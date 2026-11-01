<header class="site-header fixed top-0 w-full z-50 transition-[background-color,box-shadow,backdrop-filter] duration-300">
    <div class="wrap flex h-[4.5rem] items-center gap-8">
        <a href="/" class="flex shrink-0 items-center" aria-label="Greenpeace home">
            <img src="{{ asset('assets/gp-logo.svg') }}" alt="Greenpeace Logo" class="site-logo h-9 w-auto sm:h-10" width="160" height="40">
        </a>

        <nav aria-label="Main" class="ml-auto hidden lg:block">
            <ul class="flex items-center gap-7 text-[0.95rem]">
                <li>
                    <a class="nav-link" href="programs.html">Tentang Kami</a>
                </li>
                <li>
                    <a class="nav-link" href="stories.html">Fokus Kerja</a>
                </li>
                <li>
                    <a class="nav-link" href="about.html">Mari Beraksi</a>
                </li>
                <li>
                    <a class="nav-link" href="get-involved.html">Kabar Terbaru</a>
                </li>
                <li>
                    <a class="nav-link" href="events.html">Events</a>
                </li>
            </ul>
        </nav>

        <div class="ml-auto flex items-center gap-2 lg:ml-0">
            <a class="btn btn-donate px-4! sm:px-[1.35rem]!" href="donate.html">
                <svg aria-hidden="true" class="hidden size-4 sm:block" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                    <path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10Z">
                    </path>
                </svg>
                Donasi
            </a>
            <button aria-controls="mobile-menu" aria-expanded="false" aria-label="Open menu"
                class="grid size-11 place-items-center rounded-full text-sea-900 hover:bg-sand lg:hidden"
                data-menu-toggle="" type="button">
                <svg aria-hidden="true" class="size-6" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-width="2" viewbox="0 0 24 24">
                    <path d="M4 7h16M4 12h16M4 17h16" data-open="">
                    </path>
                    <path class="hidden" d="M6 6l12 12M18 6 6 18" data-close="">
                    </path>
                </svg>
            </button>
        </div>
    </div>
    <div class="border-t border-line bg-cream lg:hidden" hidden="" id="mobile-menu">
        <nav aria-label="Mobile" class="wrap py-4">
            <ul class="grid gap-1">
                <li>
                    <a class="flex items-center justify-between rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand"
                        href="programs.html">
                        Tentang Kami
                        <svg aria-hidden="true" class="size-5 text-muted" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="flex items-center justify-between rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand"
                        href="stories.html">
                        Fokus Kerja
                        <svg aria-hidden="true" class="size-5 text-muted" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="flex items-center justify-between rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand"
                        href="about.html">
                        Mari Beraksi
                        <svg aria-hidden="true" class="size-5 text-muted" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="flex items-center justify-between rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand"
                        href="getKabar Terbaru.html">
                        Kabar Terbaru
                        <svg aria-hidden="true" class="size-5 text-muted" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="flex items-center justify-between rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand"
                        href="events.html">
                        Events
                        <svg aria-hidden="true" class="size-5 text-muted" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>