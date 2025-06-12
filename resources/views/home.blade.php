<!DOCTYPE html>
<html lang="ca"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut a la Comunitat Estudiantil</title>

    <link rel="icon" type="image/jpeg" href="{{ asset('icono.jpg') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilPrincipal.css') }}">

</head>
<body>
<header class="header"> <div class="header-title"> <h1>Benvingut a la Comunitat Estudiantil</h1>
    </div>
</header>

<main class="content-wrapper"> <div class="welcome-section">
        <h2>La Nostra Plataforma de Gestió</h2>
        <p>Explora les nostres seccions per gestionar escoles i estudiants de manera eficient.</p>
    </div>

    <div class="sections-container">
        <div class="card school-card">
            <h3>Gestió d'Escoles</h3>
            <p>Aquí pots veure, afegir, editar i eliminar informació sobre les escoles.</p>
            <a href="{{ route('schools.index') }}" class="btn btn-primary">Anar a Escoles</a>
        </div>

        <div class="card student-card">
            <h3>Gestió d'Estudiants</h3>
            <p>Accedeix a la informació detallada dels estudiants, les seves dades i les seves escoles associades.</p>
            <a href="{{ route('students.index') }}" class="btn btn-primary">Anar a Estudiants</a>
        </div>
    </div>
</main>

<footer>
    <p>&copy; {{ date('Y') }} El Meu Projecte Laravel. Tots els drets reservats.</p>
</footer>

</body>
</html>
