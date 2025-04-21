<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos para tus Mascotas</title>
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
</head>
<body>
    <header class="header">
        <h1>Productos para tus mascotas</h1>
        <a href="{{ route('fundaciones.general') }}">
            <img src="{{ asset('images/imagenes/cerrar-sesion.png') }}" alt="volver" class="volver">
        </a>
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/imagenes/IMAGENHOME-png.webp') }}" alt="Inicio" class="inicio">
        </a>
        <div class="icons">
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </div>
    </header>

    <form method="GET" action="{{ route('productos.filtro') }}">
    <div class="controls-container">
        <select name="tipoProducto" class="category-dropdown" onchange="this.form.submit()">
            <option value="">Todos los productos</option>
            <option value="Aseo" {{ request('tipoProducto') == 'Aseo' ? 'selected' : '' }}>Productos de aseo</option>
            <option value="Comida" {{ request('tipoProducto') == 'Comida' ? 'selected' : '' }}>Productos de comida</option>
            <option value="Juguetes" {{ request('tipoProducto') == 'Juguetes' ? 'selected' : '' }}>Juguetes</option>
            <option value="Otros" {{ request('tipoProducto') == 'Otros' ? 'selected' : '' }}>Otros</option>
        </select>
    </div>
    </form>


    <main class="container">
        <section class="icon-bar">
            <div class="icon-container">
                <button id="cart-icon">
                    <img src="{{ asset('images/imagenes/IMAGENTIENDA.webp') }}" alt="Carrito" />
                    Carrito (<span id="cart-count">0</span>)
                </button>
            </div>
        </section>

        <div id="cart-modal" class="cart-modal">
            <div class="cart-content">
                <h2>Tu Carrito</h2>
                <ul id="cart-items"></ul>
                <p>Total: <span id="cart-total">$0</span></p>
                <button id="close-cart">Cerrar</button>
            </div>
        </div>

        <h2>Productos</h2>
        <section class="products">
            @foreach ($productos as $producto)
                <div class="product-item">
                    <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">
                    <h3>{{ $producto->nombre }}</h3>
                    <p>${{ number_format($producto->precio, 0, ',', '.') }}</p>
                    <button class="add-to-cart"
                            data-product="{{ $producto->nombre }}"
                            data-price="{{ $producto->precio }}"
                            data-image="{{ asset('images/' . $producto->imagen) }}"
                            data-store="Tienda"
                            data-whatsapp="573159143399">Agregar al Carrito</button>
                </div>
            @endforeach
        </section>
    </main>

    <!-- Modal de Producto -->
    <div id="animalModal" class="modal" style="display: none;">
        <div class="modal-content">
            <img id="animalImage" src="" alt="Imagen del Producto">
            <p id="animalMessage"></p>
            <button onclick="closeModal()">Cerrar</button>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        function openModal(imageSrc, message) {
            document.getElementById('animalImage').src = imageSrc;
            document.getElementById('animalMessage').textContent = message;
            document.getElementById('animalModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('animalModal').style.display = 'none';
        }

        function openChatModal(title) {
            document.getElementById('chatTitle').innerText = title;
            document.getElementById('chatModal').style.display = 'block';
        }

        function closeChatModal() {
            document.getElementById('chatModal').style.display = 'none';
        }

        function sendMessage() {
            const input = document.getElementById('chatInput');
            const message = input.value;
            if (message.trim() !== '') {
                const chatArea = document.getElementById('chatArea');
                const newMessage = document.createElement('p');
                newMessage.textContent = message;
                chatArea.appendChild(newMessage);
                input.value = '';
            }
        }
    </script>
    <script src="{{ asset('js/tienda.js') }}"></script>
</body>
</html>
