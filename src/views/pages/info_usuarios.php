<?php 

require '../../controllers/security.php';

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="../../public/css/info_usuarios.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">


    <!-- Libreria para alertas ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>

<body>
    <?php
    include("../../../config/db_connection.php");
    include("../components/navbar.php");
    include("../../../src/controllers/crud_usuarios/acciones.php");

    $usuarios = obtenerEmpleados($db_connection);
    $totalUsuarios = $usuarios->num_rows;
    ?>

    <main class="main_contratacion__container min-main">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <h1 class="text-center">
                    <span class="float-start">
                        <a href="#" onclick="modalRegistrarUsuario()" class="btn btn-success" title="Registrar Nuevo Usuario">
                            <i class="bi bi-person-plus"></i>
                        </a>
                    </span>
                    Lista de usuarios (<?php echo $totalUsuarios ?>)
                    <span class="float-end">
                        <a href="acciones/exportar.php" class="btn btn-success" title="Exportar a CSV" download="usuarios.csv"><i class="bi bi-filetype-csv"></i></a>
                    </span>
                    <hr>
                </h1>
                <?php
                include("./usuarios_info_ex.php"); ?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../../../public/js/usuarios/detallesUsuarios.js"></script>
    <script src="../../../public/js/usuarios/addUsuario.js"></script>
    <script src="../../../public/js/usuarios/editarUsuario.js"></script>
    <script src="../../../public/js/usuarios/eliminarUsuario.js"></script>
    <script src="../../../public/js/usuarios/refreshTableAdd.js"></script>
    <script src="../../../public/js/usuarios/refreshTableEdit.js"></script>
    <script src="../../../public/js/usuarios/alertas.js"></script>

    <!-------------------------Librería  datatable para la tabla -------------------------->
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            $("#table_usuarios").DataTable({
                pageLength: 5,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
                },
            });
        });
    </script>
    <script src="../../../public/js/navbar.js"></script>

    <main>

</body>

</html>
