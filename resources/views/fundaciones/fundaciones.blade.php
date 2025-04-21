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
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/imagenes/IMAGENHOME-png.webp') }}" alt="Inicio" class="inicio">
            </a>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
    </header>

    <div class="foundation-container">
    @foreach ($fundaciones as $fundacion)
        <div class="foundation" onclick="window.location.href='{{ route('fundaciones.animales', ['id' => $fundacion->id]) }}'">
            <img src="{{ asset('images/' . ($fundacion->imagen ?? 'fundaa.webp')) }}" alt="{{ $fundacion->nombre }}">
            <h3>{{ $fundacion->nombre }}</h3>
            <p>Ubicación: {{ $fundacion->ciudad ?? 'No especificada' }}</p>
            <p>{{ $fundacion->descripcion }}</p>
        </div>
    @endforeach
    </div>

    <script>
        function openFoundationPage(url) {
            window.location.href = url;
        }
    </script>
</body>
</html>
