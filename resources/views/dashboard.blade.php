<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>

    </x-slot>

    <div class="py-12 mx-10 mt-0">
        <div class="max-w-auto mx-auto sm:px-2 lg:px-0 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-10 py-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('publicaciones.index') }}" class="flex font-semibold justify-start text-indigo-600 text-sm mt-2">
                        Ver más!
                      </a>
                    <div class="flex ">
                        <a href="{{ route('publicaciones.index') }}" class=""><img class="border-1 m-2 w-60 h-96 hover:scale-105" src="img/home2.jpg"  alt="Home Explorer"></a>
                        <a href="{{ route('publicaciones.index') }}" class=""><img class="border-1 m-2 w-60 h-96 hover:scale-105" src="img/home3.jpg"  alt="Home Explorer"></a>
                        <a href="{{ route('publicaciones.index') }}" class=""><img class="border-1 m-2 w-60 h-96 hover:scale-105" src="img/home4.jpg"  alt="Home Explorer"></a>
                        <a href="{{ route('publicaciones.index') }}" class=""><img class="border-1 m-2 w-60 h-96 hover:scale-105" src="img/home1.jpg"  alt="Home Explorer"></a>
                    </div>
                    <div class="border-b-2 border-black mt-7 ">
                        <h3 class="text-xl text-black ">NUESTRAS MARCAS!</h3>
                    </div>
                    <div class="flex ">
                        <a href="https://www2.hm.com/es_es/index.html"><img class="border-1 m-2" src="img/hym.jpg" width="150px" height="150px" alt="Brands"></a>
                        <a href="https://www.zara.com/es/"><img class="border-1 m-2" src="img/zara.jpg" width="150px" height="150px" alt="Brands"></a>
                        <a href="https://www.pullandbear.com/es/"><img class="border-1 m-2" src="img/pyb.jpg" width="150px" height="150px" alt="Brands"></a>
                        <a href="https://www.urbanoutfitters.com/es-es/?ss=us_es"><img class="border-1 m-2" src="img/urban.jpg" width="150px" height="150px" alt="Brands"></a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @include('components.footer')
</x-app-layout>
