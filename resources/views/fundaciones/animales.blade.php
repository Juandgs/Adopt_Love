<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Amor Animal</title>
    <link rel="stylesheet" href="{{ asset('css/Fundaciones.css') }}">
</head>
<body>
    <header>
        <h1>Fundación Amor Animal</h1>
        <header>
            <a href="{{ route('fundaciones.general') }}">
                <img src="{{ asset('images/imagenes/IMAGENVOLVER.webp') }}" alt="volver" class="volver">
            </a>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/imagenes/IMAGENHOME-png.webp') }}" alt="Inicio" class="inicio">
            </a>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
    </header>

    <div class="foundation-container">
        @forelse ($animales as $animal)
            <div class="foundation">
                <img src="{{ asset('images/' . $animal->imagen) }}" alt="{{ $animal->nombre }}">
                <h3>{{ $animal->nombre }}</h3>
                <p>Edad: {{ $animal->edad }} {{ $animal->edad == 1 ? 'año' : 'años' }}</p>
                <p>Raza: {{ $animal->raza }}</p>
                <button class="adopt-button" 
                    data-image="{{ asset('images/' . $animal->imagen) }}"
                    data-message="{{ $animal->nombre }} está en adopción desde la fundación {{ $fundacion->nombre }}."
                    data-name="{{ $animal->nombre }}"
                    data-age="{{ $animal->edad }} años"
                    data-whatsapp="573209867126">
                    Adoptar
                </button>
            </div>
        @empty
            <p style="text-align: center;">No hay animales disponibles en esta fundación por el momento.</p>
        @endforelse
    </div>

    <div id="animalModal" class="modal">
        <div class="modal-content">
            <img id="animalImage" src="" alt="Animal">
            <p id="animalMessage"></p>
            <div class="modal-buttons">
                <button id="whatsappButton" class="whatsapp-button">
                    <i class="fab fa-whatsapp"></i> Adopción Directa
                </button>
                <button id="closeModal" class="close-button">Cerrar</button>
            </div>
        </div>
    </div>

    <div class="whatsapp-donation-container">
        <div class="donation-bubble">Donaciones aquí</div>
        <img src="{{ asset('images/imagenes/whatsapp.webp') }}" 
            alt="Donar por WhatsApp" 
            class="whatsapp-donation-icon"
            data-whatsapp="573209867126">
    </div>

    
    <script src="{{ asset('js/Animales.js') }}"></script>

</body>
</html>
