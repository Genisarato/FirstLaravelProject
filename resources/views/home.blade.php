<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut a la Comunitat Estudiantil</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('icono.jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilPrincipal.css') }}">
</head>
<body>
<header class="header">
    <div class="header-title">
        <h1>Benvingut a la Comunitat Estudiantil</h1>
    </div>
</header>

<main class="content-wrapper">
    <div class="welcome-section">
        <h2>La Nostra Plataforma de Gestió</h2>
        <p>Explora les nostres seccions per gestionar escoles i estudiants de manera eficient.</p>
    </div>
    <div class="sections-container d-flex justify-content-between align-items-stretch">
        <div class="card school-card">
            <h3>Gestió d'Escoles</h3>
            <p>Aquí pots veure, afegir, editar i eliminar informació sobre les escoles.</p>
            <div class="mt-auto">
                <a href="{{ route('schools.index') }}" class="btn">Anar a Escoles</a>
            </div>
        </div>
        <div class="card student-card">
            <h3>Gestió d'Estudiants</h3>
            <p>Accedeix a la informació detallada dels estudiants, les seves dades i les seves escoles associades. També pots gestionar les seves assignacions i històrics.</p>
            <div class="mt-auto">
                <a href="{{ route('students.index') }}" class="btn">Anar a Estudiants</a>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>© {{ date('Y') }} El Meu Projecte Laravel. Tots els drets reservats.</p>
</footer>
</body>
</html>
