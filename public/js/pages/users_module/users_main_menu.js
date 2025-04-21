import {hoverTiltEffect} from "/public/js/components/3d_cards.js";
import "/public/js/navbar.js"

document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        
        let buttons3D = document.querySelectorAll('.btn_3d');

        buttons3D.forEach(button => {
            button.style.animation = "none"; // Reinicia transform
        });
        hoverTiltEffect(buttons3D);
    }, 800);
});


let moreInfoBtns = document.querySelectorAll('.more_info_btn');
let backBtns = document.querySelectorAll('.back_btn');

moreInfoBtns.forEach(infoBtn => {
    infoBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        e.preventDefault();

        let parent = infoBtn.closest('.menu_btn');

        // Detener efecto de hover temporalmente
        parent.removeEventListener('mousemove', hoverTiltEffect);

        // Aplicar rotación sin afectar otros transform
        parent.style.transition = "transform 0.5s ease";
        parent.style.transform = parent.style.transform.replace(/rotateY\([^)]+\)/, '') + " rotateY(-180deg)";

        setTimeout(() => {
            // Reaplicar el efecto de hover después de la animación
            hoverTiltEffect([parent]);
        }, 500); 
    });
});

backBtns.forEach(backBtn => {
    backBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        e.preventDefault();

        let parent = backBtn.closest('.btn_back').parentElement;

        // Detener efecto de hover temporalmente
        parent.removeEventListener('mousemove', hoverTiltEffect);

        // Aplicar rotación de regreso sin afectar otros transform
        parent.style.transition = "transform 0.5s ease";
        parent.style.transform = parent.style.transform.replace(/rotateY\([^)]+\)/, '') + " rotateY(0deg)";

        setTimeout(() => {
            // Reaplicar el efecto de hover después de la animación
            hoverTiltEffect([parent]);
        }, 0); 
    });
});

