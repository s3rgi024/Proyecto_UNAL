/**
 * Modal para agregar un nuevo usuario
 */
async function modalRegistrarUsuario() {
  try {
    // Ocultar la modal si está abierta
    const existingModal = document.getElementById("detalleUsuarioModal");
    if (existingModal) {
      const modal = bootstrap.Modal.getInstance(existingModal);
      if (modal) {
        modal.hide();
      }
      existingModal.remove(); // Eliminar la modal existente
    }

    const response = await fetch("../../../src/views/modals/modalAdd.php");

    if (!response.ok) {
      throw new Error("Error al cargar la modal");
    }

    const data = await response.text();

    // Crear un elemento div para almacenar el contenido de la modal
    const modalContainer = document.createElement("div");
    modalContainer.innerHTML = data;

    // Agregar la modal al documento actual
    document.body.appendChild(modalContainer);

    // Mostrar la modal
    const myModal = new bootstrap.Modal(
      modalContainer.querySelector("#agregarUsuarioModal")
    );
    myModal.show();
  } catch (error) {
    console.error(error);
  }
}

async function registrarUsuario(event) {
  try {
    event.preventDefault(); // Evitar que la página se recargue al enviar el formulario

    const formulario = document.querySelector("#formularioUsuario");
    const formData = new FormData(formulario);

    const response = await axios.post("../../../src/controllers/crud_usuarios/acciones.php", formData);

    console.log('Response data:', response.data); // Log para verificar la respuesta

    // Verificar la respuesta del backend
    if (response.status === 200 && response.data.success) {
      // Llamar a la función insertUsuarioTable para insertar el nuevo registro en la tabla
      window.insertUsuarioTable();

      setTimeout(() => {
        const modalElement = document.getElementById("agregarUsuarioModal");
        const myModal = bootstrap.Modal.getInstance(modalElement);
        if (myModal) {
          myModal.hide();
        }

        // Mostrar mensaje de éxito
        if (window.toastrOptions) {
          toastr.options = window.toastrOptions;
        }
        toastr.success("¡El usuario se registró correctamente!");

        // Redireccionar a la página deseada (por ejemplo, info_usuarios.php)
        window.location.href = "../../../src/views/pages/info_usuarios.php";
      }, 600);
    } else {
      console.error("Error al registrar el usuario", response.data.error);
      toastr.error("Error al registrar el usuario. Inténtalo de nuevo.");
    }
  } catch (error) {
    console.error("Error al enviar el formulario", error);
    toastr.error("Error al enviar el formulario. Inténtalo de nuevo.");
  }
}
