<?php

include("../../../config/db_connection.php");

// Consulta para obtener los datos de los usuarios y los nombres de los roles
$sql = "
    SELECT 
        u.id_tdoc, 
        u.id_usuario, 
        u.nombre1, 
        u.apellido1, 
        u.correo, 
        u.telefono, 
        r.rol 
    FROM 
        usuarios u
    JOIN 
        roles r ON u.id_rol = r.id_rol
";

$result = $db_connection->query($sql);

// Verificar si se obtuvieron resultados
$usuarios = [];
if ($result->num_rows > 0) {
    // Obtener todos los datos en un array
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
} else {
    echo "No se encontraron usuarios.";
}

$db_connection->close();
?>

<div class="table-responsive">
    <table class="table table-hover" id="table_usuarios">
        <thead>
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($usuarios as $usuario) { ?>
                <tr id="usuario_<?php echo $usuario['id_usuario']; ?>">
                    <th scope='row'><?php echo $usuario['id_usuario']; ?></th>
                    <td><?php echo htmlspecialchars($usuario['nombre1']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['apellido1']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['correo']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['telefono']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['rol']); ?></td>
                    <td>
                        <a title="Ver detalles del usuario" href="#" onclick="verDetallesUsuario(<?php echo $usuario['id_usuario']; ?>)" class="btn btn-success">
                            <i class="bi bi-binoculars"></i>
                        </a>
                        <a title="Editar datos del usuario" href="#" onclick="editarUsuario(<?php echo $usuario['id_usuario']; ?>)" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a title="Eliminar datos del usuario" href="#" onclick="eliminarUsuario(<?php echo $usuario['id_usuario']; ?>)" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
