import {TabulatorFull as Tabulator} from "/node_modules/tabulator-tables/src/js/core/TabulatorFull.js"

document.addEventListener("DOMContentLoaded", async function () {
    try {
        let response = await fetch("/src/controllers/users/neg_dat_getusers.php", {
            method: "POST"
        });

        if (!response.ok) {
            throw new Error("Error en la solicitud");
        }

        let data = await response.json();

        data.forEach(user => {
            user.nombre_completo = `${user.nombre1} ${user.apellido1}`;
            user.id_tdoc = parseInt(user.id_tdoc);
            user.id_usuario = parseInt(user.id_usuario);
            user.id_rol = parseInt(user.id_rol);
            user.id_estado = parseInt(user.id_estado);
            user.telefono = parseInt(user.telefono);
        });

        console.log(data)
        
        let table = new Tabulator("#tabla", {
            data: data, // Carga los datos manualmente
            layout: "fitColumns",
            pagination: "local",
            paginationSize: 10,
            columns: [
                { title: "Tipo de Documento", field: "id_tdoc", sorter: "number"},
                { title: "DNI", field: "id_usuario", sorter: "number"},
                { title: "Nombre", field: "nombre_completo", sorter: "string"},
                { title: "Correo", field: "correo", sorter: "string"},
                { title: "Rol", field: "id_rol", sorter: "number"},
                { title: "Estado", field: "id_estado", sorter: "number"},
                { title: "Acciones", field: ""},
            ],
            
        });

    } catch (error) {
        Swal.fire({
            title: "Error",
            text: "No se pudieron cargar los datos: " + error.message,
            icon: "error"
        });
    }
});
