export function hoverTiltEffect(buttons) {
    buttons.forEach(button => {
        const circle = button.querySelector('.circle');

        // 💡 Elimina eventos previos antes de agregarlos nuevamente
        button.removeEventListener('mousemove', tiltEffect);
        button.removeEventListener('mouseleave', resetTiltEffect);

        function tiltEffect(e) {
            const rect = button.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            circle.style.left = `${x}px`;
            circle.style.top = `${y}px`;
            circle.style.opacity = 1;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const deltaX = (x - centerX) / centerX;
            const deltaY = (y - centerY) / centerY;

            // Verifica si el botón está en modo "cara trasera"
            const isFlipped = button.style.transform.includes("rotateY(-180deg)");

            if (isFlipped) {
                // Si está girado, conserva el rotateY(-180deg)
                button.style.transform = `rotateY(-180deg) rotateX(${deltaY * 20}deg) rotateY(${deltaX * 20}deg)`;
                circle.style.opacity = 0;
            } else {
                // Si está en la cara frontal, aplica normalmente
                button.style.transform = `rotateX(${deltaY * 20}deg) rotateY(${deltaX * 20}deg)`;
                circle.style.opacity = 1;
            }
        }

        function resetTiltEffect() {
            // Verifica si el botón está en modo "cara trasera"
            const isFlipped = button.style.transform.includes("rotateY(-180deg)");
        
            if (isFlipped) {
                // Mantiene el botón girado y resetea solo la inclinación
                button.style.transform = "rotateY(-180deg) rotateX(0deg) rotateY(0deg)";
            } else {
                // Si no está girado, vuelve a la posición original
                button.style.transform = "rotateX(0deg) rotateY(0deg)";
            }
            circle.style.opacity = 0;
        }
        

        // 💡 Ahora volvemos a asignar los eventos sin duplicados
        button.addEventListener('mousemove', tiltEffect);
        button.addEventListener('mouseleave', resetTiltEffect);
    });
}
