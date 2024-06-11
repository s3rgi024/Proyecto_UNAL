import Swiper from "../../node_modules/swiper/swiper-bundle.min.mjs";


const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
  
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    }

    
  });


  const swiper2 = new Swiper('.swiper_fileList', {
    // Optional parameters
    slidesPerView: 4,
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
  
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination-list',
      type: 'bullets',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next-list',
      prevEl: '.swiper-button-prev-list',
    },
    
  });


  swiper2.on('click', function (event) {
    // Obtener el índice del slide clickeado en el primer carrusel
    const clickedIndex = event.clickedIndex;

    // Navegar al slide correspondiente en el segundo carrusel
    swiper.slideTo(clickedIndex);
});
