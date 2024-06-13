<?php

include("../../../config/db_connection.php");

// Consulta para obtener los tipos de documentos
$sql = "SELECT id_tipo_documento, abreviatura FROM tipo_documento";
$result = $db_connection->query($sql);
$tipos_documentos = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tipos_documentos[] = $row;
    }
}

// Realizar la consulta a la tabla roles
$sql = "SELECT id_rol, rol FROM roles";
$result = $db_connection->query($sql);

$roles = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $roles[] = $row;
    }
} else {
    echo "No se encontraron roles.";
}

// Realizar la consulta a la tabla estados
$sql = "SELECT id_estado, estado FROM estados";
$result = $db_connection->query($sql);

$estado = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $estado[] = $row;
    }
} else {
    echo "No se encontraron estados.";
}

?>

<div class="modal fade" id="agregarUsuarioModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulo_modal">Registrar Nuevo Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formularioUsuario" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="mb-3">
                            <label class="form-label">Tipo Documento</label>
                            <select name="id_tdoc" class="form-select" required>
                            <option selected value="">Seleccione</option>
                            <?php
                            foreach ($tipos_documentos as $tipo_documento) {
                                echo "<option value='" . $tipo_documento['id_tipo_documento'] . "'>" . $tipo_documento['abreviatura'] . "</option>";
                            }
                            ?>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Número Identificación (DNI)</label>
                            <input type="text" name="id_usuario" class="form-control" maxlength="10" oninput="validateLength(this)" pattern="\d{1,10}" required />
                        </div>
                        <script>
                        function validateLength(input) {
                            input.value = input.value.replace(/\D/g, ''); // Elimina caracteres no numéricos
                            if (input.value.length > 10) {
                                input.value = input.value.slice(0, 10); // Limita a 10 caracteres
                            }
                        }
                        </script>

                        <div class="row">

                            <div class="mb-3">
                                <label class="form-label">Primer Nombre</label>
                                <input type="text" name="nombre1" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Segundo Nombre</label>
                                <input type="text" name="nombre2" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Primer Apellido</label>
                                <input type="text" name="apellido1" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Segundo Apellido</label>
                                <input type="text" name="apellido2" class="form-control" required />
                            </div>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Seleccione el rol</label>
                            <select name="id_rol" class="form-select" required>
                                <option selected value="">Seleccione</option>
                                <?php
                                foreach ($roles as $rol) {
                                    echo "<option value='" . $rol['id_rol'] . "'>" . $rol['rol'] .        "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" name="correo" class="form-control" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
                            <div class="invalid-feedback">Por favor, ingresa un correo electrónico válido.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input type="text" name="telefono" class="form-control" maxlength="10" oninput="validateLength(this)" pattern="\d{1,10}" required />
                        </div>
                        <script>
                        function validateLength(input) {
                            input.value = input.value.replace(/\D/g, ''); // Elimina caracteres no numéricos
                            if (input.value.length > 10) {
                                input.value = input.value.slice(0, 10); // Limita a 10 caracteres
                            }
                        }
                        </script>

                        <div class="mb-3">
                            <label class="form-label">Usuario</label>
                            <input type="text" name="usuario" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Clave Generica</label>
                            <input type="password" name="clave" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Estado</label>
                            <select name="id_estado" class="form-select" required>
                            <option selected value="">Seleccione</option>
                            <?php
                            foreach ($estado as $estado) {
                                echo "<option value='" . $estado['id_estado'] . "'>" . $estado['estado'] . "</option>";
                            }
                            ?>
                        </select>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn_add" onclick="registrarUsuario(event)">
                                Registrar nuevo usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>