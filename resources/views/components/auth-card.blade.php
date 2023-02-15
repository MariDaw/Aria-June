<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  relative bg-fixed bg-center bg-cover bg-no-repeat"  style="background-image:linear-gradient(rgba(255, 255, 255, 0.726), rgba(222, 179, 240, 0.438)), url(img/fondo.png)">
    {{-- <div>
        {{ $logo }}
    </div> --}}
    <div class="backdrop-blur-3xl"></div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
