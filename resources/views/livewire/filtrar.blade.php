<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-0">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 flex bg-white border-b border-gray-200">
                <x-plantilla>
 <div class="bg-white">
    {{-- Menú desplegable hecho con livewire no funciona si esta el buscador y el paginador --}}
        {{-- <select class="rounded-lg" name="famosoSelect" id="famosoSelect" wire:model="famosoSelect">
            <option value="All" selected> All</option>
            @foreach ($famosos as $famoso)
           <option value="{{$famoso->nombre}}" >{{$famoso->nombre}}</option>

           @endforeach

       </select> --}}

      {{-- Buscador de publicaciones realizado mediante livewire --}}
      <div class="flex">
        <input wire:model.debounce.1000ms="searchTerm" type="search" placeholder="Search" class=" shadow  appearance-none border rounded w-full py-2 m-5
        text-gray-700 mt-5 leading-tight focus:outline-none focus:shadow-outline placeholder-blue-400" name="" id="">
    </div>

     <!-- Ordenar por likes, no me ha dado tiempo -->
    {{-- <div>
        <label for="orden" class="mr-4">Ordenar por:</label>
        <select wire:model="orden" name="orden" id="orden">
            <option value="precio">Likes</option>
            <option value="duracion">Nombre</option>
        </select>
    </div> --}}



       <div class="mx-auto  max-w-2xl py-5 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            {{-- <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2> --}}

            <div
                class="mt-0 grid grid-cols-3 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

    @foreach ($publicaciones as $publicacion)
                                            <div class="group relative">
                                                <div
                                                    class="min-h-96 aspect-w-1 aspect-h-1  w-full overflow-hidden  hover:scale-110 rounded-md bg-white  lg:aspect-none lg:h-80">
                                                    <a href="{{route('show/publicacion', [$publicacion])}}">
                                                    <img src="{{$publicacion->foto}}"
                                                        alt="publicaciones"
                                                        class="bg-white object-cover object-center group-hover:opacity-75">
                                                    </a>
                                                    </div>




                                                <div class="mt-4 flex justify-between">
                                                    <div>
                                                        <h3 class="text-sm text-gray-700">
                                                            <a href="#">
                                                                {{ $publicacion->famoso->nombre }}
                                                            </a>
                                                        </h3>

                                                        <p class="mt-1 text-sm text-gray-500">
                                                            {{ $publicacion->descripcion }}</p>

                                                            <form action="{{ route('anadiralperfil', $publicacion) }}" method="POST">
                                                                @csrf
                                                                @method('POST')
                                                                <button type="submit" class="px-4 py-1 text-sm text-white bg-red-400 rounded">Save</button>
                                                            </form>
                                                            <br>
                                                             <!-- Likes publicaciones -->
                                                            <p class="animate-bounced text-red-400">
                                                                @if ($valoraciones->where('publicacion_id', $publicacion->id)->first() == null)
                                                                @else
                                                                 {{$valoraciones->where('publicacion_id', $publicacion->id)->count()}} 
                                                                    likes
                                                                @endif
                                                                </p>
                                                        <div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                            {{-- Paginador de publicaciones realizado mediante livewire --}}
                                            {{ $publicaciones->links() }}

                                </x-plantilla>
                            </div>
                            </div>
                            </div>
                            </div>


                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @livewireScripts
