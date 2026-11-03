@extends('templates.admin')

@section('title', 'Profil Saya')

@section('content')
    @php
        $user = auth()->user();
        $name = $user->name ?? 'Pengguna';
        $username = $user->username ?? '-';
        $role = $user ? ucfirst($user->role) : '-';
        $initial = strtoupper(mb_substr($name, 0, 1));
        $registeredAt = $user?->created_at?->format('d M Y') ?? '-';
    @endphp

    <x-common.page-breadcrumb pageTitle="Profil Saya" />

    <div class="rounded-2xl border border-gray-200 bg-white p-5 lg:p-6 dark:border-gray-800 dark:bg-white/[0.03]">
        <h3 class="mb-5 text-lg font-semibold text-gray-800 lg:mb-7 dark:text-white/90">
            Profil Saya
        </h3>

        <!-- Info -->
        <div class="mb-6 rounded-2xl border border-gray-200 p-5 lg:p-6 dark:border-gray-800">
            <div class="flex flex-col gap-5 sm:flex-row sm:items-center xl:gap-10">
                <div class="flex w-full flex-col items-start gap-6 sm:flex-row sm:items-center">
                    <div
                        class="flex size-20 shrink-0 items-center justify-center overflow-hidden rounded-full border border-gray-200 bg-brand-500 text-3xl font-semibold text-white dark:border-gray-800">
                        {{ $initial }}
                    </div>
                    <div class="text-start">
                        <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white/90">
                            {{ $name }}
                        </h4>
                        <div class="flex items-center gap-1 sm:gap-3">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                {{ $role }}
                            </p>
                            <div class="hidden h-3.5 w-px bg-gray-300 sm:block dark:bg-gray-700"></div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                &#64;{{ $username }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-8 grid max-w-4xl grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4 xl:gap-x-11 xl:gap-y-7">
                <div class="w-full">
                    <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                        Nama Lengkap
                    </p>
                    <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                        {{ $name }}
                    </p>
                </div>
                <div class="w-full">
                    <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                        Username
                    </p>
                    <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                        {{ $username }}
                    </p>
                </div>
                <div class="w-full">
                    <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                        Role
                    </p>
                    <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                        {{ $role }}
                    </p>
                </div>
                <div class="w-full">
                    <p class="mb-2 text-xs leading-normal text-gray-500 dark:text-gray-400">
                        Terdaftar
                    </p>
                    <p class="text-sm font-medium text-gray-800 dark:text-white/90">
                        {{ $registeredAt }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Keamanan -->
        <div class="mb-6 rounded-2xl border border-gray-200 p-5 lg:p-6 dark:border-gray-800">
            <h4 class="text-lg font-semibold text-gray-800 lg:mb-6 dark:text-white/90">
                Keamanan
            </h4>
            <div>
                <div
                    class="flex flex-col justify-between gap-4 border-b border-gray-200 py-4 first:pt-0 last:border-b-0 last:pb-0 sm:flex-row sm:items-end dark:border-gray-800">
                    <div>
                        <span class="mb-1 block text-base font-medium text-gray-800 dark:text-white/90">Ubah Password</span>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Fitur ubah password belum tersedia.
                        </p>
                    </div>
                    <div>
                        <button type="button" disabled
                            class="shadow-theme-xs flex h-10 cursor-not-allowed items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white py-2.5 pr-4 pl-3.5 text-sm font-medium text-gray-400 opacity-70 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-500">
                            <i class="bi bi-lock"></i>
                            Ubah Password
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Zona Berbahaya -->
        <div class="rounded-2xl border border-gray-200 p-5 lg:p-6 dark:border-gray-800">
            <h4 class="text-lg font-semibold text-gray-800 lg:mb-6 dark:text-white/90">
                Zona Berbahaya
            </h4>
            <div>
                <div class="flex flex-col justify-between gap-4 py-4 first:pt-0 last:pb-0 sm:flex-row sm:items-end">
                    <div>
                        <span class="mb-1 block text-base font-medium text-gray-800 dark:text-white/90">Keluar dari Akun</span>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Akhiri sesi Anda di perangkat ini.
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('logout') }}"
                            class="shadow-theme-xs flex h-10 items-center justify-center gap-2 rounded-lg border border-gray-300 bg-white py-2.5 pr-4 pl-3.5 text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/3 dark:hover:text-gray-200">
                            <i class="bi bi-box-arrow-right"></i>
                            Keluar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
