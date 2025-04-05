<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión Vendedor</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Inicio de Sesión Vendedor</h1>
        <form id="loginVendedor" data-tipo="vendedor" method="POST" action="{{ route('login.vendedor.submit') }}">
            @csrf
            <label for="correoInicioVendedor">Correo Electrónico:</label>
            <input type="email" id="correoInicioVendedor" name="correoInicioVendedor" placeholder="Correo Electrónico" required>

            <label for="passwordInicioVendedor">Contraseña:</label>
            <input type="password" id="passwordInicioVendedor" name="passwordInicioVendedor" placeholder="Contraseña" required>

            <button type="submit">Iniciar Sesión</button>
        </form>

        <div class="enlaces">
            <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
            <a href="{{ route('register.vendedor') }}">No tienes una cuenta? Regístrate</a>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </div>
    </div>
    <script src="{{ asset('js/general.js') }}" defer></script>
</body>
</html>