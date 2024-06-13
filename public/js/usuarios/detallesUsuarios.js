/**
 * Función para mostrar la modal de detalles del empleado
 */
async function verDetallesUsuario(idUsuario) {
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
  
      // Buscar la Modal de Detalles
      const response = await fetch("../../../src/views/modals/modalDetalles.php");
      if (!response.ok) {
        throw new Error("Error al cargar la modal de detalles del usuario");
      }
      // response.text() es un método en programación que se utiliza para obtener el contenido de texto de una respuesta HTTP
      const modalHTML = await response.text();
  
      // Crear un elemento div para almacenar el contenido de la modal
      const modalContainer = document.createElement("div");
      modalContainer.innerHTML = modalHTML;
  
      // Agregar la modal al documento actual
      document.body.appendChild(modalContainer);
  
      // Mostrar la modal
      const myModal = new bootstrap.Modal(
        modalContainer.querySelector("#detalleUsuarioModal")
      );
      myModal.show();
  
      await cargarDetalleUsuario(idUsuario);
    } catch (error) {
      console.error(error);
    }
  }
  
  /**
   * Función para cargar y mostrar los detalles del usuario en la modal
   */
  async function cargarDetalleUsuario(idUsuario) {
    try {
      const response = await axios.get(
        `../../../src/controllers/crud_usuarios/detallesUsuarios.php?id_usuario=${idUsuario}`
      );
      if (response.status === 200) {
        console.log(response.data);
        const { id_tdoc, id_usuario, nombre1, apellido1, correo, telefono, id_rol } =
          response.data;
  
        // Limpiar el contenido existente de la lista ul
  
        const ulDetalleUsuario = document.querySelector(
          "#detalleUsuarioContenido ul"
        );
  
        ulDetalleUsuario.innerHTML = ` 
          <li class="list-group-item"><b>Tipo Documento:</b> 
            ${id_tdoc ? id_tdoc : "No disponible"}
          </li>
          <li class="list-group-item"><b>DNI:</b> 
            ${id_usuario ? id_usuario : "No disponible"}
          </li>
          <li class="list-group-item"><b>Nombre:</b> 
            ${nombre1 ? nombre1 : "No disponible"}
            </li>
          <li class="list-group-item"><b>Apellido:</b>
           ${apellido1 ? apellido1 : "No disponible"}
          </li>
          <li class="list-group-item"><b>Correo:</b> ${
            correo ? correo : "No disponible"
          }</li>
          <li class="list-group-item"><b>Telefono:</b> 
            ${telefono ? telefono : "No disponible"}
          </li>
          <li class="list-group-item"><b>Rol:</b> 
            ${id_rol ? id_rol : "No disponible"}
          </li>
        `;
      } else {
        alert(`Error al cargar los detalles del usuario con DNI ${idUsuario}`);
      }
    } catch (error) {
      console.error(error);
      alert("Hubo un problema al cargar los detalles del usuario");
    }
  }