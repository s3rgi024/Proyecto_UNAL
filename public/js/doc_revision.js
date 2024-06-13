import Swal from '../../node_modules/sweetalert2/src/sweetalert2.js';
import Swiper from "../../node_modules/swiper/swiper-bundle.min.mjs";

// Inicialización del primer Swiper
const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    scrollbar: {
      el: '.swiper-scrollbar',
    }
});

// Inicialización del segundo Swiper
const swiper2 = new Swiper('.swiper_fileList', {
    slidesPerView: 4,
    direction: 'horizontal',
    loop: true,
    effect: 'slide',
    navigation: {
      nextEl: '.swiper-button-next-list',
      prevEl: '.swiper-button-prev-list'
    }
});

swiper2.on('click', function (event) {
    const clickedFileName = event.clickedSlide.getAttribute('data-filename');
    const slidesInSecondSwiper = document.querySelectorAll('.swiper .swiper-wrapper .swiper-slide');
    let targetSlideIndex = -1;
    for (let i = 0; i < slidesInSecondSwiper.length; i++) {
        if (slidesInSecondSwiper[i].getAttribute('data-filename') === clickedFileName) {
            targetSlideIndex = i;
            break;
        }
    }
    if (targetSlideIndex !== -1) {
        swiper.slideTo(targetSlideIndex);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const updateFileNameDisplay = () => {
        let fileName = document.querySelector('.swiper .swiper-wrapper .swiper-slide-active').dataset.filename;
        document.getElementById('fileName').textContent = fileName;
        document.querySelector('.reportButton').id = fileName;
    };
  
    swiper.on('slideChangeTransitionEnd', updateFileNameDisplay);
    updateFileNameDisplay();
});

document.querySelector('.reportButton').addEventListener('click', function() {
    const fileName = this.id;
    const reportedFilesList = document.getElementById('reported-files');
    
    // Verificar si el archivo ya está en la lista
    const existingItems = reportedFilesList.querySelectorAll('li');
    for (let i = 0; i < existingItems.length; i++) {
        if (existingItems[i].textContent === fileName) {
            Swal.fire({
                title: "Error",
                text: "Este archivo ya ha sido reportado",
                icon: "error"
            });
            return; // Si el archivo ya está en la lista, salir de la función
        }
    }

    // Si el archivo no está en la lista, agregarlo
    const listItem = document.createElement('li');
    listItem.textContent = fileName;
    reportedFilesList.appendChild(listItem);
});


document.querySelector('.approve').addEventListener('click', function() {
    Swal.fire({
        title: 'Advertencia',
        text: "¿Desea aprobar la documentación del docente?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Aprobar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
                const form = document.querySelector('.form_download_files');
                // Enviar el formulario
                form.submit();
        }
    });
});

document.querySelector(".back").addEventListener("click", ()=>{
    
})