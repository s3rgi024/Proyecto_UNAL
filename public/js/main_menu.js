/*===Hover Effect===*/
function hoverTiltEffect(buttons) {
    buttons.forEach(button => {
        const circle = button.querySelector('.circle');
    
        button.addEventListener('mousemove', (e) => {
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
    
            button.style.transform = `rotateX(${deltaY * 20}deg) rotateY(${deltaX * 20}deg)`;
        });
    
        button.addEventListener('mouseleave', () => {
            button.style.transform = 'rotateX(0deg) rotateY(0deg)';
            circle.style.opacity = 0;
        });
    });
}

const buttonsMainMenu = document.querySelectorAll('.options button');
hoverTiltEffect(buttonsMainMenu)



