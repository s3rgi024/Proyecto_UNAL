<?php

session_start();

if (!isset($_SESSION['activo']) || $_SESSION['activo'] !== true) {
    header("Location: ../../../index.php");
    exit();
}
