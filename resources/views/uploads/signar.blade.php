@extends('layout')

@section('contenido')
	@php $n=0; @endphp
		@foreach ($audioInfo as $a)

				@php

					$n++; 
					$class = $a->letter.$a->number;
					$file = $a->letter;
					$url = url('storage/audios/'.$file.'/'.$class.'.mp3');
					$b = 'aud'.$n;

				@endphp

				<input type=hidden value={{$class}} class="{{$b}}">
				<audio class="{{$class}}"><source src="{{ $url }}"></audio>

		@endforeach

				<textarea class='signarInput' placeholder="escribe lo que quieras y se convertira en sonido" style="resize:none;"></textarea><br>
				<div class="landingInicioBot" style='display: inline-block;'><button class='signarPlay'>reproducir</button></div>
				<div class="landingInicioBot" style='display: inline-block;'><button class='signarRefresh'><a style="border:none;" href="{{route('signar')}}">parar</a></button></div>

	<script src="{{url('js/signar.js')}}"></script>


{{-- var signarInput = document.querySelector('.signarInput');
var play = document.querySelector('.signarPlay');
var refresh = document.querySelector('.signarRefresh');
//variable donde se colocara la clase del input invisible que nos servira 
//para sacar la clase de cada uno de los audios
var extraer = []
//variable que nos permite almacenar el string de la clase exacta de cada uno de los audios que estan en la base de datos
var audio = []
//variable que almacena las letras asignadas en la base de dato
var letra = []

//variables de tiempo
const minuto = 60000;
var tempo = 120;


play.addEventListener('click', recibirInput);
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
/////EXTRACCION DE CLASES, DE SONIDOS, PARA EL USO INTERNO EN EL SCRIPT/////////
///////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
		
			for (valor = 1; valor < 100; valor++) { 
				
				extraer[valor] = document.querySelector('.aud'+valor);
				
				if(extraer[valor] === null){
					var stop = valor;
					break; 
				}
			}

			
			for (valor = 1; valor < stop; valor++ ){
				
				audio[valor] = extraer[valor].value;
				letras = audio[valor].slice(0,-1)
				numero = audio[valor].slice(1)
				
				if (!letra.includes(letras)){
					window[letras] = []
					letra.push(letras)
				}
			}


			for (var loop = letra.length - 1; loop >= 0; falta algo {
				
				for (valor = 1; valor < stop; valor++ ){
			
				letras = audio[valor].slice(0,-1)
				numero = audio[valor].slice(1)
			   
				    if (letra[loop] === letras){ 

				   	window[letras].push(document.querySelector('.'+letras+numero))
				   	console.log(letras+numero);
			
					}
				}
			}



// funcion que dispara la funcion loop, y recibe el input del usuario
	// function recibirInput(){

	// 	texto = signarInput.value.toLowerCase();
	// 	loop();
	// 	play.disabled = true;
	
	// }

	function loop(){
		var beat = minuto/tempo;
		  i++;
		  console.log(i)
		  var iteracion = window.setTimeout(loop, beat);
		  for (var o = letra.length - 1; o >= 0; o--) {
				
				if (texto[i] === letra[o]){
					
					// x = window[audiosLetras[o]]
					// x.playbackRate = vel
					// console.log(x.playbackRate)
					audios(letra[o]);

			
				}
				}	
		  if (i === texto.length-1){
		  	clearTimeout(iteracion)
		  }
	}
		function recibirInput(){

		texto = signarInput.value.toLowerCase();
		loop();
		play.disabled = true;
	
	}

 function audios(cambio){
 		
        // var cambio2 = cambio.cloneNode()
        
    	
        
        cambio[0].play();
         
      //   else if (cambio.currentTime > 0){
    		// cambio2.play()
    		   	
    	
      //   }
 }


console.log(letra[0])



e[0].play();
 --}}

@stop