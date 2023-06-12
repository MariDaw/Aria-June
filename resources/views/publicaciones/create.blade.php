<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            {{ __('Crear publicación') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('publicaciones.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        {{-- Formulario Crear Publicación Validado --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                            <div class="grid grid-cols-1">
                            <label for="titulo"
                                class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold @error('nombre') text-red-500 @enderror">
                                Titulo:
                            </label>
                            <input type="text" name="titulo" required
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('nombre') border-red-500 @enderror"
                            value="{{ old('titulo', $publicacion->titulo) }}">

                            </div>
                            <div class="grid grid-cols-1">
                                <label for="descripcion"
                                    class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold @error('descripcion') text-red-500 @enderror">
                                    Descripción:
                                </label>
                                <input type="text" name="descripcion"  required
                                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('descripcion') border-red-500 @enderror"
                                    value="{{ old('descripcion', $publicacion->descripcion) }}">
                            </div>

                            <h3>PRENDAS</h3>




                            <div class="form-group">
                                <label for="links">Links por prenda:</label>

                                <div id="prendas-container">
                                    <div class="link-group">
                                        <div class="grid grid-cols-1">
                                            <label for="prenda"
                                                class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold @error('prenda') text-red-500 @enderror">
                                                Prenda:
                                            </label>
                                            <input type="text" name="prenda"  required
                                                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('prenda') border-red-500 @enderror"
                                                value="{{ old('prenda', $link->prenda) }}">
                                        </div>
                                        {{-- <input type="text" name="links[]" class="form-control" placeholder="Link"> --}}
                                        <div class="grid grid-cols-1">
                                            <label for="url"
                                                class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold @error('url') text-red-500 @enderror">
                                                URL:
                                            </label>
                                            <input type="text" name="url"  required
                                                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('url') border-red-500 @enderror"
                                                value="{{ old('url', $link->url) }}">
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary" id="add-prenda-btn">Agregar otro link</button>
                            </div>





                        </div>

                        <!-- Para ver la imagen seleccionada, de lo contrario no se ve-->
                        <div class="grid grid-cols-1 mt-5 mx-7">
                            <img id="imagenSeleccionada" style="max-height: 300px;">
                        </div>

                        <div class="grid grid-cols-1 mt-5 mx-7">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Subir Imagen</label>
                            <div class='flex items-center justify-center w-full'>
                                <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group @error('foto') text-red-500 @enderror'>
                                    <div class='flex flex-col items-center justify-center pt-7'>
                                    <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class='text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                                    </div>
                                <input name="foto" id="foto" type='file' class="hidden @error('foto') border-red-500 @enderror"  value="{{ old('foto', $publicacion->foto) }}"/>
                                </label>
                            </div>
                        </div>





                        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                            <a href="{{ route('publicaciones.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                            <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </x-app-layout>

        <!-- Script para ver la imagen antes de CREAR UNA NUEVA PUBLICACIÓN -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function (e) {
                $('#foto').change(function(){
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        $('#imagenSeleccionada').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                });
            });
        </script>
{{-- Agregar otro link --}}

<script>
    document.getElementById('add-prenda-btn').addEventListener('click', function() {
        var prendasContainer = document.getElementById('prendas-container');
        var prendaDiv = document.createElement('div');
        prendaDiv.classList.add('prenda');
        prendaDiv.innerHTML = `
            <input type="text" name="prenda[]" placeholder="Nombre de la prenda">
            <input type="text" name="url[]" placeholder="URL del enlace">
        `;
        prendasContainer.appendChild(prendaDiv);
    });
</script>
