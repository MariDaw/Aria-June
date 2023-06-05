<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-0">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <x-plantilla>

    <div class="p-16">
        <div class="p-8 bg-white mt-24">
          <div class="grid grid-cols-1 ">

            <div class="relative">
              <div class="w-48 h-48 bg-indigo-100 mx-auto rounded-full absolute inset-x-0 top-0 -mt-48 flex items-center justify-center text-indigo-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
              </div>
            </div>
          </div>

          <div class="mt-7 text-center border-b pb-12">
            <h1 class="text-4xl font-medium text-gray-700">{{Auth::user()->name}}</h1>
            <p class="font-light text-gray-600 mt-3">{{Auth::user()->email}}</p>
          </div>


        </div>
        <div class="flex w-full h-auto  mt-0">


            <div class="mx-0  grid grid-cols-2 max-w-2xl py-5 px-0 sm:py-5 sm:px-0 lg:max-w-7xl lg:px-8">
                 <!-- Guarda las publicaciones en el perfil -->
                <div class=" mx-10 ">
                <h2 class="text-2xl flex p-2 w-full tracking-tight text-gray-600" style="font-family: 'Roboto Condensed', sans-serif; background-color: white;"><img class="mr-3" src="img/save.png" alt=""> PUBLICACIONES GUARDADAS
                </h2>
                <div class="border border-b mb-4"></div>
                <div
                    class="mt-0 grid grid-cols-3 gap-y-10 gap-x-6 ">
                    @foreach ($saves as $save)
                        <div class="group relative">
                            <div
                                class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden  hover:scale-110 rounded-md">
                                <a href="{{ route('show/publicacion', [$save->publicacion]) }}">
                                    <img src="{{asset('../'.$save->publicacion->foto)}}"
                                        alt="{{$save->publicacion->famoso->nombre}}"
                                        class="h-48 w-40  object-center ">
                                </a>
                            </div>

                            <div class="mt-1 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-black">
                                        <a href="#">
                                            {{ $save->publicacion->famoso->nombre }}
                                        </a>
                                    </h3>

                                    <form action="{{ route('unsave', $save) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="px-3 py-0 text-sm text-white bg-black rounded">Eliminar</button>
                                </form>


                                </div>
                            </div>
                        </div>

        @endforeach
    </div>
    </div>

    <div class=" mx-10">
         <!-- Guarda los productos en el perfil -->
    <h2 class="text-2xl flex p-2 w-full tracking-tight text-gray-600" style="font-family: 'Roboto Condensed', sans-serif; background-color: white;"><img class="mr-3" src="img/save.png" alt=""> PRODUCTOS GUARDADOS
    </h2>
    <div class="border border-b mb-4"></div>
    <div
                    class="mt-0 grid grid-cols-3 gap-y-10 gap-x-6 ">
                    @foreach ($savePros as $savePro)
                        <div class="group relative">
                            {{-- {{$savePro->user_id}} --}}
                            <div
                                class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden  hover:scale-110 rounded-md ">
                                <a href="{{ route('show/producto', [$savePro->producto]) }}">
                                    <img src="{{asset('../'.$savePro->producto->imagen)}}"
                                        alt="{{$savePro->producto->titulo}}"
                                        class="h-48 w-40  object-center ">
                                </a>
                            </div>

                            <div class="mt-1 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-black">
                                        <a href="#">
                                            {{ $savePro->producto->titulo }}
                                        </a>
                                    </h3>


                                        <form action="{{ route('unproduct', $savePro) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="px-3 py-0 text-sm text-white bg-black rounded">Eliminar</button>
                                        </form>

                                </form>


                                </div>
                            </div>
                        </div>

        @endforeach
    </div>
    </div>
</div>
</div>
</div>
</x-plantilla>
        </div>





        </div>
    </div>
    </div>
    </div>
    @include('components.footer')
</x-app-layout>
