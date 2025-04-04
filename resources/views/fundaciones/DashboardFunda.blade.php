<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/Dashboardgeneral.css') }}">
    <title>Dashboard Fundacion</title>
</head>
<body>
    <header>
        <a href="{{ route('welcome') }}">
            <img src="{{ asset('images/imagenes/IMAGENHOME-png.webp') }}" alt="Inicio" class="inicio">
        </a>
        <h1 class="titulo">Perfil animales</h1>
        <img src="{{ asset('images/imagenes/logo.png') }}" alt="Logo de la fundación" class="logo">
    </header>

    <section id="content">
        <nav>
            <i class='bx bx-dots-vertical-rounded' ></i>
            <form action="{{ route('tu.ruta.busqueda') }}" method="GET">
                @csrf
                <div class="form-input">
                    <input type="search" name="busqueda" placeholder="Buscando...">
                </div>
            </form>
        </nav>
        
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Notificaciones</h1>
                </div>
            </div>
            <div class="rejilla">
                <ul class="box-info">
                    <li>
                        <i class='bx bxs-message-check' ></i>
                        <span class="text">
                            <h3>43</h3>
                            <p>Solicitudes de Adopcion</p>
                        </span>
                    </li>
                </ul>

                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Adopciones Recientes</h3>
                            <i class='bx bx-search' ></i>
                            <i class='bx bx-filter' ></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <i class='bx bxs-user-circle'></i>
                                        <p>Maicol Gómez</p>
                                    </td>
                                    <td>05-12-2024</td>
                                    <td><span class="status completed">Completado</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class='bx bxs-user-circle'></i>
                                        <p>Valentina Sanches</p>
                                    </td>
                                    <td>05-12-2024</td>
                                    <td><span class="status pending">Pendiente</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class='bx bxs-user-circle'></i>
                                        <p>Juan Salamanca</p>
                                    </td>
                                    <td>05-12-2024</td>
                                    <td><span class="status process">En Procesos</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class='bx bxs-user-circle'></i>
                                        <p>Karen Rodrigez</p>
                                    </td>
                                    <td>05-12-2024</td>
                                    <td><span class="status completed">Completado</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class='bx bxs-user-circle'></i>
                                        <p>Karen Rodrigez</p>
                                    </td>
                                    <td>05-12-2024</td>
                                    <td><span class="status process">En Procesos</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class='bx bxs-user-circle'></i>
                                        <p>Karen Rodrigez</p>
                                    </td>
                                    <td>05-12-2024</td>
                                    <td><span class="status pending">Pendiente</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class='bx bxs-user-circle'></i>
                                        <p>Karen Rodrigez</p>
                                    </td>
                                    <td>05-12-2024</td>
                                    <td><span class="status completed">Completado</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="table-data">
                    <div class="todo">
                        <div class="head">
                            <h3>Donaciones</h3>
                            <i class='bx bx-plus' ></i>
                            <i class='bx bx-filter' ></i>
                        </div>
                        <ul class="todo-list">
                            <li class="completed">
                                <p>is simply dummy text of the printing </p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="completed">
                                <p>is simply dummy text of the printing </p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="not-completed">
                                <p>is simply dummy text of the printing </p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                            <li class="not-completed">
                                <p>is simply dummy text of the printing </p>
                                <i class='bx bx-dots-vertical-rounded' ></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>
</html>