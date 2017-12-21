 //variable de chequeo de validacion
        var valNombreB = false;
        var valEmailB = false;
        var valPassB = false;
        var valPass2B = false;
        var pass6 = false;

        //variable de los inputs
        var landingNombre = document.querySelector('.landingNombre');
        var landingEmail = document.querySelector('.landingEmail');
        var landingPass = document.querySelector('.landingPass');
        var landingPass2 = document.querySelector('.landingPass2');

        //variables de los checkmarks
        var registroCheckNombre = document.querySelector('.registroCheckNombre');
        var registroCheckEmail = document.querySelector('.registroCheckEmail');
        var registroCheckPassword = document.querySelector('.registroCheckPassword');
        var registroCheckPassword2 = document.querySelector('.registroCheckPassword2');
        
        //variables de los textos de validacion
        var registroTextoNombre = document.querySelector('.registroTextoNombre');
        var registroTextoEmail = document.querySelector('.registroTextoEmail');
        var registroTextoPassword = document.querySelector('.registroTextoPassword');
        var registroTextoPassword2 = document.querySelector('.registroTextoPassword2');

        //listeners de los inputs
        landingNombre.addEventListener('input', valNombre);
        landingEmail.addEventListener('input', valEmail);
        landingPass.addEventListener('input', valPass);
        landingPass2.addEventListener('input', valPass2);
        var emailExpression = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

        //validacion del input del nombre
        function valNombre(){
            if(landingNombre.value === ""){
            registroCheckNombre.style.transition = '1s';
            registroCheckNombre.style.color = 'transparent';
            valNombreB = false;
            }
            else{
            registroTextoNombre.style.transition = '1s'
            registroTextoNombre.style.color = 'transparent'
            registroTextoNombre.innerHTML = '.'
            registroCheckNombre.style.transition = '1s';
            registroCheckNombre.style.color = '#9bd5a5';
            valNombreB = true;
            }
        }

        function valEmail(){
            if(landingEmail.value.match(emailExpression)){
                registroTextoEmail.style.transition = '1s'
                registroTextoEmail.style.color = 'transparent'
                registroTextoEmail.innerHTML = '.'
                registroCheckEmail.style.transition = '1s'
                registroCheckEmail.style.color = '#9bd5a5'
                valEmailB = true;
            }
            else if(!landingEmail.value.match(emailExpression)){
                registroCheckEmail.style.transition = '1s'
                registroCheckEmail.style.color = 'transparent'
                valEmailB = false;
            }

        }
        function valPass(){
        
            if(landingPass.value.length < 6){
            registroCheckPassword.style.transition = '1s'
            registroCheckPassword.style.color = 'transparent'
            valPassB = false;
            pass6 = false;
            }
            else{
            registroCheckPassword.style.transition = '1s'
            registroCheckPassword.style.color = '#9bd5a5'
            registroTextoPassword.style.transition = '1s'
            registroTextoPassword.style.color = 'transparent'
            registroTextoPassword.innerHTML = '.'
            valPassB = true;
            pass6 = true;
            }

            if(pass6 === true && landingPass2.value !== "" && landingPass.value === landingPass2.value){
                registroCheckPassword2.style.transition = '1s'
                registroCheckPassword2.style.color = '#9bd5a5'
                registroTextoPassword2.style.transition = '1s'
                registroTextoPassword2.style.color = 'transparent'
                registroTextoPassword2.innerHTML = '.'
                valPass2B = true;
            }
            else{
                registroCheckPassword2.style.transition = '1s'
                registroCheckPassword2.style.color = 'transparent'
                valPass2B = false;
            }
        }

        function valPass2(){

            if(pass6 === true && landingPass2.value !== "" && landingPass.value === landingPass2.value){
                registroCheckPassword2.style.transition = '1s';
                registroCheckPassword2.style.color = '#9bd5a5';
                registroTextoPassword2.style.transition = '1s'
                registroTextoPassword2.style.color = 'transparent'
                registroTextoPassword2.innerHTML = '.'
                valPass2B = true;
            }
            else{
                registroCheckPassword2.style.transition = '1s'
                registroCheckPassword2.style.color = 'transparent'
                valPass2B = false;
            }
        }

        function validacionFinal(){

            if (valNombreB === false){
                registroTextoNombre.style.transition = '1s'
                registroTextoNombre.style.color = '#ffa9a9'
                registroTextoNombre.innerHTML = 'no puedes dejar este campo vacio'
                event.preventDefault();
                return false;
            }
            else if (valEmailB === false){
                registroTextoEmail.style.transition = '1s'
                registroTextoEmail.style.color = '#ffa9a9'
                registroTextoEmail.innerHTML = 'escribe un email correcto'
                event.preventDefault();
                return false;
            }
            else if (valPassB === false){
                registroTextoPassword.style.transition = '1s'
                registroTextoPassword.style.color = '#ffa9a9'
                registroTextoPassword.innerHTML = '6 caracteres como minimo'
                event.preventDefault();
                return false;
            }
            else if (valPass2B === false){
              
                registroTextoPassword2.style.transition = '1s'
                registroTextoPassword2.style.color = '#ffa9a9'
                registroTextoPassword2.innerHTML = 'las contrasenias no coinciden'
                event.preventDefault();
                return false;
            }

            return true;

        }