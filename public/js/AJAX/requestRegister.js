

function registerRequest() {

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
        });
      
    } else {
        console.error('Hubo un error al procesar la solicitud.');
      }
    };
    
    xhr.send(data);
}