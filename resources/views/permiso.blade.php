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
    <body style='background: #ededed; text-align: center; margin:50px; font-family: "Inconsolata"'>
        <h2 style="font-family: 'Ubuntu', sans-serif; color:#667788 !important;"><a href="{{route('landing')}}">Signar</a></h2><br><br>
        <p style="font-family: 'Inconsolata'">oye! amigo no tienes permiso para estar en esta pagina,</p> 
            <p>si quieres acceder al contenido de nuestra web, por favor <a style="color:#667788;" href="{{route('landing')}}">registrate</p>
     
    </body>
</html>
