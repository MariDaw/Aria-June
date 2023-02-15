<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aria</title>

        {{--  Favicon --}}
        <link rel="icon" type="image/jpg" href="{{asset('img/favicon.png')}}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amarante&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            #container {

            }

            #header {
                margin: 0% 2%;
                padding: 0% 0%;
                --bg-opacity:1;
                background-color: rgb(254 202 202 /var(--bg-opacity));
                display: flex;
            }

            #titulo {
                justify-content: start;
                width: 100%;
                margin: 0%;
            }

            #menu{
                margin: 0% 2%;
                margin-top: 0%;
                display: flex;
                --bg-opacity:1;
                background-color: white;

            }
            ul#home{
                background-color: #2bce90d0;
                margin: 0%
                width: 30%;
                height: 100%;
                padding: 1% 4%;
                list-style: none;
            }

            #home img{
                align-items: center;
            }

            ul#posts{
                background-color: #7283E1;
                margin: 0%
                width: 30%;
                height: 100%;
                padding: 1% 4%;
                list-style: none;
            }

            ul#tienda{
                background-color: #fcde468a;
                margin: 0%
                width: 30%;
                height: 100%;
                padding: 1% 4%;
                list-style: none;
            }

            #subtitle{
                background-color: white;
                border: 1px 0px 0px 0px solid gainsboro;
                padding: 2% 4.5%;
                font-weight: 600;
                line-height: 1.25;
                font-size: 1.25rem;

                --text-opacity:1;
                color: rgb(31 41 55 / var(--text-opacity));


            }
        </style>

        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">



        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">

        <div id="container">
            <header id="header">
                <a  href="{{ route('login') }}">
                    <x-application-logo class="block h-10 w-auto fill-current" />
                </a>
            </header>
            <nav id="menu">
                <ul id="home">
                  <li><a href="/"><img class="flex ml-0  hover:scale-110" src="{{url('../img/hogar.png') }}" alt="Home"></a></li>
                </ul>
                <ul id="posts">
                    <li><a href="publicacion"><img class="flex ml-0 hover:scale-110" src="{{url('../img/brujula.png') }}" alt="Publicaciones"></a></li>
                </ul>
                <ul id="tienda">
                    <li><a href=""><img class="flex ml-0 hover:scale-110" src="{{url('../img/shop.png') }}" alt="Tienda"></a></li>
                </ul>
              </nav>


              <div id="subtitle">
                <h1>Publicaciones</h1>
              </div>
              <div class="bg-gray-300 py-3">
            </br>
            </div>

        <div class="py-0 mx-6  mt-0 ">
            <div class="max-w-auto mx-auto sm:px-2 lg:px-0 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-10 py-4">
                    <div class="p-6 bg-white">

                              <div class="bg-white">
                                <div class="mx-auto max-w-2xl py-0 px-4 sm:py-12 sm:px-6 lg:max-w-7xl lg:px-8">

                                  <div class="mt-0 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                                    <div class="group relative">
                                      <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                        <a href="{{ route('login') }}"><img src="../img/publicaciones/kendall1.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                      </div>
                                      <div class="mt-4 flex justify-between">
                                        <div>
                                          <h3 class="text-sm text-gray-700">
                                            <a href="{{ route('login') }}">
                                              <span aria-hidden="true" class="absolute inset-0"></span>
                                              Kendall
                                            </a>
                                          </h3>
                                          <p class="mt-1 text-sm text-gray-500">Milan Runaway</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="group relative">
                                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                            <a href="{{ route('login') }}"><img src="../img/publicaciones/kendall2.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                          <div>
                                            <h3 class="text-sm text-gray-700">
                                              <a href="{{ route('login') }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Kendall
                                              </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">NY Street</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="group relative">
                                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                        <a href="{{ route('login') }}"><img src="../img/publicaciones/bella1.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                          <div>
                                            <h3 class="text-sm text-gray-700">
                                              <a href="{{ route('login') }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Bella
                                              </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Fashion Week</p>
                                          </div>

                                        </div>
                                      </div>
                                      <div class="group relative">
                                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                        <a href="{{ route('login') }}"><img src="../img/publicaciones/bella2.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                          <div>
                                            <h3 class="text-sm text-gray-700">
                                              <a href="{{ route('login') }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Bella
                                              </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">NY Street</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="group relative">
                                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                        <a href="{{ route('login') }}"><img src="../img/publicaciones/gigi1.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                          <div>
                                            <h3 class="text-sm text-gray-700">
                                              <a href="{{ route('login') }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Basic Tee
                                              </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Paris Runaway</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="group relative">
                                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                            <a href="{{ route('login') }}"><img src="../img/publicaciones/rosalia1.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                          <div>
                                            <h3 class="text-sm text-gray-700">
                                              <a href="{{ route('login') }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Rosalía
                                              </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Music Awards</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="group relative">
                                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                            <a href="{{ route('login') }}"><img src="../img/publicaciones/dualipa1.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                          <div>
                                            <h3 class="text-sm text-gray-700">
                                              <a href="{{ route('login') }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Dua Lipa
                                              </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">London Street</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="group relative">
                                        <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                                            <a href="{{ route('login') }}"><img src="../img/publicaciones/dualipa2.jpg" alt="Publicacion" class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                          <div>
                                            <h3 class="text-sm text-gray-700">
                                              <a href="{{ route('login') }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                Dua Lipa
                                              </a>
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-500">Music Awards</p>
                                          </div>
                                        </div>
                                      </div>








                                    <!-- More products... -->
                                  </div>
                                </div>
                              </div>



                      @if (Route::has('login'))
                          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                              @auth
                                  <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                              @else
                                  <a href="{{ route('login') }}" class="text-sm text-gray-700 mr-4 dark:text-gray-500 underline">Iniciar Sesión</a>

                                  @if (Route::has('register'))
                                      <a href="{{ route('register') }}" class="mr-8 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                                  @endif
                              @endauth
                          </div>
                      @endif
                  </div>



                             </div>
                          </div>
                    </div>
                </div>
            </div>
            @include('components.footer')
        </div>
    </body>
</html>
