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
        <h1>Registro Encargado de Fundación</h1>

        {{-- MENSAJES DE ERROR --}}
        @if ($errors->any())
            <div class="alert alert-danger" style="background-color: #f8d7da; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
                <strong>Ups! Algo salió mal:</strong>
                <ul style="margin-top: 10px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('encargadofundacion.store') }}">
            @csrf

            <input type="hidden" name="fundacion_id" value="{{ $fundacionId }}">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required value="{{ old('nombre') }}">

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required value="{{ old('apellido') }}">

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono" required value="{{ old('telefono') }}">

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required value="{{ old('correo') }}">

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirmar contraseña">

            <button type="submit">Registrarse</button>
            <a href="{{ route('welcome') }}">Volver al inicio</a>
        </form>
    </div>
</body>
</html>
