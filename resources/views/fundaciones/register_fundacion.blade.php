<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Fundación</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Registro de Fundación</h1>
        <form method="POST" action="{{ route('encargadofundacion.store') }}">
            @csrf

            <label for="nombreEncargadoFundacion">Nombre:</label>
            <input type="text" id="nombreCliente" name="nombre" placeholder="Nombre" required>

            <label for="telefonoFundacion">Apellido:</label>
            <input type="text" id="apellidoCliente" name="apellido" placeholder="Apellido" required>

            <label for="telefonoFundacion">Teléfono:</label>
            <input type="text" id="telefonoCliente" name="telefono" placeholder="Teléfono" required>

            <label for="correoFundacion">Correo Electrónico:</label>
            <input type="email" id="correoCliente" name="correo" placeholder="Correo Electrónico" required>

            <label for="passwordFundacion">Contraseña:</label>
            <input type="password" id="passwordCliente" name="password" placeholder="Contraseña" required>
            <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirmar contraseña">


            <button type="submit">Registrarse</button>
            
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
</body>
</html>