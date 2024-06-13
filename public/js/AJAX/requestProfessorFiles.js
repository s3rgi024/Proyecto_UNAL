
    document.addEventListener('DOMContentLoaded', function() {
        // Obtener todas las tarjetas
        const cards = document.querySelectorAll('.card');

        // Iterar sobre cada tarjeta y agregar un controlador de eventos de clic
        cards.forEach(card => {
            card.addEventListener('click', function() {
                // Obtener el formulario dentro de la tarjeta
                const form = this.querySelector('form');
                // Enviar el formulario
                form.submit();
            });
        });
    });

