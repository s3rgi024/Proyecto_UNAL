<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../../public/css/apro_usuarios.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Aprobación Usuarios</title>
</head>
<body>
    <?php 
        include("../components/navbar.php");
    ?>

    <section class="main_contratacion__background">
    </section>
    <main class="main_contratacion__container min-main">
    <div class="container my5">
        <h2>Lista de Usuarios</h2>
        <a class="btn btn-primary" href="../../../src/views/pages/create_usuarios.php" role="button">Crear Usuario</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo Documento</th>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rol</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $host = "localhost";
                $user = "root"; 
                $pass = ""; 
                $database = "unal";

                $db_connection = new mysqli($host, $user, $pass, $database);

                if ($db_connection->connect_error){
                    die("Connection failed: " . $db_connection->connect_error);
                }

                $sql = "SELECT * FROM usuarios";
                $result = $db_connection->query($sql);

                if (!$result){
                    die("Invalid query: " . $db_connection->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id_tdoc]</td>
                        <td>$row[id_usuario]</td>
                        <td>$row[nombre1]</td>
                        <td>$row[apellido1]</td>
                        <td>$row[id_rol]</td>
                        <td>$row[usuario]</td>
                        <td>$row[correo]</td>
                        <td>$row[telefono]</td>
                        <td>
                        <a class='btn btn-primary btn-sm' href='../../views/pages/edit_usuarios.php'>Editar</a>
                        <a class='btn btn-danger btn-sm' href='#'>Cancelar</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
    </main>
    
    <script src="../../../public/js/navbar.js"></script>
    <script src="../../../public/js/vis_docente.js"></script>
</body>
</html>