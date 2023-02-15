<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>


    <livewire:filtrado-productos/>
</x-app-layout>
@include('components.footer')
