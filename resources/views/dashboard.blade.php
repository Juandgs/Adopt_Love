<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adopt with Love - Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/616/616408.png" type="image/png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../Proyecto/index.html" style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 1.5rem;">Adopt with Love</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link btn btn-danger ms-2" id="logoutBtn" href="../Proyecto/login.html">
            <i class="fas fa-sign-out-alt me-1"></i> Cerrar Sesión
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="d-flex flex-grow-1">
    <!-- Menú Lateral -->
    <nav id="menuLateral" class="sidebar bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
      <h4 class="text-center">Dashboard</h4>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" href="#" data-target="seccion1">Registro de Tiendas y Fundaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#" data-target="seccion2">Productos</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link text-white" href="#" data-target="seccion3">Registro de Pagos</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link text-white" href="#" data-target="seccion4">Animales</a>
        </li>
      </ul>
    </nav>

    <!-- Contenido principal -->
    <main class="flex-grow-1 p-4">
      <!-- Sección 1 -->
      <section id="seccion1" class="d-none">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title">Registro de Tiendas y Fundaciones</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <canvas id="grafico1"></canvas>
              </div>
              <div class="col-md-6">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Fecha de Registro</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>Tienda A</td><td>Tienda</td><td>01/01/2025</td></tr>
                    <tr><td>Fundación X</td><td>Fundación</td><td>15/01/2025</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Sección 2 -->
      <section id="seccion2" class="d-none">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title">Productos</h5>
          </div>
          <form method="GET" action="{{ route('dashboard') }}">
    <select name="tipo" onchange="this.form.submit()">
        <option value="">-- Tipo --</option>
        @foreach($tiposProducto as $tipo)
            <option value="{{ $tipo }}" {{ request('tipo') == $tipo ? 'selected' : '' }}>
                {{ $tipo }}
            </option>
        @endforeach
    </select>
</form>



          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <canvas id="grafico2"></canvas>
                <div id="datos" data-conteo='@json($conteoPorTipoProducto)'></div>
              </div>
              <div class="col-md-6">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Precio</th>
                      <th>Cantidad</th>
                      <th>id_vendedor</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($productos as $producto)
                      <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->tipoProducto }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->vendedor_id }}</td>

                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="col-md-3 mb-3">
</div>
          </div>
        </div>
        <form action="{{ route('productos.pdf') }}" method="GET">
    <input type="hidden" name="tipo" value="{{ request('tipo') }}">
    <button type="submit" class="btn btn-danger">Descargar PDF</button>
</form>
      </section>

      <!-- Sección 3 -->
     <!-- <section id="seccion3" class="d-none">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title">3. Registro de Pagos</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <canvas id="grafico3"></canvas>
              </div>
              <div class="col-md-6">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Fecha</th>
                      <th>Monto</th>
                      <th>Estado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td>01/01/2025</td><td>$100</td><td>Pagado</td></tr>
                    <tr><td>15/01/2025</td><td>$200</td><td>Pagado</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>-->

      <!-- Sección 4 -->
      

      <section id="seccion4" class="d-none">
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="card-title">Animales</h5>
          </div>
        <form method="GET" action="{{ route('dashboard') }}">
          <select name="tipoA" onchange="this.form.submit()">
              <option value="">-- Tipo Animal --</option>
             @foreach($tiposAnimal as $tipoA)
                  <option value="{{ $tipoA }}" {{ request('tipoA') == $tipoA ? 'selected' : '' }}>
                      {{ $tipoA }}
                  </option>
              @endforeach
          </select>
        </form>


          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <canvas id="grafico4"></canvas>
                <div id="datosAnimales" data-conteo='@json($conteoPorTipoAnimal)'></div>
              </div>
              <div class="col-md-6">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Edad</th>
                      <th>Raza</th>
                      <th>Tipo Animal</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($animales as $animal)
                      <tr>
                        <td>{{ $animal->nombre }}</td>
                        <td>{{ $animal->edad }}</td>
                        <td>{{ $animal->raza }}</td>
                        <td>{{ $animal->tipoAnimal }}</td>
                      </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
            
            <div class="col-md-3 mb-3">
</div>
          </div>
        </div>
        <form action="{{ route('animales.pdf') }}" method="GET">
    <input type="hidden" name="tipo" value="{{ request('tipo') }}">
    <button type="submit" class="btn btn-danger">Descargar PDF</button>
</form>
      </section>



    </main>
  </div>

  <footer class="text-center py-4 mt-auto bg-dark text-white">
    <div class="container">
      <p class="mb-0">© 2025 Adopt with Love. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Script para gráfico dinámico -->
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const elemento = document.getElementById('datos');
    const datos = JSON.parse(elemento.dataset.conteo);

    const etiquetas = Object.keys(datos);
    const valores = Object.values(datos);

    // Lista predefinida de colores
    const coloresDisponibles = [
      '#236007', '#0e6251', '#641e16', '#20996a', '#14f19b',
      
    ];

    // Elegir colores aleatorios sin repetir
    const coloresUsados = [];
    while (coloresUsados.length < etiquetas.length && coloresDisponibles.length > 0) {
      const indice = Math.floor(Math.random() * coloresDisponibles.length);
      coloresUsados.push(coloresDisponibles.splice(indice, 1)[0]);
    }

    const ctx = document.getElementById("grafico2").getContext("2d");

    grafico2 = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: etiquetas,
        datasets: [{
          label: 'Productos Disponibles',
          data: valores,
          backgroundColor: coloresUsados
        }]
      }
    });
  });
</script>

<script>
  document.getElementById('filtroForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const tipo = document.getElementById('tipoSelect').value;

    fetch(`/dashboard?tipo=${tipo}`)
      .then(response => response.text())
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const nuevaTabla = doc.querySelector('#seccion2 .table tbody');

        // Reemplazar la tabla actual con los nuevos resultados
        document.querySelector('#seccion2 .table tbody').innerHTML = nuevaTabla.innerHTML;
      });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const elemento = document.getElementById('datosAnimales');
    const datosAnimales = JSON.parse(elemento.dataset.conteo);

    const etiquetas = Object.keys(datosAnimales);
    const valores = Object.values(datosAnimales);

    // Lista predefinida de colores
    const coloresDisponibles = [
      '#236007', '#0e6251', '#641e16', '#20996a', '#14f19b',
      
    ];

    // Elegir colores aleatorios sin repetir
    const coloresUsados = [];
    while (coloresUsados.length < etiquetas.length && coloresDisponibles.length > 0) {
      const indice = Math.floor(Math.random() * coloresDisponibles.length);
      coloresUsados.push(coloresDisponibles.splice(indice, 1)[0]);
    }

    const ctx = document.getElementById("grafico4").getContext("2d");

    grafico4 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: etiquetas,
        datasets: [{
          label: 'Animales registrados',
          data: valores,
          backgroundColor: coloresUsados
        }]
      }
    });
  });
</script>

<script>
  document.getElementById('filtroForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const tipo = document.getElementById('tipoSelect').value;

    fetch(`/dashboard?tipo=${tipo}`)
      .then(response => response.text())
      .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        const nuevaTabla = doc.querySelector('#seccion4 .table tbody');

        // Reemplazar la tabla actual con los nuevos resultados
        document.querySelector('#seccion4 .table tbody').innerHTML = nuevaTabla.innerHTML;
      });
  });
</script>


  <!-- Script personalizado -->
  <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
