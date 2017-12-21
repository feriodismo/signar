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
    <body>
        <div class="contenedor">
            
            <nav class="navegador">
                <div class="usuarioNombre"><i class="fa fa-user-circle" aria-hidden="true"></i>  
                    @if(auth()->check())
                    {{ auth()->user()->name }}
                    @else
                    <a href="{{route('login')}}">login</a>
                    @endif
                </div>
                <div class="menu">
                    <p>Hola amigos, aquí pueden explorar todos los hipervínculos de nuestra web, por ejemplo
                    <a href="{{route('home')}}">home</a>, 
                    te llevará a la charla del inicio, donde debería explicarlo todo, pero sin embargo no. En
                    <a class="aLista" href="{{route('subir')}}">subir</a> 
                    puedes subir su propio sonido, o si les provoca 
                    <a class="aLista" href="{{route('signar')}}">signar</a>, 
                    hágalo. Para finalizar tienen la lista de todos los  
                    <a href="{{route('uploads.index')}}">sonidos</a></p>
                </div>

              </nav>
              <nav class="navegadorMin">
                
                <div class="menuMin"> 
                    <a href="{{route('home')}}">home</a>, <br><br>
                    <a href="{{route('subir')}}">subir sonido</a>,<br><br>
                    <a href="{{route('uploads.index')}}">lista que suena</a>,<br><br>
                    <a href="{{route('signar')}}">intenta signar</a>,<br><br>
                    <a href="{{route('logout')}}">logout</a>
                </div>

            </nav>

            <div class='division'></div>
        
            <main class="main">
                
                <div class="barraArriba">
                    <div class="menus"><h1><i class="fa fa-bars fa-1x" aria-hidden="true"></i></h1></div>
                    <div class="titulo"><h1>{{$titulo}}</h1></div>
                    <div class=usuario>
                        <div class="usuarioUno"><h1><a class="layoutLogout" href="{{route('logout')}}"><i class="fa fa-sign-in fa-1x" aria-hidden="true"></i></a></h1></div>
                        {{-- <div class="usuarioDos"><h1><i class="fa fa-user-plus" aria-hidden="true" style="color:#667788;"></i></h1></div> --}}
                    </div>
                </div>

                <div class="tituloDiv"></div>
                <div class=contenido>@yield('contenido')</div>
            
            </main>
        
        </div>
    <script src="{{url('js/layout.js')}}"></script>
    </body>
</html>
