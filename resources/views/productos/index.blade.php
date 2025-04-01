<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-screen h-screen mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{route('productos.create')}}" class="mt-3 ms-2 btn btn-primary">Agregar otro producto</a>
                </div>
                <div class="col-12 mt-3">
                    <table class="table table-bordered text-black ">
                        <tr class="">
                            <th>nombre</th>
                            <th>precio</th>
                            <th>cantidad</th>
                            <th>tipoProducto</th>
                            <th>imagen</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->tipoProducto}}</td>
                            <td>
                                <img src="/images/{{$producto->imagen}}" class="img-fluid" style="max-width: 100px; max-height: 100px;">
                            </td>
                            
                            <td>
                                <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-warning">Editar</a>

                                <form action="{{route('productos.destroy',$producto)}}" method="post" class="d-inline formEliminar">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$productos->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
