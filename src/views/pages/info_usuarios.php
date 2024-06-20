<?php 
   require '../../controllers/security.php';
   include ("../../../config/db_connection.php");

   function obtenerUsuarios($db_connection) {
    // Consulta para obtener los usuarios junto con el nombre del rol
    $query = "SELECT usuarios.id_tdoc, usuarios.id_usuario, usuarios.nombre1, usuarios.apellido1, roles.rol AS rol, usuarios.correo, usuarios.telefono 
              FROM usuarios 
              JOIN roles ON usuarios.id_rol = roles.id_rol";
    return mysqli_query($db_connection, $query);
   }

   $usuarios = obtenerUsuarios($db_connection);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información Usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/info_usuarios.css">
    <link rel="stylesheet" href="../../../node_modules/boxicons/css/boxicons.min.css">
</head>

<body>
    
    <?php
        include("../components/navbar.php");
    ?>

    <main class="table min-main" id="customers_table" style="margin-left: 160px;">
        <section class="table__header">
            <h1>Usuarios</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Exportar como &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <i class="fa-solid fa-file-pdf"></i></label>
                    <label for="export-file" id="toCSV">CSV <i class="fa-solid fa-file-csv"></i></label>
                    <label for="export-file" id="toEXCEL">EXC <i class="fa-solid fa-file-excel"></i></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> DNI <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Rol <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Correo <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Acciones <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
            <?php
            foreach ($usuarios as $usuario) { ?>
                <tr id="usuario_<?php echo $usuario['id_usuario']; ?>">
                    <th scope='row'><?php echo $usuario['id_usuario']; ?></th>
                    <td> <?php echo $usuario['nombre1']; ?></td>
                    <td><?php echo $usuario['apellido1']; ?></td>
                    <td><?php echo $usuario['rol']; ?></td>
                    <td><?php echo $usuario['correo']; ?></td>
                    <td><?php echo $usuario['telefono']; ?></td>
                    <td>
                        <a href="edit_usuarios.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" class="btn btn-edit">Editar</a>
                        <a href="eliminar_usuario.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" class="btn btn-delete">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
            </table>
        </section>
    </main>

    <script src="../../../public/js/info_usuarios.js"></script>
    <script src="../../../public/js/navbar.js"></script>

</body>
</html>
