import Swal from '../../../node_modules/sweetalert2/src/sweetalert2.js';

async function loginRequest(event) {
    event.preventDefault();

    let form = document.getElementById("form_login"); 
    if (form instanceof HTMLFormElement) {
        let data = new FormData(form);

        for (let pair of data.entries()) {
            console.log(pair[0]+ ', ' + pair[1]); 
        }

        try {
            let response = await fetch("./src/controllers/neg_dat_login.php", {
                method: "POST",
                body: data
            });

            if (response.ok) {
                let result = await response.json();
                if (result.status === 'success') {
                    window.location.href = './src/views/pages/main_menu/main.php';
                } else {
                    Swal.fire({
                        title: "Error",
                        text: result.message,
                        icon: "error"
                    });
                }
            } else {
                Swal.fire({
                    title: "Error",
                    text: "Ha ocurrido un error al enviar los datos, verifique los datos e intente nuevamente",
                    icon: "error"
                });
            }
        } catch (error) {
            Swal.fire({
                title: "Error",
                text: "Error de red: " + error.message,
                icon: "error"
            });
        }
    } else {
        console.error('El formulario no es del tipo HTMLFormElement');
    }
}

document.getElementById('form_login').addEventListener('submit', loginRequest);
