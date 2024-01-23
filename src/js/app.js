document.addEventListener('DOMContentLoaded', function(){


    eventListeners();
});

//--------------------------------------------------------------------------
// function eventListeners (){
//     const mobileMenu = document.querySelector('.mobile-menu');

//     mobileMenu.addEventListener('click', navegacionResponsive);
// }
   eventListeners = () => {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
   }

 
//----------------------------------------------------------------------------

// toggle, si tiene la clase, la quita, sino la tiene la agrega!
   navegacionResponsive = () => {
        const navegacion = document.querySelector('.navegacion');
        navegacion.classList.toggle('mostrar')
   }



// function navegacionResponsive() {
//    const navegacion = document.querySelector('.navegacion');

//    if(navegacion.classList.contains('mostrar')){
//         navegacion.classList.remove('mostrar')
//    }else{
//     navegacion.classList.add('mostrar')
//    }
// }




// Este codigo reemplaza el if toggle
/* 
function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    
    navegacion.classList.toggle('mostrar')
 }

*/
