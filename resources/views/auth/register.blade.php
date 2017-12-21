<!doctype html>
{{-- agarra el idioma local --}}
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="icon" href="{{ url('img/ico.png') }}" type="image/x-icon"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
{{--         <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <link href="{{ url('css/estilo.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">   
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <title>Signar</title>

    </head>

    <body class="landingBody">
        <div class="landingContenido">
            <div class="landingExplicacion">
                <div class="landingTitulo"><h2>signar</h2></div>
                <div class="landingTexto"><p>   Registrate ahora en nuestra web, para disfrutar todo el contenido de nuestro raro proyecto musical. (si ya tienes cuenta toca el boton de login)                </div>
                <div class="landingInicioBot"><a class='landingAInicio' href="{{route('login')}}"><button class="landingInicioButton">login</button></a></div>
            </div>
            <div class="landingRegistro">
                <div class="landingRegistroTitulo"><h2>registro</h2></div>
                <div class="landingFormulario">
                    <form method="POST" action="{{ url('register') }}">
                       
                        {!! csrf_field() !!}
                        
                        <input class="landingInputs landingNombre" name='name' type="name" placeholder=" nombre" value=''>
                        <i style="margin-left:2px; color:transparent;" class="registroCheckNombre fa fa-check" aria-hidden="true"></i><br>
                        <div class="landingTextVal">
                                <p class="registroTextoNombre" style="display: inline-block; color:transparent;">.</p>
                                {!! $errors->first('name', '<p style="display:inline-block;" class="landingTextVal">tienes que escribir tu nombre</p>')!!}
                        </div>
                        
                        <input class="landingInputs landingEmail" name='email' type="email" placeholder=" email" value=''>
                        <i style="margin-left:2px; color:transparent;" class="registroCheckEmail fa fa-check" aria-hidden="true"></i><br>
                        <div class="landingTextVal">
                                <p class="registroTextoEmail" style="display: inline-block; color:transparent;">.</p>
                                {!! $errors->first('email', '<p style="display:inline-block;" class="landingTextVal">este email ya esta registrado</p>')!!}
                        </div>
                        
                        
                        <input class="landingInputs landingPass" name='password' type="password" placeholder=" contrasenia" value=''>
                        <i style="margin-left:2px; color:transparent;" class="registroCheckPassword fa fa-check" aria-hidden="true"></i><br>
                        <div class="landingTextVal">
                                <p class="registroTextoPassword" style="display: inline-block; color:transparent;">.</p>
                                {!! $errors->register->first('password', '<p style="display:inline-block;" class="landingTextVal">este campo necesita 6 caracteres</p>')!!}
                        </div>

                        <input class="landingInputs landingPass2" type="password" placeholder=" repetir contrasenia" value=''>
                        <i style="margin-left:2px; color:transparent;" class="registroCheckPassword2 fa fa-check" aria-hidden="true"></i><br>
                        <div class="landingTextVal">
                                <p class="registroTextoPassword2" style="display: inline-block; color:transparent;">.</p>
                        </div>

                        <div class="landingRegistroBot"><button onclick="validacionFinal()">registrarse</button></div>


                    </form>
                </div>
            </div>
           
        </div>
        <script src="{{url('js/register.js')}}"></script>  
    </body>
   
</html>