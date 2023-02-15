<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Aria</title>

        {{--  Favicon --}}
        <link rel="icon" type="image/jpg"  href="{{asset('img/favicon.png')}}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amarante&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> --}}


        <!-- Styles -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style type="text/css">
        body {
            background-color: rgba(255, 0, 0, 0.267);
            /* background-image: url('../img/fondo.png'); */

        }

        .parent{
            display: flex;
            margin: 10% 10%;
        }
        .container {
            justify-content: center;
        }
        .panel-default>.panel-heading{
            background-color: white;

        }
        .panel-title {
        display: inline;
        text-align: center;
        font-weight: bold;
        padding: 1%;
        background-color: white;
        font-family: 'Roboto Condensed', sans-serif;
        }
        .display-table {
            display: table;
            background-color: white;
        }
        .display-tr {
            display: table-row;
            background-color: white;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
            background-color: white;
        }
    </style>
</head>
<body class="parent" class="">

<div class="container">
    <a href="{{ route('productos.index') }}" class="flex font-semibold justify-start text-indigo-600 text-sm mt-3">

        Volver
      </a>
    <div class="row">
        <div class="mt-36 col-md-6 col-md-offset-3 bg-red-200">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td">Detalles del pago</h3>
                        <div class="display-td">
                            <img src="img/tarjeta-de-credito.png" class="img-responsive pull-right" >

                        </div>
                    </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form
                            role="form"
                            action="{{ route('stripe.post') }}"
                            method="post"
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Nombre</label> <input
                                    class='form-control' size='4' placeholder='ex. Juan' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Número de Tarjeta</label> <input
                                    autocomplete='off' class='form-control card-number' placeholder='0000 0000 0000 0000' size='20'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Mes de Expiración</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Año de Expiración</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>

                        @foreach ($carritos as $carrito )
                        @php
                            $precio = 0;
                            $precio += $carrito->producto->precio * $carrito->cantidad;
                        @endphp
                        @endforeach

                        <div class="row">
                            <div class="col-xs-12">
                                {{-- <button class="btn btn-primary btn-lg  btn-block" type="submit">Pagar ({{$precio}})&euro;</button> --}}
                                <button class="btn btn-primary btn-lg  btn-block" type="submit">Pagar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(function() {

    var $form         = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }

  });

  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});
</script>
</html>
