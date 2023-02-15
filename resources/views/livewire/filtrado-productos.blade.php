<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-0">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="ml-180">
                    <x-plantilla>

                        <div class="bg-white">
                             <!-- Menú Desplegable con livewire -->
                            <select name="productoSelect" id="productoSelect" wire:model="productoSelect">
                                <option value="All" selected>All</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->nombre }}">{{ $categoria->nombre }}</option>
                                @endforeach

                            </select>
                            <div class="mx-auto mt-0 max-w-1xl py-3 sm:py-5 sm:px-0 lg:max-w-7xl lg:px-8">
                                <h2 class="sr-only">Products</h2>
                                {{-- {{ $query }} --}}
                                {{-- <div>
                                    <input wire:model.debounce.500ms="productoSelect" type="search" placeholder="Buscar" class="shadow appearance-none border rounded w-full py-2 -m-3
                                    text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder-blue-400" name="" id="">
                                </div> --}}

                                <div
                                class="grid grid-cols-1 mt-10 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                                @foreach ($productos as $producto)
                                    <a href="{{ route('show/producto', [$producto]) }}">
                                        <div class="group">
                                                <div
                                                    class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                                                    <img src="{{$producto->foto}}"
                                                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                                                </div>
                                                <h3 class="mt-4 text-sm text-gray-700">{{ $producto->titulo }}</h3>
                                                <h2 class="mt-2 text-sm text-gray-600">{{ $producto->descripcion }}</h2>
                                                <p class="mt-1 text-lg font-medium text-gray-900">
                                                    {{ $producto->precio }}&euro;</p>
                                                <div class=" flex text-sm text-gray-900 ">
                                                     <!-- Añadir al carrito -->
                                                    <form action="{{ route('anadiralcarrito', $producto) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit"
                                                            class="px-4 py-1 text-sm text-white bg-red-400 rounded">Añadir
                                                            al carrito</button>
                                                    </form>
                                                     <!-- Añadir producto al perfil -->
                                                    <form action="{{ route('productoperfil', $producto) }}" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" class="px-4 py-1 text-sm ml-16 text-white mb-5 bg-black  rounded">Save</button>

                                                    </form>

                                                </div>
                                        </div>
                                    </a>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- {{ $productos->links() }} --}}
                            </div>
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @livewireScripts
