<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div>
                    <a href="{{route('productos.index')}}" class="btn btn-primary">Volver</a>
                    </div>
                    <form action="{{route('productos.update',$producto->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$producto->nombre}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <strong>Precio:</strong>
                                    <input type="number" name="precio" class="form-control" placeholder="Precio" value="{{$producto->precio}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <strong>Cantidad:</strong>
                                    <input type="number" name="cantidad" class="form-control" placeholder="Cantidad del Producto" value="{{$producto->cantidad}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <strong>Tipo de producto</strong>
                                    <input type="text" name="tipoProducto" class="form-control" placeholder="Tipo de producto" value="{{$producto->tipoProducto}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <strong>Imagen</strong>
                                    <img id="imagenSeleccionada" style="max-height: 200px;" class="mb-2" src="/images/{{$producto->imagen}}">
                                    <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                        <div class='flex flex-col items-center justify-center pt-3 pb-3 w-24 h-24'>
                                            <svg class='w-6 h-6 text-purple-400 group-hover:text-purple-600' fill='none' stroke='currentColor' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'>
                                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 4v16m8-8H4'></path>
                                            </svg>
                                            <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Agregar imagen</p>
                                        </div>
                                    <input name='imagen' id='imagen' type='file' class='hidden' />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 justify-center flex gap-4 text-center mt-2">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- Script para ver la imagen antes de CREAR UN NUEVO PRODUCTO -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  $(document).ready(function (e) {
    $('#imagen').change(function () {
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#imagenSeleccionada').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);
    });
  });
</script>
