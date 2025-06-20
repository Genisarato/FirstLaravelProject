<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Aprofita el @yield('title') per al títol de la pestanya del navegador --}}
    <title>@yield('title', 'Comunitat Estudiantil')</title>

    <link rel="icon" type="image/jpeg" href="{{ asset('icono.jpg') }}">

    {{-- Enllaç a Bootstrap CSS primer (important per prioritat d'estils) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- Després, el teu CSS personalitzat per sobreescriure o afegir estils --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilPrincipal.css') }}">

    {{-- Aquí pots afegir un yield per a estils addicionals per vista --}}
    @stack('styles')

</head>
<body>
<header class="header">
    <div class="header-title">
        <h1>Benvingut a la Comunitat Estudiantil</h1>
    </div>
</header>

<main class="content-wrapper">
    {{-- Aquest és el punt CLAU: Aquí s'injectarà el contingut de cada @section('content') de les teves vistes --}}
    @yield('content')
</main>

<footer>
    <p>&copy; {{ date('Y') }} El Meu Projecte Laravel. Tots els drets reservats.</p>
</footer>

{{-- Opcional: Bootstrap JS al final del body si utilitzes components interactius --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJiglmG/E+R+C/Ww9+B2a53jJv2Pz" crossorigin="anonymous"></script>

{{-- Aquí pots afegir un yield per a scripts addicionals per vista --}}
@stack('scripts')

</body>
</html>
