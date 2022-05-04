<?php
session_start();
$title = "Editar mecanico";
require_once "auth.php";
require_once "config/settings.php";

if (isset($_GET['rut'])) {
    $rut = $_GET['rut'];
} else {
    die('No se recibieron parametros');
}

if (isset($_POST) && !empty($_POST)) {
    $rut = $_GET['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $sql = "UPDATE mecanico SET NOMBRE_MECANICO = '$nombre', APELLIDO_MECANICO= '$apellido', CORREO_ELECTRONICO_MECANICO = '$email', TELEFONO_MECANICO = '$telefono' WHERE RUT_MECANICO = '$rut'";
    $resultUpdate = mysqli_query($conn, $sql);
    if ($resultUpdate) {
        header('Location:' . APP_URL . 'listarMecanico.php');
    } else {
        die($sql);
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (!empty($title)) {print($title . ' - ');}
    echo APP_NAME?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="./assets/css/user-solid.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?=APP_URL . 'css/bulma.min.css'?>">
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <?php include_once 'components/sidebarDashboard.php';?>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include_once 'components/navbarDashboard.php';?>
        <!-- End Navbar -->

        <div class="container py-3">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Editar Mecanico
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php 
                        $query = "SELECT * FROM mecanico WHERE RUT_MECANICO ='$rut'";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) { 
                        ?>
                       <form action="<?= APP_URL . 'editarMecanico.php?rut=' . $rut ?>" method="POST">
                            <div class="field-body mb-3">
                                <div class="field">
                                    <label class="label">Rut Mecanico:</label>
                                    <div class="control has-icons-left">
                                        <input type="text" class="input" name="rut" value="<?= $row['RUT_MECANICO'] ?>" disabled>
                                        <span class="icon is-small is-left">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nombre Mecanico</label>
                                    <div class="control">
                                        <input type="text" class="input" name="nombre" value="<?= $row['NOMBRE_MECANICO'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Apellido Mecanico:</label>
                                    <div class="control">
                                        <input type="text" class="input" name="apellido" value="<?= $row['APELLIDO_MECANICO'] ?>">
                                    </div>
                                </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Correo Electronico:</label>
                                    <div class="control">
                                        <input type="email" class="input" name="email" value="<?= $row['CORREO_ELECTRONICO_MECANICO'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Telefono Contacto:</label>
                                    <div class="control">
                                        <input type="text" class="input" name="telefono" value="<?= $row['TELEFONO_MECANICO'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="submit" class="button is-primary">Guardar</button>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="./assets/js/argon-dashboard.min.js?v=2.0.2"></script>
    <?php
include_once "components/footer.php";
?>
