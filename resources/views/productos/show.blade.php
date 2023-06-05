<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex bg-white border-b border-gray-200">
                    <x-plantilla>
                        <div class="bg-white">

                            <div class="mx-auto  max-w-2xl py-5 px-4 sm:py-10 sm:px-6 lg:max-w-7xl lg:px-8">
                                <a href="{{ route('productos.index') }}" class="flex font-semibold justify-start text-indigo-600 text-sm mt-0">
                                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>

                                  </a>
                                <div
                                    class="mt-0 mx-10 grid grid-cols-2  ">

                                    <div class="group relative ">
                                        {{-- <h2 class="text-3xl mt-0 mb-3 text-gray-700">
                                                       <a href="#">

                                                           {{ $producto->titulo }}
                                                       </a>
                                                   </h2> --}}

                                        <div
                                            class=" ml-32 aspect-w-1 aspect-h-1 w-[400px] h-[500px] overflow-hidden rounded-md bg-gray-200  ">
                                            <a href="{{ route('show/producto', [$producto]) }}">

                                                <img src="{{asset('../'.$producto->imagen)}}"
                                                    alt="Producto"
                                                    class="h-96 w-96 p-12   bg-white object-center lg:h-full lg:w-full">{{$producto->imagen}}
                                            </a>
                                        </div>
                                        </div>
                                        <div class=" my-28 py-0 text-left pl-10 " style="font-family: 'Roboto Condensed', sans-serif">
                                        <h3 class="mb-0 text-4xl text-black text-bold ">{{ $producto->titulo }}</h3>
                                        <div class="border mb-5 mr-32 border-b-2"></div>
                                        <a href="{{ route('productos.index') }}" class=" text-xs text-lime-600 border-b-black-2">Comprar todo Aria</a>
                                        <p class=" w-520 mt-1  text-base text-gray-500">
                                            {{ $producto->descripcion }}</p>
                                        <p class="mt-1 text-lg font-medium text-red-800">{{ $producto->precio }}&euro;
                                        </p>
                                        <div class="text-sm mt-5 text-gray-900 ">
                                            <form action="{{ route('productoperfil', $producto) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="px-4 py-1 text-sm mt-5 text-white mb-5 bg-red-400  rounded">Save</button>

                                            </form>

                                        </div>
                                        <div class="text-sm mt-5 text-gray-900 ">
                                            <form action="{{ route('anadiralcarrito', $producto) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit"
                                                    class="px-10 py-2 text-lg text-white bg-black">Añadir al
                                                    carrito</button>
                                            </form>

                                        </div>
                                    </div>

                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>
