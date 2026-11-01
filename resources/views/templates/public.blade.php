<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SMK Negeri 2 Karanganyar')</title>

    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <meta name="description" content="Clearwater Trust works with rural communities in nine countries to build safe, lasting water systems they own and run. Give clean water today.">
    <meta name="theme-color" content="#0d5955">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clearwater Trust">
    <meta property="og:title" content="Clearwater Trust — Safe water, for good">
    <meta property="og:description" content="Clearwater Trust works with rural communities in nine countries to build safe, lasting water systems they own and run. Give clean water today.">
    <meta property="og:image" content="assets/img/og-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>document.documentElement.classList.replace('no-js', 'js');</script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-blue-500">
    @include('components.navbar')

    <main class="">
        @yield('content')
        <a href="https://wa.me/6289510311813?text=Hi!%20Saya%20ingin%20begabung%20ke%20komunitas"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Chat via WhatsApp"
        class="fixed bottom-6 right-6 z-50 grid size-14 place-items-center rounded-full bg-[#25D366] text-white shadow-lg hover:scale-105 transition">
            <svg viewBox="0 0 32 32" class="size-7" fill="currentColor" aria-hidden="true">
                <path d="M16 3C9 3 3 8.9 3 16c0 2.5.7 4.8 1.9 6.8L3 29l6.4-1.9A13 13 0 1 0 16 3zm0 23a10 10 0 0 1-5.1-1.4l-.4-.2-3.8 1.1 1.1-3.7-.2-.4A10 10 0 1 1 16 26zm5.6-7.5c-.3-.2-1.8-.9-2.1-1s-.5-.2-.7.2-.8 1-1 1.2-.4.2-.7 0a8 8 0 0 1-2.4-1.5 9 9 0 0 1-1.6-2c-.2-.3 0-.5.1-.6l.5-.5.3-.5v-.5l-1-2.3c-.2-.6-.5-.5-.7-.5h-.6a1.2 1.2 0 0 0-.9.4 3.6 3.6 0 0 0-1.1 2.6A6.2 6.2 0 0 0 11 18a14 14 0 0 0 5.4 4.7 18 18 0 0 0 1.8.7 4.3 4.3 0 0 0 2 .1 3.3 3.3 0 0 0 2.1-1.5 2.6 2.6 0 0 0 .2-1.5c-.1-.1-.3-.2-.6-.4z"/>
            </svg>
        </a>
    </main>

    @include('components.footer')
</body>
</html>
