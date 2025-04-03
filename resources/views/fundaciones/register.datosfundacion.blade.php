<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Adicional - Fundación</title>
    <link rel="stylesheet" href="{{ asset('vistas registros/estilos/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Información Adicional de la Fundación</h1>
        <form id="formInfoFundacion" method="POST" action="{{ route('register.datosfundacion.submit') }}">
            @csrf
            <label for="nombreFundacion">Nombre de la Fundación:</label>
            <input type="text" id="nombreFundacion" name="nombreFundacion" placeholder="Nombre de la Fundación" required>

            <label for="telefonoFundacion">Teléfono de la Fundación:</label>
            <input type="text" id="telefonoFundacion" name="telefonoFundacion" placeholder="Telefono de la Fundación" required>

            <label for="correoFundacion">Correo Electrónico de la Fundación:</label>
            <input type="text" id="correoFundacion" name="correoFundacion" placeholder="Correo electronico de la Fundación" required>

            <label for="direccionFundacion">Dirección:</label>
            <input type="text" id="direccionFundacion" name="direccionFundacion" placeholder="Dirección" required>

            <label for="ciudadFundacion">Ciudad:</label>
            <input type="text" id="ciudadFundacion" name="ciudadFundacion" placeholder="Ciudad" required>

            <label for="descripcionFundacion">Descripción de la Fundación:</label>
            <textarea id="descripcionFundacion" name="descripcionFundacion" placeholder="Descripción de la fundación" required></textarea>

            <label for="redesSocialesFundacion">Redes Sociales (opcional):</label>
            <input type="text" id="redesSocialesFundacion" name="redesSocialesFundacion" placeholder="Redes Sociales (opcional)">
            
            <button type="submit">Guardar Información</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
    <script src="{{ asset('Formulario.js') }}" defer></script>
</body>
</html>