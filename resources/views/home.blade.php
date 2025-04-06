<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Adopt with Love</title>
</head>
<body>
    <main id="pagina-principal">
        <header>
            <h1>Adopt With Love</h1>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
        <nav>
            <ul>
                <li><a href="#Clientes">Clientes</a></li>
                <li><a href="{{ route('productos.mostrar') }}">Productos mascotas</a></li>
                <li><a href="{{ url('/Fundaciones.html') }}">Fundaciones y Donaciones</a></li>
            </ul>
        </nav>

        <section class="inicio">
            <h2>¡Bienvenidos!</h2>
        </section>

        <div class="divicion1"></div>
        <div class="divicion2"></div>

        <section id="adopt-message">
            <h3>¡Bienvenidos a Adopt With Love!</h3>
            <p>En Adopt With Love, creemos que cada animal merece un hogar lleno de amor y cuidado. Nuestra misión es conectar a mascotas rescatadas con familias comprometidas, promoviendo la adopción responsable y el bienestar animal. ¡Juntos, podemos cambiar vidas, una adopción a la vez! ❤️</p>
        </section>

        <div class="divicion3"></div>
        <header>
            <h6 id="Clientes" class="titulo-pagina">Clientes</h6>
            <a href="#pagina-principal">
                <img src="{{ asset('images/imagenes/IMAGENHOME-png.webp') }}" alt="Inicio" class="logo">
            </a>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
        <section id="Clientes">
            <div class="contenedor">
                <div class="carousel">
                    <div class="carrusel-list">
                        <button class="carrusel-arrow carrusel-prev" id="button-prev">&lt;</button>
                        <div class="carrusel-track" id="track">
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN2.jpg') }}" alt="Imagen 1"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN4.jpg') }}" alt="Imagen 2"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN25.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN6.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN19.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN14.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN23.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN12.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN8.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN15.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN26.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN22.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN16.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN17.jpg') }}" alt="Imagen 3"></a></div>
                            <div class="carrusel"><a href="#"><img src="{{ asset('images/imagenes/IMAGEN18.jpg') }}" alt="Imagen 3"></a></div>
                        </div>
                        <button class="carrusel-arrow carrusel-next" id="button-next">&gt;</button>
                    </div>
                </div>
            </div>
            <div class="modal" id="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="modalImage">
                <div class="caption" id="caption"></div>
            </div>
            <script src="{{ asset('js/carrusel.js') }}"></script>
        </section>

        <footer>
            <section id="terminos-condiciones">
                <h4>Términos y Condiciones</h4>
                <p>Al acceder y utilizar este sitio web, el usuario acepta y se compromete a cumplir con estos Términos y Condiciones...</p>
                <p>Términos y Condiciones de Uso ... (resto del contenido)</p>
            </section>
            <section id="leyes-colombianas">
                <h4>Leyes y Regulaciones</h4>
                <p><strong>Ley 84 de 1989 - Ley de Protección Animal:</strong> La Ley 84 de 1989 establece la protección de los animales...</p>
                <p><strong>Ley 1774 de 2016 - Maltrato Animal:</strong> Esta ley tipifica el maltrato animal como un delito penal...</p>
                <p>Leyes y Regulaciones Relacionadas con Mascotas en Colombia ... (resto del contenido)</p>
            </section>
        </footer>
    </main>
</body>
</html>