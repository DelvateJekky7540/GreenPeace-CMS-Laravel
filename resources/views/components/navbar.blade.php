<header class="site-header fixed top-0 w-full z-50 transition-[background-color,box-shadow,backdrop-filter] duration-300" 
        x-data="{ mobileMenuOpen: false, activeMobile: null }" 
        @click.away="mobileMenuOpen = false">
    
    <div class="wrap flex h-[4.5rem] items-center gap-8">
        <a href="/" class="flex shrink-0 items-center transition-opacity hover:opacity-80" aria-label="Greenpeace home">
            <img src="{{ asset('assets/gp-logo.svg') }}" alt="Greenpeace Logo" class="site-logo h-6 w-auto md:h-8 lg:h-9">
        </a>

        <!-- DESKTOP NAVIGATION -->
        <nav aria-label="Main" class="ml-auto hidden lg:block">
            <ul class="flex items-center gap-7 text-[0.95rem]">
                
                <!-- DROPDOWN 1: TENTANG KAMI -->
                <li class="relative" 
                    x-data="{ open: false, timeout: null }" 
                    @mouseenter="clearTimeout(timeout); open = true" 
                    @mouseleave="timeout = setTimeout(() => { open = false }, 150)"
                    @click.away="open = false" 
                    @keydown.escape.window="open = false">
                    
                    <button @click="open = !open"  class="nav-link flex items-center gap-1 hover:text-forest-900 transition-colors focus:outline-none" :class="{ 'text-forest-900': open }" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
                        Tentang Kami
                        <svg class="size-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2" class="absolute left-0 mt-4 w-60 rounded-2xl bg-[#FAF6EF] p-2 shadow-xl border border-black/5 z-50" x-cloak>
                        <ul class="flex flex-col gap-1 text-sm">
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Tentang Greenpeace</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Misi</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Laporan Tahunan</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Pekerjaan</a></li>
                        </ul>
                    </div>
                </li>
                
                <!-- DROPDOWN 2: FOKUS KERJA -->
                <li class="relative" 
                    x-data="{ open: false, timeout: null }" 
                    @mouseenter="clearTimeout(timeout); open = true" 
                    @mouseleave="timeout = setTimeout(() => { open = false }, 150)"
                    @click.away="open = false" 
                    @keydown.escape.window="open = false">
                    
                    <button @click="open = !open" class="nav-link flex items-center gap-1 hover:text-forest-900 transition-colors focus:outline-none" :class="{ 'text-forest-900': open }" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
                        Fokus Kerja
                        <svg class="size-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2" class="absolute left-0 mt-4 w-60 rounded-2xl bg-[#FAF6EF] p-2 shadow-xl border border-black/5 z-50" x-cloak>
                        <ul class="flex flex-col gap-1 text-sm">
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Hutan</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Iklim dan Energi</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Laut</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Perkotaan</a></li>
                        </ul>
                    </div>
                </li>

                <!-- DROPDOWN 3: MARI BERAKSI -->
                <li class="relative" 
                    x-data="{ open: false, timeout: null }" 
                    @mouseenter="clearTimeout(timeout); open = true" 
                    @mouseleave="timeout = setTimeout(() => { open = false }, 150)"
                    @click.away="open = false" 
                    @keydown.escape.window="open = false">
                    
                    <button @click="open = !open" class="nav-link flex items-center gap-1 hover:text-forest-900 transition-colors focus:outline-none" :class="{ 'text-forest-900': open }" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'">
                        Mari Beraksi
                        <svg class="size-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2" class="absolute left-0 mt-4 w-60 rounded-2xl bg-[#FAF6EF] p-2 shadow-xl border border-black/5 z-50" x-cloak>
                        <ul class="flex flex-col gap-1 text-sm">
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Bergabung Relawan</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Kampanye</a></li>
                            <li><a href="#" class="block rounded-xl px-4 py-2.5 text-[#1A1A17] hover:bg-black/5 transition-colors">Petisi</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="nav-link" href="#">Kabar Terbaru</a>
                </li>
            </ul>
        </nav>

        <!-- ACTION BUTTONS (Donasi & Hamburger) -->
        <div class="ml-auto flex items-center gap-2 lg:ml-0">
            <a class="btn btn-donate px-4! sm:px-[1.35rem]!" href="#">
                <svg aria-hidden="true" class="hidden size-4 sm:block" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewbox="0 0 24 24">
                    <path d="M12 20s-7-4.4-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.6-7 10-7 10Z"></path>
                </svg>
                Donasi
            </a>
            
            <!-- TOMBOL HAMBURGER -->
            <button @click="mobileMenuOpen = !mobileMenuOpen; activeMobile = null;" 
                    aria-controls="mobile-menu" 
                    :aria-expanded="mobileMenuOpen ? 'true' : 'false'" 
                    aria-label="Toggle menu"
                    class="grid size-11 place-items-center rounded-full text-sea-900 hover:bg-sand lg:hidden"
                    type="button">
                <svg aria-hidden="true" class="size-6" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-width="2" viewbox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" d="M4 7h16M4 12h16M4 17h16"></path>
                    <path x-show="mobileMenuOpen" d="M6 6l12 12M18 6 6 18"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-400"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="border-t border-line bg-cream lg:hidden" 
        id="mobile-menu"
        x-cloak>
        
        <nav aria-label="Mobile" class="wrap py-4">
            <ul class="grid gap-1">
                <!-- 1. TENTANG KAMI -->
                <li>
                    <button @click="activeMobile = (activeMobile === 'tentang' ? null : 'tentang')" 
                            class="w-full flex items-center justify-between rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand focus:outline-none"
                            :class="{ 'bg-sand': activeMobile === 'tentang' }">
                        Tentang Kami
                        <svg class="size-5 text-muted transition-transform duration-200" :class="{ 'rotate-180': activeMobile === 'tentang' }" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul x-show="activeMobile === 'tentang'" x-collapse class="pl-4 pr-2 mt-1 space-y-1" x-cloak>
                        <li><a href="#" class="block rounded-xl px-4 py-2 text-base text-gray-700 hover:bg-black/5">Tentang Greenpeace</a></li>
                        <li><a href="#" class="block rounded-xl px-4 py-2 text-base text-gray-700 hover:bg-black/5">Misi</a></li>
                        <li><a href="#" class="block rounded-xl px-4 py-2 text-base text-gray-700 hover:bg-black/5">Laporan Tahunan</a></li>
                    </ul>
                </li>

                <!-- 2. FOKUS KERJA -->
                <li>
                    <button @click="activeMobile = (activeMobile === 'fokus' ? null : 'fokus')" 
                            class="w-full flex items-center justify-between rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand focus:outline-none"
                            :class="{ 'bg-sand': activeMobile === 'fokus' }">
                        Fokus Kerja
                        <svg class="size-5 text-muted transition-transform duration-200" :class="{ 'rotate-180': activeMobile === 'fokus' }" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul x-show="activeMobile === 'fokus'" x-collapse class="pl-4 pr-2 mt-1 space-y-1" x-cloak>
                        <li><a href="#" class="block rounded-xl px-4 py-2 text-base text-gray-700 hover:bg-black/5">Hutan</a></li>
                        <li><a href="#" class="block rounded-xl px-4 py-2 text-base text-gray-700 hover:bg-black/5">Iklim dan Energi</a></li>
                        <li><a href="#" class="block rounded-xl px-4 py-2 text-base text-gray-700 hover:bg-black/5">Laut</a></li>
                    </ul>
                </li>

                <!-- 3. KABAR TERBARU -->
                <li>
                    <a class="flex items-center rounded-2xl px-4 py-3.5 text-lg font-semibold hover:bg-sand" href="#">
                        Kabar Terbaru
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>