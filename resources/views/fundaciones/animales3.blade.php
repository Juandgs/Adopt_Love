<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huellitas Felices</title>
    <link rel="stylesheet" href="/Fundaciones.css">
</head>
<body>
    <header>
        <h1>Huellitas Felices</h1>
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
            <img src="/fundaciones IMAGENES/GATO 3.jpg" alt="Gato 1">
            <h3>Mini</h3>
            <p>Edad: 3 meses</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/GATO 3.jpg'
                data-message='Mini fue encontrada abandonada en la calle.'
                data-name="Mini"
                date-age="3 meses"
                data-whatsapp="573159143399">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/GATO 4.jpg" alt="Gato 1">
            <h3>Lilo</h3>
            <p>Edad: 3 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/GATO 4.jpg'
                data-message='Lilo fue encontrada abandonada en la calle.'
                data-name="Lilo"
                date-age="3 años"
                data-whatsapp="573159143399">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/PERRO 4.jpg" alt="Perro 1">
            <h3>Ani</h3>
            <p>Edad: 8 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/PERRO 4.jpg'
                data-message='Ani fue encontrada abandonada en la calle.'
                data-name="Ani"
                date-age="8 años"
                data-whatsapp="573159143399">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/PERRO 5.jpg" alt="Perro 2">
            <h3>Maximo</h3>
            <p>Edad: 9 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/PERRO 5.jpg'
                data-message='Maximo fue encontrada abandonada en la calle.'
                data-name="Maximo"
                date-age="9 años"
                data-whatsapp="573159143399">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/GATO 2.jpg" alt="Gato 2">
            <h3>Bruno</h3>
            <p>Edad: 5 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/GATO 2.jpg'
                data-message='Bruno fue encontrada abandonada en la calle.'
                data-name="Bruno"
                date-age="5 años"
                data-whatsapp="573159143399">
                Adoptar
            </button>
        </div>
        <div class="foundation">
            <img src="/fundaciones IMAGENES/PERROS 1.jpg" alt="Perros 3">
            <h3>Lulu y su cria</h3>
            <p>Edad: 6 años</p>
            <button class="adopt-button" 
                data-image='/fundaciones IMAGENES/PERROS 1.jpg'
                data-message='Lulu y su cria fue encontrada abandonada en la calle.'
                data-name="Lulu y su cria"
                date-age="6 años"
                data-whatsapp="573159143399">
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
            data-whatsapp="573159143399">
    </div>
    <script src="/Animales.js"></script>
</body>
</html>