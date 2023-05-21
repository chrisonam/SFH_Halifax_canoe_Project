/* Animation du bouton Hamburger */ 

/* Selection des variables */

const btn_hamburger = document.querySelector('.menu-hamb');
const navMenu = document.querySelector('.nav-links');
const logout_btn = document.querySelector('.logout');


/* Ajout de l'evenement d'appartion du menu au click du bouton Hamburger*/ 
btn_hamburger.addEventListener('click',function(){

    navMenu.classList.toggle("nav-show");
    console.log("click");
    
});

logout_btn.addEventListener('click', function(){

    console.log("je suis la");
});



function logout(){
    if (confirm('Are you sure you want to logout?')){
      window.location = "logout.php";
      return true;
    }else{
      return false;
    }
  }

  //CARROUSSEL
  const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})
