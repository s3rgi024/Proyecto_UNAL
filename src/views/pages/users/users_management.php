<?php 

require '../../../controllers/security.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/pages/users_module/users_management.css">
    <title>Gestión Usuarios</title>
</head>
<body>

    <?php 
    
        include("../../components/navbar.php");
    
    ?>
    
    <main class="users__main_menu_container min-main">

        <?php 
            include("../../components/header.php");
        ?>
        
        <section class="main_content">

            <div class="users__search">
                <h1>
                    <i class="fa-solid fa-users-gear"></i>
                    Gestión de Usuarios
                </h1>

                <div class="search">
                    <div class="search_container">
                        <input type="text" id="search_input" placeholder="Buscar usuarios...">
                        
                        <button id="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <button id="show_filters">
                        <i class="fa-solid fa-filter"></i>
                        Búsqueda Avanzada
                    </button>

                    <button id="add-btn">
                        <i class="fas fa-plus"></i>
                        <span>Añadir usuario</span>
                    </button>
                </div>

                <div class="filters">

                    <h2>Filtrar por:</h2>

                    <div class="filters_container">
                        <form action="">
                            <div class="filter__tdoc">
                                <label for="tdoc">Tipo de Documento</label>
                                <select name="tdoc" id="tdoc">
                                    <option value="">Seleccione un tipo de documento</option>
                                </select>
                            </div>

                            <div class="filter__dni">
                                <label for="dni">No. de Documento</label>
                                <input type="number" name="dni" id="dni">
                            </div>

                            <div class="filter__first_name">
                                <label for="first_name">Primer Nombre</label>
                                <input type="text" name="first_name" id="first_name">
                            </div>

                            <div class="filter__last_name">
                                <label for="last_name">Primer Apellido</label>
                                <input type="text" name="last_name" id="last_name">
                            </div>

                            <div class="filter__email">
                                <label for="email">Correo Electrónico</label>
                                <input type="mail" name="email" id="email">
                            </div>

                            <div class="filter__role">
                                <label for="role">Rol</label>
                                <select name="role" id="role">
                                    <option value="">Seleccione un rol</option>
                                </select>
                            </div>

                            <div class="filter__state">
                                <label for="state">Estado</label>
                                <select name="state" id="state">
                                    <option value="">Seleccione un estado</option>
                                </select>
                            </div>

                            <div class="filter__creation_date">
                                <label for="creation">Fecha de Creación</label>
                                <input type="date" name="creation" id="creation">
                            </div>

                            <button class="search_by_filters">
                                <i class="fas fa-search"></i>
                                <span>Buscar</span>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="fast_search">
                    <h2>Búsqueda Rápida:</h2>
                    <button class="search_by_state_active">
                        <span>56</span>
                        <i class="fas fa-check"></i>
                        Activos
                    </button>
                    
                    <button class="search_by_state_pending">
                        <span>56</span>
                        <i class="fas fa-clock"></i>
                        Pendientes
                    </button>
                    
                    <button class="search_by_state_inactive">
                        <span>56</span>
                        <i class="fas fa-times"></i>
                        Inactivos
                    </button>
                </div>
            </div>

            
            <div class="users_board">
                <div id="tabla"></div>
            </div>


        </section>    

        <footer class="footer_logo">
            <img src="/public/img/logo_FCE_negro.webp" alt="Logo de la facultad de ciencias económicas">
        </footer>
    </main>

    <script type="module" src="/public/js/pages/users_module/users_management.js"></script>
</body>
</html>