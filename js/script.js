const myCarouselElement = document.querySelector('#carouselExampleDark')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})



(function(){
   let darkMode = window.matchMedia("(prefers-color-scheme: dark)").matches();
   if(darkMode){
     document.documentElement.setAttribute('data-mode','dark')
   }
})();