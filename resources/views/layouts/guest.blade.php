<!DOCTYPE html>
<html lang="fr_FR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <meta name="description" content="Découvrez l'univers du mandala à travers nos ateliers créatifs, où la sérénité et l'inspiration se rencontrent à chaque tracé.">
    <meta name="keywords" content="mandala, dessin centré, atelier, créatif, dessin, coloriage, peinture, art, zen, sérénité, bien-être, développement personnel, épanouissement, éveil, conscience, méditation, thérapie, thérapeutique, thérapeute">
    <meta name="author" content="vinvui.com">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ config('app.url') }}">

    {{-- Opengraph  --}}
    <meta property="og:title" content="Les Ateliers de Gaë">
    <meta property="og:description" content="Découvrez l'univers du mandala à travers nos ateliers créatifs, où la sérénité et l'inspiration se rencontrent à chaque tracé.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1594577526227-daccc722bcc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2120&q=80">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="Les Ateliers de Gaë">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">

    {{-- Twitter --}}
    <meta name="twitter:card" content="https://images.unsplash.com/photo-1594577526227-daccc722bcc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2120&q=80">
    <meta name="twitter:title" content="Les Ateliers de Gaë">
    <meta name="twitter:description" content="Découvrez l'univers du mandala à travers nos ateliers créatifs, où la sérénité et l'inspiration se rencontrent à chaque tracé.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1594577526227-daccc722bcc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2120&q=80">
    <meta name="twitter:image:alt" content="Les Ateliers de Gaë">
    <meta name="twitter:site" content="@mandala-atelier">
    <meta name="twitter:creator" content="@mandala-atelier">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="52x52" href="/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#FFF6E9">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="theme-color" content="#FFF6E9">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=amita:400,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="overflow-x-hidden">

    @include('home._partials.header')

    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    @include('home._partials.footer')

    @livewireScripts
</body>
</html>
