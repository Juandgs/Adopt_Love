<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Vendedor</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Registro de Vendedor</h1>
        <form id="formVendedor" data-tipo="vendedor" method="POST" action="{{ route('register.vendedor.submit') }}">
            @csrf
            <label for="nombreTienda">Nombre Tienda:</label>
            <input type="text" id="nombreTienda" name="nombreTienda" placeholder="Nombre Tienda" required>

            <label for="nombreEncargadoVendedor">Nombre Encargado:</label>
            <input type="text" id="nombreEncargadoVendedor" name="nombreEncargadoVendedor" placeholder="Nombre Encargado" required>

            <label for="telefonoVendedor">Teléfono:</label>
            <input type="text" id="telefonoVendedor" name="telefonoVendedor" placeholder="Teléfono" required>

            <label for="correoVendedor">Correo Electrónico:</label>
            <input type="email" id="correoVendedor" name="correoVendedor" placeholder="Correo Electrónico" required>

            <label for="passwordVendedor">Contraseña:</label>
            <input type="password" id="passwordVendedor" name="passwordVendedor" placeholder="Contraseña" required>

            <button type="submit">Registrarse</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
    <script src="{{ asset('js/general.js') }}" defer></script>
</body>
</html>