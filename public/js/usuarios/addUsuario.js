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

    // response.text() es un método en programación que se utiliza para obtener el contenido de texto de una respuesta HTTP
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
    // Crear un objeto FormData para enviar los datos del formulario
    const formData = new FormData(formulario);

    // Enviar los datos del formulario al backend usando Axios
    const response = await axios.post("../../../src/controllers/crud_usuarios/acciones.php", formData);
    console.log(response.data); // Verifica el contenido de la respuesta

    // Verificar la respuesta del backend
    if (response.status === 200 && response.data.success) { // Asegúrate de que response.data.success exista y sea verdadero
      // Llamar a la función insertUsuarioTable para insertar el nuevo registro en la tabla
      window.insertUsuarioTable();

      setTimeout(() => {
        const modalElement = document.getElementById("agregarUsuarioModal");
        const myModal = bootstrap.Modal.getInstance(modalElement);
        if (myModal) {
          myModal.hide();
        }

        // Mostrar mensaje de éxito
        toastr.options = window.toastrOptions;
        toastr.success("¡El usuario se registró correctamente!");

        // Redireccionar a la página deseada (por ejemplo, info_usuarios.php)
        window.location.href = "../../../src/views/pages/info_usuarios.php";
      }, 600);
    } else {
      console.error("Error al registrar el usuario", response.data.error);
      // Mostrar mensaje de error si la respuesta no es exitosa
      toastr.options = window.toastrOptions;
      toastr.error("Error al registrar el usuario. Inténtalo de nuevo.");
    }
  } catch (error) {
    console.error("Error al enviar el formulario", error);
    // Mostrar mensaje de error en caso de excepción
    toastr.options = window.toastrOptions;
    toastr.error("Error al enviar el formulario. Inténtalo de nuevo.");
  }
}