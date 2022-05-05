<?php
session_start();
$title = "Dashboard";
require_once "auth.php";
require_once "config/settings.php";
if 
(isset($_POST) && !empty($_POST)){
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $sql = "INSERT INTO mecanico (RUT_MECANICO, NOMBRE_MECANICO, APELLIDO_MECANICO, CORREO_ELECTRONICO_MECANICO, TELEFONO_MECANICO) VALUES ('$rut', '$nombre', '$apellido','$correo', '$telefono' )";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo'<script type="text/javascript">
        alert("Tarea Guardada");
        window.location.href="DashboardAgregarCliente.php";
        </script>';
        
    exit();
    } else {
        var_dump ($sql);
    }
};
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
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
    <link rel="stylesheet" href="https://bulma.io/vendor/fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?=APP_URL . 'css/bulma.min.css'?>">
    <style>
        .is-complete {
            text-decoration: line-through;
        }

        .button-submit {
            padding-top: 25px;
            padding-bottom: 25px;
            text-align: center;


        }
    </style>
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
                        Registrar Mecanico
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <form method="POST">
                            <div class="field-body mb-3">
                                <div class="field">
                                    <label class="label">Rut Mecanico:</label>
                                    <div class="control has-icons-left">
                                        <input type="text" class="input" name="rut">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-car"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nombre Mecanico</label>
                                    <div class="control">
                                        <input type="text" class="input" name="nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Apellido Mecanico:</label>
                                    <div class="control">
                                        <input type="text" class="input" name="apellido">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Correo Electronico</label>
                                    <div class="control">
                                        <input type="text" class="input" name="correo">
                                    </div>
                                </div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Telefono Contacto:</label>
                                    <div class="control">
                                        <input type="text" class="input" name="telefono">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="button-submit">
                                    <button type="submit" class="btn btn-primary"
                                        style="text-align: center;">Guardar</button>
                                </div>
                        </form>

                    </div>
                </div>



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