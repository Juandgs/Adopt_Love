<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión Cliente</title>
    <link rel="stylesheet" href="{{ asset('estilos/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Inicio de Sesión Cliente</h1>
        <form id="loginCliente" data-tipo="cliente" method="POST" action="{{ route('login.cliente.submit') }}">
            @csrf
            <label for="correoInicioCliente">Correo Electrónico:</label>
            <input type="email" id="correoInicioCliente" name="correoInicioCliente" placeholder="Correo Electrónico" required>

            <label for="passwordInicioCliente">Contraseña:</label>
            <input type="password" id="passwordInicioCliente" name="passwordInicioCliente" placeholder="Contraseña" required>

            <button type="submit">Iniciar Sesión</button>
        </form>

        <div class="enlaces">
            <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
            <a href="{{ route('register.cliente') }}">No tienes una cuenta? Regístrate</a>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </div>
    </div>
    <script src="{{ asset('js/general.js') }}"></script>

</body>
</html>