<?php 
session_start();
$title = "Inicio";
require_once("auth.php");
require_once("config/settings.php");
include_once("components/header.php");
?>

<!-- Contenido -->
<div class="container py-3">
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, commodi?</h1>
</div>

<?php 
include_once("components/footer.php"); 
?>
