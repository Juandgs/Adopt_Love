<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de usuario</title>
    <link rel="stylesheet" href="{{ asset('css/Inicio.css') }}">
</head>
<body>
    <section id="cabeza">
        <header id="inicio">
            <div class="blanco"></div>
            <div class="dec"></div>
            <div class="dec2"></div>
            <h1>Usuario</h1>
            <img src="{{ asset('images/Logo.jpg') }}" alt="Logo" class="logo">
        </header>
    </section>
    <div class="separacion"></div>
    <div id="tipo_usuario">
        <div class="TU">
        <button class="iniciar_sesion">
            <img src="{{ asset('images/fondTienda.jpg') }}">
            <h1><a href="{{ route('login') }}">Vendedor</a></h1>
        </button>
        <button class="iniciar_sesion" >
            <img src="{{ asset('images/fondInteresado.png') }}">
            <h1><a href="{{ route('login') }}">Interesado</a></h1>
        </button>
        <button class="iniciar_sesion" >
            <img src="{{ asset('images/fondFundacion.jpg') }}">
            <h1><a href="{{ route('login') }}">Fundacion</a></h1>
        </button>
        
    </div>
    <div class="separacion"></div>
</body>
</html>