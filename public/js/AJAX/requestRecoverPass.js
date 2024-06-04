import Swal from '../../../node_modules/sweetalert2/src/sweetalert2.js';

function recoverPassRequest(event) {
    event.preventDefault();

    let form = document.getElementById("recover_form"); 
    if (form instanceof HTMLFormElement) {
        let data = new FormData(form);
        let xhr = new XMLHttpRequest();

        let url = "../../../src/controllers/neg_dat_recover_pass.php";

        xhr.open("POST", url, true);

        xhr.onload = function () {
            try {
                let response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    Swal.fire({
                        title: "Contraseña Enviada Exitosamente",
                        text: "Hemos enviado una nueva contraseña al correo " + response.message,
                        icon: "success"
                    });
                } else {
                    Swal.fire({
                        title: "Error",
                        text: response.message,
                        icon: "error"
                    });
                }
            } catch (e) {
                console.error("No se pudo parsear la respuesta como JSON:", xhr.responseText);
                Swal.fire({
                    title: "Error",
                    text: "Ocurrió un error inesperado. Por favor, inténtelo de nuevo.",
                    icon: "error"
                });
            }
        };

        xhr.send(data);
    } else {
        console.error('El formulario no es del tipo HTMLFormElement');
    }
}

document.getElementById('recover_form').addEventListener('submit', recoverPassRequest);
