<!DOCTYPE html>
<html lang="en">
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
            <a href="Fundaciones.html">
                <img src="../vistas registros/imagenes/IMAGEN VOLVER.webp" alt="volver" class="volver">
            </a>
            <a href="../vistas registros/html/index.html">
                <img src="../vistas registros/imagenes/IMAGEN HOME-png.webp" alt="Inicio" class="inicio">
            </a>
            <img src="../vistas registros/imagenes/logo.png" alt="Logo" class="logo">
            
        </header>
    </header>
    <div class="productos-container">
    @foreach ($productos as $producto)
    <div class="foundation-container">
        <div class="foundation">
        <img src="{{ asset( 'images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">
            <h3>{{ $producto->nombre }}</h3>
            <p>Precio: ${{ $producto->precio }}</p>
            <p>Cantidad: {{ $producto->cantidad }}</p>
            <p>Tipo de Producto: {{ $producto->tipoProducto }}</p>
            <button class="adopt-button" onclick="openModal(`{{ asset('images/' . $producto->imagen) }}`, `Precio: {{ $producto->precio }}`)">Adoptar</button>
        </div>
    </div>
    @endforeach
    </div>

    <!-- Modal -->
    <div id="animalModal" class="modal" style="display: none;">
        <div class="modal-content">
            <img id="animalImage" src="" alt="Imagen del Producto">
            <p id="animalMessage"></p>
            <button onclick="closeModal()">Cerrar</button>
        </div>
    </div>
    
    <script>
        // Función para abrir el modal con los datos correspondientes
        function openModal(imageSrc, message) {
            document.getElementById('animalImage').src = imageSrc;
            document.getElementById('animalMessage').textContent = message;
            document.getElementById('animalModal').style.display = 'block';
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('animalModal').style.display = 'none';
        }
    </script>

    <!-- Imagen de chat -->
    <img src="imagenes/IMAGEN CHAT.webp" alt="Chat Icon" class="chat-icon" onclick="openChatModal('Fundación Amor Animal')">

    <!-- Modal de chat -->
    <div id="chatModal" class="modal">
        <div class="modal-content">
            <h3 id="chatTitle">Chat</h3>
            <div class="chat-area" id="chatArea"></div>
            <input type="text" id="chatInput" class="chat-input" placeholder="Escribe un mensaje...">
            <button class="send-button" onclick="sendMessage()">Enviar</button>
            <button class="send-button close-button" onclick="closeChatModal()">Cerrar</button>
        </div>
    </div>
    <script src="{{ asset('js/Animales.js') }}"></script>

</body>
</html>