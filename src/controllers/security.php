<?php

// Verifica si la sesión no está ya iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['activo']) || $_SESSION['activo'] !== true) {
    header("Location: /index.php");
    exit();
}

