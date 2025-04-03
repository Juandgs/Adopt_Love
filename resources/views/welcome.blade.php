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
    <main id="Pagina_principal">
        <header>
            <h1>Adopt With Love</h1>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
    </main>

    <main>
        <section class="inicio">
            <h2>¡Bienvenidos!</h2>
        </section>
    </main>
    <div class="divicion1"></div>
    <div class="divicion2"></div>

    <main id="tipo_usuario">
        <header>
            <h3>Tipo de usuario</h3>
            <a href="{{ route('welcome') }}">
                <img src="{{ asset('images/imagenes/IMAGEN HOME-png.webp') }}" alt="Inicio" class="logo">
            </a>
            <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
        </header>
        <div class="TU">
            <div class="fundacion">
                <div class="texto">
                    <p>Fundación</p>
                </div>
                <img src="{{ asset('images/imagenes/TU_fundacion.png') }}" alt="Fundación">
                <div class="botones">
                    <a href="{{ route('register.fundacion') }}">
                        <button type="button">Registro</button>
                    </a>
                    <a href="{{ route('login.fundacion') }}">
                        <button type="button">Iniciar sesión</button>
                    </a>
                </div>
            </div>

            <div class="cliente">
                <div class="texto">
                    <p>Cliente</p>
                </div>
                <img src="{{ asset('images/imagenes/TU_fundacion.png') }}" alt="Cliente">
                <div class="botones">
                    <a href="{{ route('register.cliente') }}">
                        <button type="button">Registro</button>
                    </a>
                    <a href="{{ route('login.cliente') }}">
                        <button type="button">Iniciar sesión</button>
                    </a>
                </div>
            </div>

            <div class="vendedor">
                <div class="texto">
                    <p>Vendedor</p>
                </div>
                <img src="{{ asset('images/imagenes/TU_fundacion.png') }}" alt="Vendedor">
                <div class="botones">
                    <a href="{{ route('register.vendedor') }}">
                        <button type="button">Registro</button>
                    </a>
                    <a href="{{ route('login.vendedor') }}">
                        <button type="button">Iniciar sesión</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <div class="divicion3"></div>
    <header>
        <h6 id="Clientes" class="titulo-pagina">Clientes</h6>
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/imagenes/IMAGEN HOME-png.webp') }}" alt="Inicio" class="logo">
        </a>
        <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo" class="logo">
    </header>
    <section id="Clientes">
        <div class="contenedor">
            <div class="carousel">
                <div class="carrusel-list">
                    <button class="carrusel-arrow carrusel-prev" id="button-prev">
                        &lt;
                    </button>
                    <div class="carrusel-track" id="track">
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('images/imagenes/IMAGEN 2.jpg') }}" alt="Imagen 1">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('images/imagenes/IMAGEN 4.jpg') }}" alt="Imagen 2">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('images/imagenes/IMAGEN 25.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 6.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 19.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 14.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 23.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 12.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 8.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 15.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 26.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 22.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 16.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 17.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                        <div class="carrusel">
                            <a href="#">
                                <img src="{{ asset('imagenes/IMAGEN 18.jpg') }}" alt="Imagen 3">
                            </a>
                        </div>
                    </div>
                    <button class="carrusel-arrow carrusel-next" id="button-next">
                        &gt;
                    </button>
                </div>
            </div>
        </div>
        <div class="modal" id="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalImage">
            <div class="caption" id="caption"></div>
        </div>
        <script src="{{ asset('carrusel.js') }}"></script>
    </section>

    <footer>
        <section id="terminos-condiciones">
            <h4>Términos y Condiciones</h4>
            <p>Al acceder y utilizar este sitio web, el usuario acepta y se compromete a cumplir con estos Términos y Condiciones...</p>
            <p>. Términos y Condiciones de Uso
                Fecha de última actualización: [Fecha]
                Bienvenido a Adopt with Love. Al acceder y utilizar este sitio web, aceptas cumplir con los siguientes términos y condiciones. Si no estás de acuerdo con estos términos, por favor, no uses este sitio web.
                1. Generalidades
                1.1 Adopt with Love es una plataforma dedicada a la adopción de mascotas, en especial perros y gatos, donde las fundaciones registradas pueden listar animales en adopción, y los usuarios pueden buscar y adoptar mascotas de manera responsable.
                1.2 Este sitio está dirigido a personas mayores de 18 años. Si eres menor de edad, necesitarás la autorización de un adulto para acceder a los servicios del sitio.
                2. Registro de Fundaciones
                2.1 Las fundaciones interesadas en registrar animales para adopción deben completar un proceso de registro en la plataforma y verificar su identidad y estatus legal.
                2.2 Las fundaciones deben garantizar que las mascotas publicadas en el sitio hayan sido rescatadas de situaciones de maltrato o abandono y que estén en condiciones saludables para ser adoptadas.
                2.3 Adopt with Love no se hace responsable de la veracidad de la información proporcionada por las fundaciones.
                3. Adopción de Mascotas
                3.1 Los usuarios interesados en adoptar una mascota deben completar un formulario de solicitud que incluye preguntas sobre su capacidad para cuidar al animal, sus condiciones de vida y otros aspectos relevantes para garantizar el bienestar de la mascota.
                3.2 La adopción será confirmada una vez que la fundación apruebe la solicitud del usuario y se coordinen los detalles para la entrega de la mascota.
                3.3 Adopt with Love actúa únicamente como intermediario entre las fundaciones y los adoptantes, no asumiendo responsabilidades legales ni materiales respecto a la adopción.
                4. Obligaciones del Adoptante
                4.1 El adoptante se compromete a proporcionar un hogar adecuado para la mascota, brindándole atención veterinaria, alimento, y el cariño necesario para su bienestar.
                4.2 El adoptante acepta que, en caso de no poder cuidar de la mascota, la devolverá a la fundación que la adoptó a través de este sitio.
                5. Propiedad Intelectual
                5.1 Todo el contenido de este sitio web, incluyendo imágenes, textos, logotipos y marcas, son propiedad de Adopt with Love o de sus respectivos propietarios y están protegidos por las leyes de propiedad intelectual.
                5.2 No se permite la reproducción, distribución o modificación del contenido sin el consentimiento previo y por escrito de Adopt with Love.
                6. Política de Privacidad
                6.1 Recopilamos información personal solo cuando es necesario para procesar la adopción o para brindarte el servicio solicitado.
                6.2 No compartiremos tu información personal con terceros sin tu consentimiento, salvo en situaciones en las que sea requerido por la ley.
                7. Responsabilidad
                7.1 Adopt with Love se exime de toda responsabilidad sobre cualquier daño, perjuicio o inconveniente derivado del comportamiento de las mascotas adoptadas o de cualquier acuerdo entre las fundaciones y los adoptantes.
                7.2 Las fundaciones y los adoptantes deben garantizar que todas las interacciones sean de buena fe y en beneficio de la mascota.
                8. Modificaciones
                8.1 Adopt with Love se reserva el derecho de modificar estos términos y condiciones en cualquier momento. Las modificaciones serán publicadas en el sitio web, y el uso continuado del sitio implicará la aceptación de los cambios.
                9. Ley Aplicable
                9.1 Estos Términos y Condiciones se regirán e interpretarán de acuerdo con las leyes de la República de Colombia. En caso de disputa, las partes se someten a la jurisdicción de los tribunales competentes de Colombia.
                10. Contacto
                Si tienes alguna pregunta sobre estos Términos y Condiciones, puedes contactarnos a través de nuestro formulario de contacto o por correo electrónico a [correo@adoptwithlove.com].</p>
        </section>

        <section id="leyes-colombianas">
            <h4>Leyes y Regulaciones</h4>
            <p><strong>Ley 84 de 1989 - Ley de Protección Animal:</strong> La Ley 84 de 1989 establece la protección de los animales...</p>
            <p><strong>Ley 1774 de 2016 - Maltrato Animal:</strong> Esta ley tipifica el maltrato animal como un delito penal...</p>
            <p>.Leyes y Regulaciones Relacionadas con Mascotas en Colombia
                Ley 84 de 1989 - Ley de Protección Animal
                La Ley 84 de 1989 establece la protección de los animales en Colombia y prohíbe el maltrato y la explotación de los mismos. Los usuarios y las organizaciones deben asegurarse de cumplir con los estándares de bienestar animal al ofrecer productos y servicios relacionados con mascotas.
                Ley 1774 de 2016 - Maltrato Animal
                Esta ley tipifica el maltrato animal como un delito penal, estableciendo sanciones de prisión y/o multa para las personas que maltraten a los animales. Es importante que todas las adopciones y ventas de mascotas se realicen bajo el principio del bienestar animal.
                Resolución 1588 de 2018 - Registro de Adopciones
                La Resolución 1588 de 2018 establece los requisitos para el registro de adopciones de animales, especialmente perros y gatos. Esta norma garantiza que las fundaciones y los centros de adopción estén debidamente registrados y verifiquen las condiciones de adopción.
                Código Nacional de Policía y Convivencia (Ley 1801 de 2016)
                Este código regula las normas sobre la tenencia de animales de compañía en espacios públicos, y establece sanciones para quienes no cumplan con los requerimientos de convivencia en espacios públicos con animales. Incluye normas sobre la recolección de excrementos, control de ruidos y circulación de animales.
                Normas Locales y Municipales
                A nivel local, los municipios pueden tener regulaciones adicionales sobre la tenencia de animales de compañía, por lo que es importante que los usuarios consulten las normativas locales que puedan aplicar en su ciudad o región.
                Reglamento Técnico de Etiquetado y Registro de Productos de Alimentos y Medicamentos para Animales
                El Decreto 663 de 2016 establece normas sobre el etiquetado y comercialización de productos destinados a la alimentación y cuidado de los animales, que deben ser cumplidas por las empresas que venden productos para mascotas.</p>
        </section>
    </footer>
</body>
</html>