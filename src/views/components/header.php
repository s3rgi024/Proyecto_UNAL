<head>
    <link rel="stylesheet" href="/public/css/modules/header.css">
</head>

<header class="header">

        <a href="/src/views/pages/main_menu/main.php" class="back_button">
            <span class="tooltip_container">
                <i class="fa-solid fa-chevron-left"></i>
                <span class="tooltip_text">
                    Regresar
                </span>
            </span>
        </a>

        <div class="shadow_logo_unal">
            <div class="header__logo-unal">
                <img src="/public/img/logo_unal_blanco.webp" 
                alt="logo Universidad Nacional de Colombia">
            </div>
        </div>

        <div class="user_section">
                <span class="user_name">Usuario: <?php echo $nombre; ?> </span>
                <span class="user_role">Rol: <?php echo $rol; ?></span>
        </div>

        <div class="user_settings_section">
            <div class="datetime">
                <p>28 de abril de 2024</p>
                <p><?php echo date('H:i'); ?></p>
            </div>

            <button class="notifications">
                <i class="fa-solid fa-bell"></i>
            </button>
                
            <button class="settings">
                <i class="fa-solid fa-gear"></i>
            </button>
        </div>
        
</header>