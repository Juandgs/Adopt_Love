<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Adicional - Fundación</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Información Adicional de la Fundación</h1>
        <form method="POST" action="/register/fundacion/store">
            @csrf
            
            <label for="nombreFundacion">Nombre de la Fundación:</label>
            <input type="text" id="nombreFundacion" name="nombre" placeholder="Nombre de la Fundación" required>

            <label for="telefonoFundacion">Teléfono de la Fundación:</label>
            <input type="text" id="telefonoFundacion" name="telefono" placeholder="Telefono de la Fundación" required>

            <label for="correoFundacion">Correo Electrónico de la Fundación:</label>
            <input type="text" id="correoFundacion" name="correo" placeholder="Correo electronico de la Fundación" required>

            <label for="ciudadFundacion">Ciudad:</label>
            <input type="text" id="ciudadFundacion" name="ciudad" placeholder="Ciudad" required>

            <label for="descripcionFundacion">Descripción de la Fundación:</label>
            <textarea id="descripcionFundacion" name="descripcion" placeholder="Descripción de la fundación" required></textarea>
            
            <button type="submit">Guardar Información</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
    <script src="{{ asset('js/Formulario.js') }}" defer></script>
</body>
</html>