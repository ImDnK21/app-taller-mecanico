<?php 
session_start();
$title = "Editar cliente";
require_once "auth.php";
require_once "config/settings.php";

if ($_GET['rut']) {
    $rut = $_GET['rut'];
    $sql = "DELETE FROM cliente WHERE RUT_CLIENTE = '$rut'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header('Location: ' . APP_URL . 'listarCliente.php');
    } else {
      die($sql);
    }
}
?> 