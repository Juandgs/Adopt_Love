<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Registro de Cliente</h1>
        <form id="formCliente" data-tipo="cliente" method="POST" action="{{ route('register.cliente.submit') }}">
            @csrf
            <label for="nombreCliente">Nombre:</label>
            <input type="text" id="nombreCliente" name="nombreCliente" placeholder="Nombre" required>

            <label for="apellidoCliente">Apellido:</label>
            <input type="text" id="apellidoCliente" name="apellidoCliente" placeholder="Apellido" required>

            <label for="telefonoCliente">Teléfono:</label>
            <input type="text" id="telefonoCliente" name="telefonoCliente" placeholder="Teléfono" required>

            <label for="correoCliente">Correo Electrónico:</label>
            <input type="email" id="correoCliente" name="correoCliente" placeholder="Correo Electrónico" required>

            <label for="passwordCliente">Contraseña:</label>
            <input type="password" id="passwordCliente" name="passwordCliente" placeholder="Contraseña" required>

            <button type="submit">Registrarse</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
    
    <script src="{{ asset('js/general.js') }}" defer></script>

</body>
</html>