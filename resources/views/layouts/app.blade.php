<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth scroll-pt-28 ">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $page->title }}</title>
        <meta name="description" content="{{ $page->description }}">
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="{{ $page->ogType }}">
        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="{{ url('/') }}">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $page->title }}">
        <meta name="twitter:description" content="{{ $page->description }}">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <!-- Styles -->
        <link rel="stylesheet" href="fonts/Mont/stylesheet.css">
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('common.header')
        <main>
            @yield('content')
        </main>
        @include('common.footer')
        @vite('resources/js/app.js')

    </body>
</html>
