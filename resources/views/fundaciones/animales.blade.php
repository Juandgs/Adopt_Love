<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Amor Animal</title>
    <link rel="stylesheet" href="/Fundaciones.css">
</head>
<body>
    <header>
        <h1>Fundación Amor Animal</h1>
        <header>
            <a href="/fundaciones/Fundaciones.html">
                <img src="/imagenes/IMAGEN VOLVER.webp" alt="volver" class="volver">
            </a>
            <a href="/indexdos.html">
                <img src="/imagenes/IMAGEN HOME-png.webp" alt="Inicio" class="inicio">
            </a>
            <img src="/imagenes/logo.png" alt="Logo" class="logo">
        </header>
    </header>
    <div class="foundation-container">
        <div class="foundation">
            <img src="/fundaciones IMAGENES/PERRO 1.jpg" alt="Perro 1">
            <h3>Max</h3>
            <p>Edad: 1 año</p>
            <button class="adopt-button" 
                data-image="/fundaciones IMAGENES/PERRO 1.jpg"
                data-message="Max fue encontrado abandonado en un parque"
                data-name="Max"
                data-age="1 año"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/GATO 1.jpg" alt="Gato 1">
            <h3>Luna</h3>
            <p>Edad: 4 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/GATO 1.jpg' 
                data-message='Luna fue rescatada en malas condiciones de salud.'
                data-name="Luna"
                date-age="4 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/PERRO 2.jpg" alt="Perro 2">
            <h3>Eva</h3>
            <p>Edad: 6 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/PERRO 2.jpg'
                data-message='Eva fue encontrada abandonada en la calle.'
                data-name="Eva"
                date-age="6 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/PERRO 3.jpg" alt="Perro 3">
            <h3>Marco</h3>
            <p>Edad: 2 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/PERRO 3.jpg' 
                data-message='Marco fue encontrado abandonado en la calle.'
                data-name="Marco"
                date-age="2 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/GATO 2.jpg" alt="Gato 2">
            <h3>Bigotes</h3>
            <p>Edad: 5 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/GATO 2.jpg'
                data-message='Bigotes fue rescatado en un callejon.'
                data-name="Bigotes"
                date-age="5 años"
                data-whatsapp="573209867126">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/GATOS 3.jpg" alt="Gato 2">
            <h3>Maxi y sus crias</h3>
            <p>Edad: 3 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/GATOS 3.jpg'
                data-message='Maxi y sus bebes fueron encontrados en un parque.'
                data-name="Maxi y sus crias"
                date-age="3 años"
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
        <img src="/imagenes/whatsapp.webp" 
            alt="Donar por WhatsApp" 
            class="whatsapp-donation-icon"
            data-whatsapp="573209867126">
    </div>
    <script src="/Animales.js"></script>
</body>
</html>