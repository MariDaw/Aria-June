<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold leading-tight">
            {{ __('Crear Link') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('link.store', $publicacion->id) }}" method="post" enctype="multipart/form-data">
                    @method('POST')
                    @csrf


                        {{-- Formulario Crear Producto Validado --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                            <div class="grid grid-cols-1">
                            <label for="prenda"
                                class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold @error('nombre') text-red-500 @enderror">
                                Prenda:
                            </label>
                            <input type="text" name="prenda" required
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent @error('nombre') border-red-500 @enderror"
                            value="{{ old('prenda', $link->prenda) }}">

                            </div>
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



                        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                            <a href="{{ route('publicaciones.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                            <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
                        </div>


                     </form>



                </div>
            </div>
        </x-app-layout>
