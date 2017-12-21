@extends('layout')

@section('contenido')

<div class="contenidoSubir">
<form onsubmit="validacion()" enctype="multipart/form-data" method='POST' action='{{ route('uploads.store') }}'>
	<div class="explicacionSubir"><p>selecciona tu archivo .mp3 para agregarlo a nuestra base de datos. Recuerda asignarle una letra y colocarle un titulo</p>
		</div>
	<div class="formaSubir">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
   	<input class='subirAudio' name="audio" id="file" type="file" accept=".mp3" style="margin:-500px;opacity:0; position:absolute; z-index:-1"/>
	{{-- <label for="tituloSonido">ponle un nombre</label> --}}
	
	<input class="tituloInput tituloSonido sub" maxlength="30" name="tittle" id="tituloSonido" type="text" placeholder=" selecciona un titulo"><i style="margin-left:12px; color:transparent;" class="checkTitulo fa fa-check" aria-hidden="true"></i><br>
	<p style='color:transparent;' class="subVal">.</p>
	<select class="letraInput sub" name='letter' id="letter">
				<option value="" hidden  >selecciona una letra</option>
				<option value="a">a</option>
				<option value="b">b</option>
				<option value="c">c</option>
				<option value="d">d</option>
				<option value="e">e</option>
				<option value="f">f</option>
				<option value="g">g</option>
				<option value="h">h</option>
				<option value="i">i</option>
				<option value="j">j</option>
				<option value="k">k</option>
				<option value="l">l</option>
				<option value="m">m</option>
				<option value="n">n</option>
				<option value="o">o</option>
				<option value="p">p</option>
				<option value="q">q</option>
				<option value="r">r</option>
				<option value="s">s</option>
				<option value="t">t</option>
				<option value="u">u</option>
				<option value="v">v</option>
				<option value="w">w</option>
				<option value="x">x</option>
				<option value="y">y</option>
				<option value="z">z</option>
			</select><i style="color:transparent;" class="checkLetra fa fa-check" aria-hidden="true"></i><br>
			<p style="color:transparent;" class="subVal subValLetra">.</p><br>
			<label for="file" class="archivoSonido" style="cursor:pointer;">selecciona un sonido</label> <i style="margin-left:3px; color:transparent;" class="checkUpload fa fa-check" aria-hidden="true"></i>
			<p class="subVal subValEsp subValUpload" style="color:transparent;">.</p>
			<input name="user_id" value="{{auth()->user()->id}}" type="hidden">

			 <input class="uploadBoton" type="submit" value="enviar" />
</form>
</div>
</div>
<script src="{{url('js/subir.js')}}"></script>

@stop