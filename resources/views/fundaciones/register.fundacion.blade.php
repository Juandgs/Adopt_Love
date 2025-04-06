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
        <form id="formFundacion" data-tipo="fundacion" method="POST" action="{{ route('register.fundacion.submit') }}">
            @csrf
            <label for="nombreEncargadoFundacion">Nombre Encargado:</label>
            <input type="text" id="nombreEncargadoFundacion" name="nombreEncargadoFundacion" placeholder="Nombre Encargado" required>

            <label for="telefonoFundacion">Teléfono Encargado:</label>
            <input type="text" id="telefonoFundacion" name="telefonoFundacion" placeholder="Teléfono Encargado" required>

            <label for="correoFundacion">Correo Electrónico Encargado:</label>
            <input type="email" id="correoFundacion" name="correoFundacion" placeholder="Correo Electrónico Encargado" required>

            <label for="passwordFundacion">Contraseña:</label>
            <input type="password" id="passwordFundacion" name="passwordFundacion" placeholder="Contraseña" required>

            <button type="submit">Registrarse</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
    <script src="{{ asset('js/general.js') }}" defer></script>
</body>
</html>