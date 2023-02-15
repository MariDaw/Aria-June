<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel Contact US Form Example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="{{ asset('js/contacto.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">Laravel Contact US Form Example - ItSolutionStuff.com</h3>
                    </div>
                    <div class="card-body">

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        <form method="GET" action="{{ route('enviarCorreo') }}" id="contactUSForm">
                            @csrf
                            @method('GET')

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" name="nombre" id="nombre" aria-label="nombre" class="form-control" placeholder="Name" maxlength="20" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                                        title="Correo electronico incorrecto" required>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mensaje">Mensaje:</label>
                                        <textarea name="mensaje" id="mensaje" title="mensaje" cols="30" rows="10"  class="form-control"  required></textarea>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" id="btnenviar" class="btn btn-success btn-submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
