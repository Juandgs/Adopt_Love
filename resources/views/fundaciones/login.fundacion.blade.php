<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión Fundación</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Inicio de Sesión Fundación</h1>
        <form id="loginFundacion" data-tipo="fundacion" method="POST" action="{{ route('login.fundacion.submit') }}">
            @csrf
            <label for="correoInicioFundacion">Correo Electrónico:</label>
            <input type="email" id="correoInicioFundacion" name="correoInicioFundacion" placeholder="Correo Electrónico" required>

            <label for="passwordInicioFundacion">Contraseña:</label>
            <input type="password" id="passwordInicioFundacion" name="passwordInicioFundacion" placeholder="Contraseña" required>

            <button type="submit">Iniciar Sesión</button>
        </form>

        <div class="enlaces">
            <a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
            <a href="{{ route('register.fundacion') }}">No tienes una cuenta? Regístrate</a>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </div>
    </div>
    <script src="{{ asset('js/general.js') }}" defer></script>
</body>
</html>