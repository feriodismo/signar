@extends('layout')

@section('contenido')

<table>
		
		<thead>

			<tr>
			
				<th>titulo</th>
				<th>subido por</th>
				<th>letra</th>
				

			</tr>
		
		</thead>
			<tbody>
	@php $n=0 @endphp
	@foreach ($audioInfo as $a)

		@php 
		$n++;
		$class = $a->letter.$a->number;
		$file = $a->letter;
		$url = 'storage/audios/'.$file.'/'.$class.'.mp3';
		$b = 'aud'.$n;
		$playClass = $class.'play';
		$playClassGo = $class.'go';


		
		
		
		@endphp
	
		<audio style="z-index=-4" class="{{$class}}" onended="finish()"><source src="{{$url}}"></audio>
		<input type=hidden value={{$class}} class="{{$b}}">

		
		
	
			
			<tr>
			
				
				<td>{{ $a->tittle }}</td>
				@if(!empty($a->user->name))
				<td>{{ $a->user->name }}</td>
				@else
				<td>eliminado</td>
				@endif
				<td>{{ $file }}</td>
				<td class="{{ $playClassGo }}"><i class="{{ $playClass }} fa fa-play" aria-hidden="true"></i></td>
				@if(auth()->user()->id === 2)
				<td class="tdDelete"><form action="{{route('uploads.destroy', $a->id)}}" method="POST">
					{{ csrf_field()  }}
					{!!	method_field('DELETE') !!}

					<button style="background: transparent; border:none; color:red;" type="submit"><i class="fa fa-times" 
					aria-hidden="true"></i></button></form></td>
				@elseif(auth()->user()->id === $a->user_id)
				<td class="tdDelete"><form action="{{route('uploads.destroy', $a->id)}}" method="POST">
					{{ csrf_field()  }}
					{!!	method_field('DELETE') !!}

					<button style="background: transparent; border:none; color:red;" type="submit"><i class="fa fa-times" 
					aria-hidden="true"></i></button></form></td>
				@endif
				
				
				
			</tr>

			
	
	@endforeach

	</tbody>
	</table>

<script src="{{url('js/index.js')}}"></script>
<script>
	
// var extraer = []
// var audio = []
// var letras = []
// var letra = []
// var pausa = false;
// var paraPlay = true;
// var play = []
// var hola = []
// var enPlay = false;
// var paraStop;
// var paraDos;
// var playing = false;

// 	for (valor = 1; valor < 100; valor++) { 
// 		extraer[valor] = document.querySelector('.aud'+valor);
// 		if(extraer[valor] === null){
// 			var stop = valor;
// 			break; 
// 			}
// 	}

// 	for (valor = 1; valor < stop; valor++ ){
// 		audio[valor] = extraer[valor].value;
// 		letras = audio[valor].slice(0,-1)
// 		numero = audio[valor].slice(1)
// 		play.push(document.querySelector('.'+letras+numero+'go'))
// 		if (!letra.includes(letras)){
// 			window[letras] = []
		
// 			letra.push(letras)
// 		}
// 	}
// // console.log(stop)
// // console.log(letra.length)
// // console.log(extraer)
// console.log(play)
// console.log(audio);
// // document.querySelector('.'+audio[1]).play()


// 	for (var loop = letra.length - 1; loop >= 0; loop--) {
		
// 		for (valor = 1; valor < stop; valor++ ){
	
// 		letras = audio[valor].slice(0,-1)
// 		numero = audio[valor].slice(1)
	   
// 		    if (letra[loop] === letras){ 

// 		   	window[letras].push(document.querySelector('.'+letras+numero))
		   
// 			console.log(letras+numero);
// 			}
// 		}
	
// 	}
// console.log(play)
// 	for (valor = 0; valor < stop-1; valor++ ){
		
// 			play[valor].addEventListener('click', sobra)
// 			function sobra(event){
// 			for (rola = 1; rola < audio.length; rola++ ){

// 				if(!document.querySelector('.'+audio[rola]).paused){
// 					playing = true;
// 					paraStop = ''+audio[rola]+''
					
// 					break;
// 				}	
// 				else{
// 					playing = false;
// 				}
// 			}
			
				
	
// 				if (playing === false){
				
// 				var obteniendoClase = event.target.className;
// 				var iconoClase = obteniendoClase.replace("play fa fa-play", "go");
// 				var audioClase = obteniendoClase.replace("play fa fa-play", "");
// 				var claseNueva = obteniendoClase.replace("fa-play", "fa-pause");
// 				document.querySelector('.'+audioClase).play()
// 				document.querySelector('.'+iconoClase).innerHTML = '<i class="'+claseNueva+'" aria-hidden="true">'
				
// 				}
// 				else if(playing === true && event.target.className === paraStop+'play fa fa-pause'){
				
// 				console.log(event.target.className)
// 				var obteniendoClase = event.target.className;
// 				var audioClase = obteniendoClase.replace("play fa fa-pause", "");
// 				var iconoClase = obteniendoClase.replace("play fa fa-pause", "go");
// 				var claseNueva = obteniendoClase.replace("fa-pause", "fa-play");
// 				document.querySelector('.'+audioClase).pause()
// 				document.querySelector('.'+iconoClase).innerHTML = '<i class="'+claseNueva+'" aria-hidden="true">'
// 				}
			
// 			}

// 		}
// 			function finish(e){
// 				for (valor = 1; valor < audio.length; valor++ ){
// 					var claseStop = audio[valor]+'play fa fa-play'
// 					document.querySelector('.'+audio[valor]+'go').innerHTML = '<i class="'+claseStop+'" aria-hidden="true">'
// 			}
// 			}

		

</script>

@stop


