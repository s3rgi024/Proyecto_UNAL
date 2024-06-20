import Swal from '../../../node_modules/sweetalert2/src/sweetalert2.js';

function updateUser(event) {

    event.preventDefault();

    let form = document.getElementById("updateUser"); 
    
    if (form instanceof HTMLFormElement) {
      let data = new FormData(form);
      let xhr = new XMLHttpRequest();
    
      let url = "../../../src/controllers/neg_dat_edit_users.php";
    
      xhr.open("POST", url, true);
      
      xhr.onload = function () {

        try {
          let response = JSON.parse(xhr.responseText);
          if (response.status === 'success') {
            Swal.fire({
              title: "¡Registro completado!",
              text: "Enviaremos novedades a su correo (" + response.message + ") en cuanto el usuario sea aprobado",
              icon: "success"

            }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = './src/views/pages/info_usuarios.php';
                    }
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

document.getElementById('updateUser').addEventListener('submit', updateUser);
