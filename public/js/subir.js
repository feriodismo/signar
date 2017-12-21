var archivoSonido = document.querySelector('.archivoSonido');
	//las variables que toman el class de los checkmarks
	var checkTitulo = document.querySelector('.checkTitulo');
	var checkUpload = document.querySelector('.checkUpload');
	var checkLetra = document.querySelector('.checkLetra')

	//las variables que toman el class de los subtitulos de validacion
	var subValUpload = document.querySelector('.subValUpload');
	var subValLetra = document.querySelector('.subValLetra');
	
	//las variables que toman el class de los inputs de la forma
	var subirInput = document.querySelector(".subirAudio")
	subirInput.addEventListener('change', seleccion)
	var subirLetra = document.querySelector(".letraInput")
	subirLetra.addEventListener('input', letraSeleccion)
	var subirTitulo = document.querySelector(".tituloInput")
	subirTitulo.addEventListener('input', tituloSeleccion)
	var path = String.raw`\fakepath`
	var validacionUploadAceptada = false;
	var validacionLetraAceptada = false;
	//seleccion es la funcion que valida el archivo que sube el usuario
	function seleccion(){
		//valida el tamanio del archivo, 200000 es el peso maximo
		if(subirInput.value === ""){
		  archivoSonido.innerHTML = 'selecciona un archivo';
		  subValUpload.style.transition = ".5s"
		  subValUpload.style.color = "#d20013"
		  subValUpload.innerHTML = "selecciona un archivo"
		  checkUpload.style.transition = '1s'
	      checkUpload.style.color='transparent';
		  subirInput.value = "";
		  validacionUploadAceptada = false;
		}

		else if (this.files[0].size > 200000 ){
		  archivoSonido.innerHTML = 'selecciona un archivo';
		  subValUpload.style.transition = ".5s"
		  subValUpload.style.color = "#d20013"
		  subValUpload.innerHTML = "el archivo es muy pesado"
		  checkUpload.style.transition = '1s'
	      checkUpload.style.color='transparent';
		  subirInput.value = "";
		  validacionUploadAceptada = false;
		}
		//valida si el archivo cargado tiene la extension .mp3
		else if (subirInput.value.split('.').pop() !== 'mp3'){
		  archivoSonido.innerHTML = 'selecciona un archivo';
		  subValUpload.style.transition = ".5s"
		  subValUpload.style.color = "#d20013"
		  checkUpload.style.transition = '1s'
	      checkUpload.style.color='transparent';
		  subValUpload.innerHTML = "tu archivo no es .mp3"
		  subirInput.value = "";
		  validacionUploadAceptada = false;
		}
		//si todos los requisitos se cumplen el archivo se carga, sino no
		if( subirInput.files.length !== 0 && this.files[0].size < 200000 && subirInput.value.split('.').pop() === 'mp3' ){
			    archivoSonido.innerHTML = subirInput.value.split(path).pop();
				checkUpload.style.transition = '1s'
	    		checkUpload.style.color='#56a5ad';
				subValUpload.style.color = "transparent"
	    		subValUpload.innerHTML = "."
	    		validacionUploadAceptada = true;
				}	
		}
		

	function letraSeleccion(){
		if (subirLetra.value === ""){
		validacionLetraAceptada = false;	
		}
		else if (subirLetra.value !== ""){
			validacionLetraAceptada = true;
			checkLetra.style.transition = '1s'
	    	checkLetra.style.color='#56a5ad';
			subValLetra.style.color = "transparent"
	    	subValLetra.innerHTML = "."
	    	
		}
	}

	function tituloSeleccion(){
		if (subirTitulo.value === ""){
		checkTitulo.style.transition = '1s'
	    checkTitulo.style.color='transparent';	
		}
		else {
		checkTitulo.style.transition = '1s'
	    checkTitulo.style.color='#56a5ad';
		}
	}


	//funcion que junto a preventDefault bloquea la accion submit	
	function validacion(){
		if (validacionUploadAceptada === false){
			alert('tienes que seleccionar un archivo correcto');
			//usando esta funcion predeterminada no dejamos pasar la forma del usuario
			event.preventDefault();
    		return false;
  		}
  		else if (validacionLetraAceptada === false){
  			alert('tienes que asignarle una letra a tu archivo');
  			subValLetra.style.transition = ".5s"
		    subValLetra.style.color = "#d20013"
		    subValLetra.innerHTML = "asigna una letra"
  			event.preventDefault()
  			return false;
  		}

  		return true;

	}