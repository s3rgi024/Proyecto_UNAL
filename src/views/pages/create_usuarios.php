<?php
$host = "localhost";
$user = "root"; 
$pass = ""; 
$database = "unal";

$db_connection = new mysqli($host, $user, $pass, $database);

$id_tdoc = "";
$id_usuario = "";
$nombre1 = "";
$nombre2 = "";
$apellido1 = "";
$apellido2 = "";
$id_rol = "";
$usuario = "";
$clave = "";
$correo = "";
$telefono = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_tdoc = $_POST["id_tdoc"];
    $id_usuario = $_POST["id_usuario"];
    $nombre1 = $_POST["nombre1"];
    $nombre2 = $_POST["nombre2"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $id_rol = $_POST["id_rol"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];

    do {
        if (empty($id_tdoc) || empty($id_usuario) || empty($nombre1) || empty($apellido1) || empty($id_rol) || empty($usuario) || empty($clave) || empty($correo) || empty($telefono)){
            $errorMessage = "Todos los campos deben estar diligenciados";
            break;
        }


        $sql = "INSERT INTO usuarios (id_tdoc, id_usuario, nombre1, nombre2, apellido1, apellido2, id_rol, usuario, clave, correo, telefono, id_estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";

        try {
            // Prepara la declaración
            $stmt = $db_connection->prepare($sql);
            if (!$stmt) {
                throw new Exception("Error al preparar la declaración: " . $db_connection->error);
            }

            // Vincula los parámetros
            $stmt->bind_param("issssssssss", $id_tdoc, $id_usuario, $nombre1, $nombre2, $apellido1, $apellido2, $id_rol, $usuario, $clave, $correo, $telefono);

            // Ejecuta la declaración
            $stmt->execute();

            // Limpia las variables
            $id_tdoc = "";
            $id_usuario = "";
            $nombre1 = "";
            $nombre2 = "";
            $apellido1 = "";
            $apellido2 = "";
            $id_rol = "";
            $usuario = "";
            $clave = "";
            $correo = "";
            $telefono = "";

            $successMessage = "Se ha agregado exitosamente un registro.";

            header("location: ../pages/apro_usuarios.php");
            exit;
        } catch (mysqli_sql_exception $e) {
            $errorMessage = "Inserción inválida: " . $e->getMessage();
            break;
        } catch (Exception $e) {
            $errorMessage = "Error inesperado: " . $e->getMessage();
            break;
        }

    } while(false);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Creación Usuarios</title>
</head>
<body>
    <?php include("../components/navbar.php"); ?>
    <section class="main_contratacion__background"></section>

    <main class="main_contratacion__container min-main">
        <div class="container my5">
            <h2>Nuevo Usuario</h2>

            <?php if (!empty($errorMessage)) { ?>
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong><?php echo $errorMessage; ?></strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            <?php } ?>

            <form method="post">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Tipo Documento</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="id_tdoc" value="<?php echo $id_tdoc; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">DNI</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="id_usuario" value="<?php echo $id_usuario; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Primer Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nombre1" value="<?php echo $nombre1; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Segundo Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nombre2" value="<?php echo $nombre2; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Primer Apellido</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="apellido1" value="<?php echo $apellido1; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Segundo Apellido</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="apellido2" value="<?php echo $apellido2; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Rol</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="id_rol" value="<?php echo $id_rol; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Usuario</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="usuario" value="<?php echo $usuario; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Clave</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="clave" value="<?php echo $clave; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Correo</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="correo" value="<?php echo $correo; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Telefono</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>">
                    </div>
                </div>

                <?php if (!empty($successMessage)) { ?>
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong><?php echo $successMessage; ?></strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="../pages/apro_usuarios.php" role="button">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    
    <script src="../../../public/js/navbar.js"></script>
    <script src="../../../public/js/vis_docente.js"></script>
</body>
</html>
