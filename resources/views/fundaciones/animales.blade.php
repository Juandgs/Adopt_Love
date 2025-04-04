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
            <a href="{{ asset('fundaciones/Fundaciones.html') }}">
                <img src="{{ asset('images/imagenes/IMAGENVOLVER.webp') }}" alt="volver" class="volver">
            </a>
            <a href="{{ asset('indexdos.html') }}">
                <img src="{{ asset('images/imagenes/IMAGENHOME-png.webp') }}" alt="Inicio" class="inicio">
            </a>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
    </header>

    <div class="foundation-container">
        <div class="foundation">
            <img src="{{ asset('images/fundaciones_imagenes/PERRO1.jpg') }}" alt="Perro 1">
            <h3>Max</h3>
            <p>Edad: 1 año</p>
            <button class="adopt-button" 
                data-image="{{ asset('images/fundaciones_imagenes/PERRO1.jpg') }}"
                data-message="Max fue encontrado abandonado en un parque"
                data-name="Max"
                data-age="1 año"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>

        <div class="foundation">
            <img src="{{ asset('images/fundaciones_imagenes/GATO1.jpg') }}" alt="Gato 1">
            <h3>Luna</h3>
            <p>Edad: 4 años</p>
            <button class="adopt-button" 
                data-image="{{ asset('images/fundaciones_imagenes/GATO1.jpg') }}" 
                data-message="Luna fue rescatada en malas condiciones de salud."
                data-name="Luna"
                data-age="4 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>

        <div class="foundation">
            <img src="{{ asset('images/fundaciones_imagenes/PERRO2.jpg') }}" alt="Perro 2">
            <h3>Eva</h3>
            <p>Edad: 6 años</p>
            <button class="adopt-button" 
                data-image="{{ asset('images/fundaciones_imagenes/PERRO2.jpg') }}"
                data-message="Eva fue encontrada abandonada en la calle."
                data-name="Eva"
                data-age="6 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>

        <div class="foundation">
            <img src="{{ asset('images/fundaciones_imagenes/PERRO3.jpg') }}" alt="Perro 3">
            <h3>Marco</h3>
            <p>Edad: 2 años</p>
            <button class="adopt-button" 
                data-image="{{ asset('images/fundaciones_imagenes/PERRO3.jpg') }}" 
                data-message="Marco fue encontrado abandonado en la calle."
                data-name="Marco"
                data-age="2 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>

        <div class="foundation">
            <img src="{{ asset('images/fundaciones_imagenes/GATO2.jpg') }}" alt="Gato 2">
            <h3>Bigotes</h3>
            <p>Edad: 5 años</p>
            <button class="adopt-button" 
                data-image="{{ asset('images/fundaciones_imagenes/GATO2.jpg') }}"
                data-message="Bigotes fue rescatado en un callejón."
                data-name="Bigotes"
                data-age="5 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>

        <div class="foundation">
            <img src="{{ asset('images/fundaciones_imagenes/GATOS3.jpg') }}" alt="Gato 3">
            <h3>Maxi y sus crías</h3>
            <p>Edad: 3 años</p>
            <button class="adopt-button" 
                data-image="{{ asset('images/fundaciones_imagenes/GATOS3.jpg') }}"
                data-message="Maxi y sus bebés fueron encontrados en un parque."
                data-name="Maxi y sus crías"
                data-age="3 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>
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
