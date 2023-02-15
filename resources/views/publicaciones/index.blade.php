<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicaciones') }}
        </h2>
    </x-slot>

                            <livewire:filtrar/>
                            {{-- <livewire:paginador/> --}}


</x-app-layout>
@include('components.footer')
@livewireScripts
