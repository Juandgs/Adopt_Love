<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Productos</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2>Reporte de Animales</h2>
    @if ($tipo)
        <p><strong>Filtro aplicado - Tipo:</strong> {{ $tipo}}</p>
    @endif

    <table>
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
</body>
</html>
