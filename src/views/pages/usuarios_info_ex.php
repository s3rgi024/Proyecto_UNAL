<?php
$host = "localhost";
$user = "root"; 
$pass = ""; 
$database = "unal";


$db_connection = new mysqli($host, $user, $pass, $database);


$db_connection->set_charset("utf8");
$sql_time = "SET time_zone = '-05:00'";
mysqli_query($db_connection, $sql_time);

if ($db_connection->connect_error) {
    die("Error de conexión a la base de datos: " . $db_connection->connect_error);
}

// Consulta para obtener los datos de los usuarios (asegúrate de usar los nombres correctos de las columnas)
$sql = "SELECT id_tdoc, id_usuario, nombre1, apellido1, correo, telefono, id_rol FROM usuarios";
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
                    <td><?php echo htmlspecialchars($usuario['id_rol']); ?></td>
                    <td>
                        <a title="Ver detalles del empleado" href="#" onclick="verDetallesEmpleado(<?php echo $usuario['id_usuario']; ?>)" class="btn btn-success">
                            <i class="bi bi-binoculars"></i>
                        </a>
                        <a title="Editar datos del empleado" href="#" onclick="editarEmpleado(<?php echo $usuario['id_usuario']; ?>)" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a title="Eliminar datos del empleado" href="#" onclick="eliminarEmpleado(<?php echo $usuario['id_usuario']; ?>" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
