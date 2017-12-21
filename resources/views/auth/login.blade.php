    <!doctype html>
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
    <div class="landingContenidoLogin">
        <div class="landingInicioForm">
                <div class="landingRegistroTitulo"><h2>signar</h2></div>
                <form action="" method='POST'>
                    {!! csrf_field() !!}
                    <div class=landingInicioDiv>
                       {{--  <input class="landingInputs landingNombreIni" type="name" placeholder=" nombre" name='name'>
                        <i style="margin-left:2px; color:#9bd5a5;" class="fa fa-check" aria-hidden="true"></i><br>
                        <div class="landingTextVal">
                                <p class="" style="display: inline-block; color:transparent;">.</p>
                                {!! $errors->first('email', '<p style="display:inline-block;" class="landingTextVal">este campo necesita 6 caracteres</p>')!!}
                        </div> --}}


                        <input class="landingInputs landingEmailIni" type="email" placeholder=" email" name='email'>
                        {{-- <i style="margin-left:2px; color:#9bd5a5;" class="fa fa-check" aria-hidden="true"></i><br> --}}
                        <div class="landingTextVal">
                                <p class="" style="display: inline-block; color:transparent;">.</p>
                                {!! $errors->first('email', '<p style="display:inline-block;" class="landingTextVal">email o contrasenia incorrectos</p>')!!}
                        </div> 
                        
                        <input class="landingInputs landingPassIni" type="password" placeholder=" contrasenia" name='password'>
                        {{-- <i style="margin-left:2px; color:#9bd5a5;" class="fa fa-check" aria-hidden="true"></i><br> --}}
                        <div class="landingTextVal">
                                <p class="" style="display: inline-block; color:transparent;">.</p>
                                {!! $errors->first('password', '<p style="display:inline-block;" class="landingTextVal">email o contrasenia incorrectos</p>')!!}
                        </div> 

                        <div class="landingRegistroBot"><button type='submit'>entrar</button></div>
                    </div>
                </form>
            </div>
          <p class="landingRegistroLogin">Hey!</p>  
          <p class="landingRegistroLogin">si no tienes cuenta <a style="color:#667788;" href="{{route('landing')}}">registrate</a> primero</p>
          
        </div>


        </div>
        
        

    </body>