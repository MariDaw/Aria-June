<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>

    </x-slot>

    <div class="py-12  mt-0 mx-10">
        <div class="max-w-auto mx-auto sm:px-2 lg:px-0 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-10 py-4">
                <div class="p-0 bg-white  border-gray-200">
                    <a href="{{ route('dashboard') }}" class="flex font-semibold justify-start text-indigo-600 text-sm mt-2">
                        Volver
                      </a>
                      <section class="bg-white dark:bg-gray-900 ">
                        <div class="card-body">

                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif


                        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md" style="font-family: 'Roboto Condensed', sans-serif">
                            <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white" >Contáctanos!</h2>
                            <p class="mb-8 lg:mb-16 font-light text-sm text-center text-gray-500 dark:text-gray-400 ">¿Tienes un problema técnico? ¿Quiere enviar comentarios sobre alguna incidencia? ¿Necesitas ponerte en contacto con el equipo? Haznos saber.</p>
                            <div class="form-contacto">
                            <form class="form" method="POST" action="{{ route('enviarCorreo') }}" id="contactUSForm">
                                @csrf
                                @method('POST')
                                <div>
                                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre</label>
                                    <input  type="text" name="nombre" id="nombre" aria-label="nombre" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" maxlength="20" placeholder="ex. Juan" required>
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                    <input  type="email" id="email" name="email" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@name.com"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                                    title="Correo electronico incorrecto" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="mensaje" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Mensaje</label>
                                    <textarea  id="mensaje" name="mensaje" id="mensaje" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deja un comentario..."></textarea>
                                </div>
                                <button type="submit" id="btnenviar" class="py-3 px-5 text-sm font-medium text-center text-black rounded-lg bg-lime-300 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Enviar mensaje</button>
                            </form>
                        </div>
                        </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>

    </div>


    @include('components.footer')
</x-app-layout>
