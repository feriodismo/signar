   var titulo = document.querySelector('.menus');
        var navegadorMin = document.querySelector('.navegadorMin');
        var menu = document.querySelector('.menuMin');
        var salirMenu = true;
        titulo.addEventListener('click', aparecer);

        function aparecer(){

            if (salirMenu === true){
            salirMenu = false;
            
            menu.style.display = 'block'
            menu.style.opacity = '0';
            menu.style.transition = '2s';
            navegadorMin.style.width = '40%';
            navegadorMin.style.transition = '1s';
            setTimeout(function(){
                menu.style.opacity = '1'
                menu.style.transition = '.5s';
            },500)
            }
            else{
            salirMenu = true;
            menu.style.display = 'none'
            menu.style.opacity = '1';
            menu.style.transition = '2s';
            navegadorMin.style.width = '0px';
            navegadorMin.style.transition = '1s';   
            }
        }