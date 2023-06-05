<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carrito') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-0">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-plantilla>



                                @php
                                    $precio = 0;
                                @endphp
                                <div class="w-full bg-white px-10 py-10">
                                    <div class="flex justify-between border-b pb-8">
                                      <h1 style="'Roboto Condensed', sans-serif;" class=" text-2xl">SHOPPING CART</h1>
                                      <h2 style="'Roboto Condensed', sans-serif;" class=" text-2xl">{{ Auth::user()->carritos()->sum('cantidad') }}items</h2>
                                    </div>
                                    <div class="flex mt-10 mb-5">
                                        <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
                                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                                        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                                      </div>
                                      @foreach ($carritos as $carrito)
                                      <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                                    <div class="flex w-2/5"> <!-- producto -->
                                        <div class="w-20">
                                          <img class="h-24" src="{{$carrito->producto->imagen}}" alt="">
                                        </div>
                                        <div class="flex flex-col justify-between ml-4 flex-grow">
                                          <span class="font-bold text-sm">{{ $carrito->producto->titulo}}</span>
                                          <span class="text-red-500 text-xs">{{ $carrito->producto->descripcion}}</span>

                                         <form action="{{ route('eliminar', $carrito) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button type="submit"  class="btn underline text-xs">Eliminar</button>
                                        </form>
                                        </div>
                                      </div>
                                      <div class="flex justify-center w-1/5">
                                        <div class="text-sm text-gray-900 ">
                                            <form action="{{ route('restar', $carrito) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" style="border: 1px solid black;" class="px-2 py-4 text-sm text-black bg-transparent ">-</button>
                                            </form>
                                        </div>

                                        <input class="mx-2 border-none bg-transparent text-center  w-10" type="text" value="{{ $carrito->cantidad }}">

                                        <div class="text-sm text-gray-900 ">
                                            <form action="{{ route('sumar', $carrito) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" style="border: 1px solid black;" class="px-2 py-4 text-sm text-black bg-transparent ">+</button>
                                            </form>
                                        </div>
                                      </div>
                                      <span class="text-center w-1/5 font-semibold text-sm">{{ $carrito->producto->precio }}</span>
                                      <span class="text-center w-1/5 font-semibold text-sm">{{ $carrito->producto->precio * $carrito->cantidad }}</span>
                                    </div>
                                    @php
                                        // Para calcular el precio total
                                        $precio += $carrito->producto->precio * $carrito->cantidad;
                                    @endphp
                                @endforeach
                                </div>


                        <!-- Precio total -->
                        <p class="text-right">Total a pagar: <span id="total">{{$precio}}</span>&euro;</p>
                        <div class="mt-5">
                            <form action="{{route('vaciar')}}" method="post">
                                @csrf
                                @method('POST')
                                <button class="bg-red-300 border-solid-3 text-black px-7 py-2" type="submit"> Vaciar carrito</button>
                            </form>
                        </div>
                        <div class="mt-5">
                            <form action="{{route('stripe')}}" method="post">
                                @csrf
                                @method('POST')
                                <button class="animate-bounce bg-black text-white px-7 py-2" type="submit"> Realizar pedido</button>
                            </form>
                        </div>


                    </div>

                        <a href="{{ route('productos.index') }}" class="flex font-semibold justify-start text-indigo-600 text-sm mt-10">
                            <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                            Continuar Comprando
                          </a>

                    </x-plantilla>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</x-app-layout>
