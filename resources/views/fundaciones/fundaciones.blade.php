<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundaciones de Mascotas</title>
    <link rel="stylesheet" href="{{ asset('css/Fundaciones.css') }}">
</head>
<body>
    <header>
        <h1>Fundaciones de Mascotas</h1>
        <header>
            <a href="{{ asset('home.blade.php') }}">
                <img src="{{ asset('images/imagenes/IMAGENHOME-png.webp') }}" alt="Inicio" class="inicio">
            </a>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
    </header>

    <div class="foundation-container">
        <div class="foundation" onclick="openFoundationPage('{{ asset('fundaciones/animales.html') }}')">
            <img src="{{ asset('images/fundaciones/IMAGEN1.jpg') }}" alt="Fundación 1">
            <h3>Fundación Amor Animal</h3>
            <p>Ubicación: Bogotá</p>
        </div>
        <div class="foundation" onclick="openFoundationPage('{{ asset('fundaciones/animales2.html') }}')">
            <img src="{{ asset('images/fundaciones/IMAGEN2.jpg') }}" alt="Fundación 2">
            <h3>Huellitas Felices</h3>
            <p>Ubicación: Bogotá</p>
        </div>
        <div class="foundation" onclick="openFoundationPage('{{ asset('fundaciones/animales3.html') }}')">
            <img src="{{ asset('images/fundaciones/IMAGEN11.jpg') }}" alt="Fundación 3">
            <h3>Patitas de Amor</h3>
            <p>Ubicación: Bogotá</p>
        </div>
    </div>

    <script>
        function openFoundationPage(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
