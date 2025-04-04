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
        <a href="/home.blade.php">
            <img src="images/imagenes/IMAGENHOME-png.webp" alt="Inicio" class="inicio">
        </a>
        <div class="icons">
            <img src="{{asset(images/imagenes/logo.png)" alt="Logo" class="logo">
        </div>
    </header>

    <main class="container">
        <section class="icon-bar">
            <div class="icon-container">
                <button id="cart-icon">
                    <img src="{{asset(images/imagenes/IMAGENTIENDA.webp)" alt="Carrito" /> Carrito (<span id="cart-count">0</span>)
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
            <div class="product-item">
                <img src="{{asset(images/tienda/COLLARDEPERROS.jpg)" alt="Producto 1">
                <h3>Collar para Perros</h3>
                <p>$40,000</p>
                <button class="add-to-cart" data-product="Collar para Perros" data-price="40000" data-image="/tienda IMAGENES/COLLAR DE PERROS.jpg" data-store="Tienda A" data-whatsapp="573159143399">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                  <img src="{{asset(images/tienda/JUGUETESDEGATOS.jpg)" alt="Producto 2
                <h3>Juguete para Gatos</h3>
                <p>$30,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/JUGUETES DE GATOS.jpg" data-store="Tienda A" data-whatsapp="573159143399">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                  <img src="{{asset(images/tienda/JUGUETESPARAPERROS.jpg)" alt="Producto 3
                <h3>Juguete para Perros</h3>
                <p>$30,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/JUGUETES PARA PERROS.jpg" data-store="Tienda B" data-whatsapp="573044127840">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                 <img src="{{asset(images/tienda/COLLARPARAGATOS.jpg)" alt="Producto 4
                <h3>Collar para Gatos</h3>
                <p>$30,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/COLLAR PARA GATOS.jpg" data-store="Tienda A" data-whatsapp="573159143399">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                <img src="{{asset(images/tienda/CAMAPARAPERROS.jpg)" alt="Producto 5
                <h3>Cama para Perros</h3>
                <p>$80,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/CAMA PARA PERROS.jpg" data-store="Tienda B" data-whatsapp="573044127840">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                 <img src="{{asset(images/tienda/CAMAPARAGATOS.jpg)" alt="Producto 5
                <h3>Cama para Gatos</h3>
                <p>$70,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/CAMA PARA GATOS.jpg" data-store="Tienda B" data-whatsapp="573044127840">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                 <img src="{{asset(images/tienda/RAZCADORPARAGATOS.jpg)" alt="Producto 6
                <h3>Rascador de Gatos</h3>
                <p>$80,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/RAZCADOR PARA GATOS.jpg" data-store="Tienda A" data-whatsapp="573159143399">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                 <img src="{{asset(images/tienda/PRODUCTOSDELIMPIEZAPERROS.jpg)" alt="Producto 7
                <h3>Productos de limpieza</h3>
                <p>$70,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/PRODUCTOS DE LIMPIEZA PERROS.jpg" data-store="Tienda B" data-whatsapp="573044127840">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                <img src="{{asset(images/tienda/PRODUCTOSDELIMPIEZAGATOS.jpg)" alt="Producto 8
                <h3>Productos de limpieza para Gatos</h3>
                <p>$30,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/PRODUCTOS DE LIMPIEZA GATOS.jpg" data-store="Tienda B" data-whatsapp="573044127840">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                <img src="{{asset(images/tienda/TRANSPORTADORDEGATOS.jpg)" alt="Producto 9
                <h3>Transportador para Gatos</h3>
                <p>$100,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/TRANSPORTADOR DE GATOS.jpg" data-store="Tienda A" data-whatsapp="573159143399">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                  <img src="{{asset(images/tienda/COMEDEROSPARAGATOS.jpg)" alt="Producto 10
                <h3>Comederos para Gatos</h3>
                <p>$30,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/COMEDEROS PARA GATOS.jpg" data-store="Tienda B" data-whatsapp="573044127840">Agregar al Carrito</button>
            </div>
            <div class="product-item">
                 <img src="{{asset(images/tienda/COMEDEROSPARAPERROS.jpg)" alt="Producto 11
                <h3>Comederos para Perros</h3>
                <p>$30,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/COMEDEROS PARA PERROS.jpg" data-store="Tienda B" data-whatsapp="573044127840">Agregar al Carrito</button>
            </div>
            <div class="product-item">
              <img src="{{asset(images/tienda/ARNESPARAPERROS.jpg)" alt="Producto 12
                <h3>Arnes para Perros</h3>
                <p>$50,000</p>
                <button class="add-to-cart" data-product="Juguete para Gatos" data-price="30000" data-image="/tienda IMAGENES/ARNES PARA PERROS.jpg" data-store="Tienda A" data-whatsapp="573159143399">Agregar al Carrito</button>
            </div>
            </section>
    </main>
   
   
   <script src="{{ asset('js/tienda.js') }}"></script>
   
</body>
</html>