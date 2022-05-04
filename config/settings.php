<?php
// Parámetros:
define("APP_NAME", "Taller Mecánico");
define("APP_URL", "https://localhost/app-taller-mecanico/");

// Configuración base de datos:
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "tallermecanico1");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
    echo "Error al conectar con la base de datos: " . mysqli_connect_error();
}

// Ocultar errores internos
error_reporting(0);
ini_set('display_errors', 0);
