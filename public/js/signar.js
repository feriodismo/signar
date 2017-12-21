var signarInput = document.querySelector('.signarInput');
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
var tempo = 200;
var iteracionLoop = -1;

signarInput.focus();


refresh.addEventListener('click', refresh);
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
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
/////CODIGO SIGNAR, CADA LETRA UN SONIDO CON ASIGNACION DE LA MISMA LETRA/////////
///////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////

	function loopSignar(){
		var beat = minuto/tempo;
		  iteracionLoop++;
		 
		  var iteracion = window.setTimeout(loopSignar, beat);
		  for (var o = letra.length - 1; o >= 0; o--) {
				
				if (texto[iteracionLoop] === letra[o]){
					var letraLength = (window[letra[o]].length);
					// console.log(letraLength)
					var ran = Math.floor(Math.random()*letraLength)+1
					console.log(ran);
					x = texto[iteracionLoop]
					document.querySelector('.'+x+ran).play();
					// audios(y);

			
				}
				}	
		  if (iteracionLoop === texto.length-1){
		  	clearTimeout(iteracion)
		  }
	}

		function recibirInput(){
		
		texto = signarInput.value.toLowerCase();
		loopSignar();
		play.disabled = true;
		signarInput.disabled = true;
	
	}

	