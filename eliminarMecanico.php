<?php 
session_start();
$title = "Eliminar cliente";
require_once "auth.php";
require_once "config/settings.php";

if ($_GET['rut']) {
    $rut = $_GET['rut'];
    $sql = "DELETE FROM mecanico WHERE RUT_MECANICO = '$rut'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header('Location: ' . APP_URL . 'listarMecanico.php');
    } else {
      die($sql);
    }
}
?> 