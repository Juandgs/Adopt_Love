<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Animal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-screen h-screen mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('animales.create') }}" class="mt-3 ms-2 btn btn-primary">Agregar otro Animal</a>
                </div>

                {{-- Filtro de tipoAnimal --}}
                <div class="px-6">
                    <form method="GET" action="{{ route('animales.filtro2') }}">
                        <div class="controls-container mb-4">
                            <label for="tipoAnimal" class="me-2">Filtrar por tipo de animal:</label>
                            <select name="tipoAnimal" id="tipoAnimal" class="category-dropdown form-select d-inline w-auto" onchange="this.form.submit()">
                                <option value="">Todos los animales</option>
                                <option value="Perro" {{ request('tipoAnimal') == 'Perro' ? 'selected' : '' }}>Perros</option>
                                <option value="Gato" {{ request('tipoAnimal') == 'Gato' ? 'selected' : '' }}>Gatos</option>
                            </select>
                        </div>
                    </form>
                </div>

                {{-- Tabla de Animales --}}
                <div class="col-12 mt-3 px-6">
                    <table class="table table-bordered text-black">
                        <tr>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Raza</th>
                            <th>Tipo de Animal</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach ($animales as $animale)
                            <tr>
                                <td>{{ $animale->nombre }}</td>
                                <td>{{ $animale->edad }}</td>
                                <td>{{ $animale->raza }}</td>
                                <td>{{ $animale->tipoAnimal }}</td>
                                <td>
                                    <img src="/images/{{ $animale->imagen }}" class="img-fluid" style="max-width: 100px; max-height: 100px;">
                                </td>
                                <td>
                                    <a href="{{ route('animales.edit', $animale->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('animales.destroy', $animale) }}" method="post" class="d-inline formEliminar">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>   
                        @endforeach
                    </table>

                    {{-- Paginación --}}
                    {{ $animales->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
