import Swal from '../../../node_modules/sweetalert2/src/sweetalert2.js';

function registerRequest(event) {

    event.preventDefault();

    let form = document.getElementById("register_professor"); 
    let data = new FormData(form);
    let xhr = new XMLHttpRequest();
    
    let url = "../../../src/controllers/neg_dat_register_professor.php";
    
    xhr.open("POST", url, true);
    
    xhr.onload = function () {
      if (xhr.status === 200) {

        console.log(xhr.responseText);
        
        Swal.fire({
            title: "¡Registro completado!",
            text: "Enviaremos novedades a su correo en cuanto el usuario sea aprobado",
            icon: "success"

        }).then((result) => {
                if (result.isConfirmed) {
                    // Redirigir a otra página
                    window.location.href = '../../../index.php';
                }
            });
      
    } else {
        console.error('Hubo un error al procesar la solicitud.');
      }
    };
    
    xhr.send(data);
}

document.getElementById('register_professor').addEventListener('submit', registerRequest);
