<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/apro_usuarios.css">
    <title>Aprobación Usuarios</title>
</head>
<body>

<?php include("../components/navbar.php"); ?>

<?php 
include("../../../config/db_connection.php"); 
$consulta = "SELECT id_usuario, nombre1, nombre2, apellido1, apellido2, usuario FROM usuarios";
$sql = $db_connection->query($consulta);
?>

<section class="main_contratacion__background"></section>
    <main class="main_contratacion__container min-main">
    <div class="container">
            <h1>Usuarios</h1>    
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">            
                        <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Crear Usuario</button>    
                    </div>    
                </div>    
            </div>    
        <br>  
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>DNI</th>
                                    <th>Primer Nombre</th>
                                    <th>Segundo Nombre</th>         
                                    <th>Primer Apellido</th>  
                                    <th>Segundo Apellido</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Verificar si se obtuvieron resultados
                                if ($sql->num_rows > 0) {
                                    // Iterar sobre los resultados
                                    while ($usuario_cons = $sql->fetch_assoc()) {
                                        $id_usuario = $usuario_cons['id_usuario'];
                                        $nombre1 = $usuario_cons['nombre1'];
                                        $nombre2 = $usuario_cons['nombre2'];
                                        $apellido1 = $usuario_cons['apellido1'];
                                        $apellido2 = $usuario_cons['apellido2'];
                                ?>
                                        <tr>
                                            <td><?php echo $id_usuario ?></td>
                                            <td><?php echo $nombre1 ?></td>
                                            <td><?php echo $nombre2 ?></td>
                                            <td><?php echo $apellido1 ?></td>
                                            <td><?php echo $apellido2 ?></td>
                                            <td></td>
                                        </tr>   
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='7'>No se encontraron usuarios.</td></tr>";
                                }
                                ?>
                            </tbody>        
                        </table>                                              
                    </div>
                </div>
            </div>  
        </div>    
    </div>
</main>

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formPersonas">    
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_usuario" class="col-form-label">DNI:</label>                        
                        <input type="number" class="form-control" id="id_usuario">
                    </div>
                    <div class="form-group">
                        <label for="nombre1" class="col-form-label">Primer Nombre:</label>
                        <input type="text" class="form-control" id="nombre1">
                    </div>                
                    <div class="form-group">
                        <label for="nombre2" class="col-form-label">Segundo Nombre:</label>
                        <input type="text" class="form-control" id="nombre2">
                    </div>            
                    <div class="form-group">
                        <label for="apellido1" class="col-form-label">Primer Apellido:</label>
                        <input type="text" class="form-control" id="apellido1">
                    </div>            
                    <div class="form-group">
                        <label for="apellido2" class="col-form-label">Segundo Apellido:</label>
                        <input type="text" class="form-control" id="apellido2">
                    </div>            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                </div>
            </form>    
        </div>
    </div>
</div>  

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../../public/js/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../../public/js/sb-admin-2.min.js"></script>

<!-- datatables JS -->
<script type="text/javascript" src="../../../public/js/datatables.min.js"></script>    

<script src="../../../public/js/apro_usuarios.js"></script>
<script src="../../../public/js/navbar.js"></script>

</body>
</html>