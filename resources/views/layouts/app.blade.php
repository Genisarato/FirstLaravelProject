<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'La Meva Aplicació Laravel')</title>

    <link rel="icon" type="image/jpeg" href="{{ asset('icono.jpg') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilPrincipal.css') }}">

    @yield('head_extra') {{-- Per si alguna vista necessita CSS/JS addicional al <head> --}}
</head>
<body>
<header class="header">
    <div class="header-title">
        <h1>Benvingut a la Comunitat Estudiantil</h1>
    </div>
</header>

<main class="content-wrapper">
    @yield('content')
</main>

<footer>
    <p>&copy; {{ date('Y') }} El Meu Projecte Laravel. Tots els drets reservats.</p>
</footer>

@yield('scripts_extra') {{-- Per si alguna vista necessita JS addicional al final del <body> --}}
</body>
</html>
