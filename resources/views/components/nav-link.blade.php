@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center  px-1 pt-1  text-sm font-medium leading-5 text-black focus:outline-none  transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1  border-transparent text-sm font-medium leading-5 text-black hover:text-gray-700  focus:outline-none focus:text-gray-700  transition duration-150 ease-in-out';
@endphp

<style>
    #menu{
        width: 100%;
    }
</style>

<a id="menu"  {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
