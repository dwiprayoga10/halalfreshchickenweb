<!DOCTYPE html>
<html class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halal Fresh Chicken</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4f9d6W5j0f0jQX5x5xkQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Extra Styles --}}
    @stack('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-gray-800 antialiased min-h-screen flex flex-col m-0 p-0">

    {{-- HEADER --}}
    @include('partials.header')

    {{-- MAIN CONTENT --}}
    <main class="flex-1 pt-12 pb-20 md:pb-0">
        @yield('content')
    </main>
    {{-- MOBILE MENU --}}
    @include('partials.mobile-menu')

    {{-- BOTTOM NAV (FIXED MOBILE) --}}
    @include('partials.bottom-nav')

    {{-- JS LIBRARIES --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Page Scripts --}}
    @stack('scripts')
<style>
    [x-cloak] { display: none !important; }
</style>
</body>
</html>

