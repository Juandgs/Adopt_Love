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
        <form method="POST" action="{{ route('clientes.store') }}">
        @csrf
            <label for="nombreCliente">Nombre:</label>
            <input type="text" id="nombreCliente" name="nombre" placeholder="Nombre" required>

            <label for="apellidoCliente">Apellido:</label>
            <input type="text" id="apellidoCliente" name="apellido" placeholder="Apellido" required>

            <label for="telefonoCliente">Teléfono:</label>
            <input type="text" id="telefonoCliente" name="telefono" placeholder="Teléfono" required>

            <label for="correoCliente">Correo Electrónico:</label>
            <input type="email" id="correoCliente" name="correo" placeholder="Correo Electrónico" required>

            <label for="passwordCliente">Contraseña:</label>
            <input type="password" id="passwordCliente" name="password" placeholder="Contraseña" required>
            <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirmar contraseña">


            <button type="submit">Registrarse</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
</body>
</html>