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
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1>Registro de Vendedor</h1>
    
        <form method="POST" action="{{ route('vendedores.store') }}">
            @csrf

            <label for="nombreEncargadoVendedor">Nombre Encargado:</label>
            <input type="text" id="nombreEncargadoVendedor" name="nombre" placeholder="Nombre Encargado" required>

            <label for="nombreEncargadoVendedor">Apellido Encargado:</label>
            <input type="text" id="nombreEncargadoVendedor" name="apellido" placeholder="Nombre Encargado" required>

            <label for="telefonoVendedor">Teléfono:</label>
            <input type="text" id="telefonoVendedor" name="telefono" placeholder="Teléfono" required>

            <label for="correoVendedor">Correo Electrónico:</label>
            <input type="email" id="correoVendedor" name="correo" placeholder="Correo Electrónico" required>

            <label for="passwordVendedor">Contraseña:</label>
            <input type="password" id="passwordVendedor" name="password" placeholder="Contraseña" required>

            <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirmar contraseña">

            <button type="submit">Registrarse</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
</body>
</html>