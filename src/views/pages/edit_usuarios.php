<?php 
    require '../../controllers/security.php';
    include ("../../../config/db_connection.php");

    $id_usuario = $_GET['id_usuario'];

    // Obtener los datos del usuario
    $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $result = $db_connection->query($sql);
   
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
    } else {
        echo "No se encontraron usuarios";
        exit();
    }

    // Obtener la lista de roles
    $sql_roles = "SELECT * FROM roles";
    $result_roles = $db_connection->query($sql_roles);
    $roles = [];
    if ($result_roles->num_rows > 0) {
        while($row = $result_roles->fetch_assoc()) {
            $roles[] = $row;
        }
    }

    // Obtener la lista de estados
    $sql_estados = "SELECT * FROM estados";
    $result_estados = $db_connection->query($sql_estados);
    $estados = [];
    if ($result_estados->num_rows > 0) {
        while($row = $result_estados->fetch_assoc()) {
            $estados[] = $row;
        }
    }

    // Obtener la lista de tipos de documento
    $sql_tipos_documento = "SELECT * FROM tipo_documento";
    $result_tipos_documento = $db_connection->query($sql_tipos_documento);
    $tipos_documento = [];
    if ($result_tipos_documento->num_rows > 0) {
        while($row = $result_tipos_documento->fetch_assoc()) {
            $tipos_documento[] = $row;
        }
    }

    $db_connection->close();
?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../public/css/edit_usuarios.css">
    <title>Edición Usuarios</title> 
</head>
<body>

    <?php
        include("../components/navbar.php");
    ?>


    
    <main class="container min-main">
        <header>Usuarios</header>

        <form action="../../../src/controllers/neg_dat_edit_users.php" method="post" id="updateUser">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos Personales</span>
                    <div class="fields">
                    <div class="input-field">
                        <label>Tipo Documento</label>
                        <select name="id_tdoc" required>
                            <option disabled selected>Selecciona...</option>
                            <?php foreach($tipos_documento as $tipo): ?>
                                <option value="<?php echo $tipo['id_tipo_documento']; ?>" <?php echo (isset($usuario['id_tipo_documento']) && $usuario['id_tipo_documento'] == $tipo['id_tipo_documento']) ? 'selected' : ''; ?>>
                                <?php echo $tipo['abreviatura'] . ' ' . $tipo['documento']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                        <div class="input-field">
                            <label>DNI</label>
                            <input type="text" name="id_usuario" value="<?php echo $usuario['id_usuario'];?>">
                        </div>

                        <div class="input-field">
                            <label>Primer Nombre</label>
                            <input type="text" name="nombre1" value="<?php echo $usuario['nombre1'];?>">
                        </div>

                        <div class="input-field">
                            <label>Segundo Nombre</label>
                            <input type="text" name="nombre2" value="<?php echo $usuario['nombre2'];?>">
                        </div>

                        <div class="input-field">
                            <label>Primer Apellido</label>
                            <input type="text" name="apellido1" value="<?php echo $usuario['apellido1'];?>">
                        </div>

                        <div class="input-field">
                            <label>Segundo Apellido</label>
                            <input type="text" name="apellido2" value="<?php echo $usuario['apellido2'];?>">
                        </div>

                        <div class="input-field">
                            <label>Correo</label>
                            <input type="text" name="correo" value="<?php echo $usuario['correo'];?>">
                        </div>

                        <div class="input-field">
                            <label>Telefono</label>
                            <input type="text" name="telefono" value="<?php echo $usuario['telefono'];?>">
                        </div>
                        <div class="input-field">
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Datos Administrativos</span>

                    <div class="fields">

                        <div class="input-field">
                            <label>Nombre Usuario</label>
                            <input type="text" name="usuario" value="<?php echo $usuario['usuario'];?>">
                        </div>

                        <div class="input-field">
                            <label>Rol</label>
                            <select name="id_rol" required>
                                <option disabled selected>Selecciona...</option>
                                <?php foreach($roles as $rol): ?>
                                    <option value="<?php echo $rol['id_rol']; ?>" <?php echo ($usuario['id_rol'] == $rol['id_rol']) ? 'selected' : ''; ?>>
                                        <?php echo $rol['rol']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Estado</label>
                            <select name="id_estado" required>
                                <option disabled selected>Selecciona...</option>
                                <?php foreach($estados as $estado): ?>
                                    <option value="<?php echo $estado['id_estado']; ?>" <?php echo ($usuario['id_estado'] == $estado['id_estado']) ? 'selected' : ''; ?>>
                                        <?php echo $estado['estado']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="buttons">
                        <a href="../../../src/views/pages/info_usuarios.php" class="backBtn" style="text-decoration: none;">
                            <i class="fa-solid fa-circle-arrow-right"></i>
                            <span class="btnText">Regresar</span>
                        </a>
                        
                        <button type="submit" class="submit">
                            <span class="btnText">Guardar</span>
                            <i class="fa-solid fa-floppy-disk"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="../../../public/js/navbar.js"></script>
    <script type="module" src="../../../public/js/AJAX/requestUpdateUser.js"></script>

</body>
</html>
