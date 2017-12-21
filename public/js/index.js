var extraer = []
var audio = []
var letras = []
var letra = []
var pausa = false;
var paraPlay = true;
var play = []
var hola = []
var enPlay = false;
var paraStop;
var paraDos;
var playing = false;

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
		play.push(document.querySelector('.'+letras+numero+'go'))
		if (!letra.includes(letras)){
			window[letras] = []
		
			letra.push(letras)
		}
	}
// console.log(stop)
// console.log(letra.length)
// console.log(extraer)
// console.log(play)
// console.log(audio);
// document.querySelector('.'+audio[1]).play()


	for (var loop = letra.length - 1; loop >= 0; loop--) {
		
		for (valor = 1; valor < stop; valor++ ){
	
		letras = audio[valor].slice(0,-1)
		numero = audio[valor].slice(1)
	   
		    if (letra[loop] === letras){ 

		   	window[letras].push(document.querySelector('.'+letras+numero))
		   
			// console.log(letras+numero);
			}
		}
	
	}
// console.log(play)
	for (valor = 0; valor < stop-1; valor++ ){
		
			play[valor].addEventListener('click', sobra)
			function sobra(event){
			for (rola = 1; rola < audio.length; rola++ ){

				if(!document.querySelector('.'+audio[rola]).paused){
					playing = true;
					paraStop = ''+audio[rola]+''
					
					break;
				}	
				else{
					playing = false;
				}
			}
			
				
	
				if (playing === false){
				
				var obteniendoClase = event.target.className;
				var iconoClase = obteniendoClase.replace("play fa fa-play", "go");
				var audioClase = obteniendoClase.replace("play fa fa-play", "");
				var claseNueva = obteniendoClase.replace("fa-play", "fa-pause");
				document.querySelector('.'+audioClase).play()
				document.querySelector('.'+iconoClase).innerHTML = '<i class="'+claseNueva+'" aria-hidden="true">'
				
				}
				else if(playing === true && event.target.className === paraStop+'play fa fa-pause'){
				
				// console.log(event.target.className)
				var obteniendoClase = event.target.className;
				var audioClase = obteniendoClase.replace("play fa fa-pause", "");
				var iconoClase = obteniendoClase.replace("play fa fa-pause", "go");
				var claseNueva = obteniendoClase.replace("fa-pause", "fa-play");
				document.querySelector('.'+audioClase).pause()
				document.querySelector('.'+iconoClase).innerHTML = '<i class="'+claseNueva+'" aria-hidden="true">'
				}
			
			}

		}
			function finish(e){
				for (valor = 1; valor < audio.length; valor++ ){
					var claseStop = audio[valor]+'play fa fa-play'
					document.querySelector('.'+audio[valor]+'go').innerHTML = '<i class="'+claseStop+'" aria-hidden="true">'
			}
			}

		
