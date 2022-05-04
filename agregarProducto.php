<?php
session_start();
$title = "Dashboard";
require_once "auth.php";
require_once "config/settings.php";

if  
(isset($_POST) && !empty($_POST)){
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tipo_repuesto = $_POST['tipo_repuesto'];
    $calidad = $_POST['calidad'];
    $anio_fabricacion = $_POST['anio_fabricacion'];
     $sql = "INSERT INTO REPUESTO (id_repuesto, nombre_repuesto, descrip_repuesto, tipo_repuesto, calidad, anio_fabricacion) VALUES ('$codigo', '$nombre', '$descripcion', '$tipo_repuesto', '$calidad', '$anio_fabricacion')";   
     $result = mysqli_query($conn, $sql);

    if ($result){
        echo'<script type="text/javascript">
            alert("Tarea Guardada");
            window.location.href="DashboardAgregarCliente.php";
            </script>';
            
        exit();
    } else {
        die ($sql);
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
                        Agregar Productos al almacen
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <form method="POST" action="dashboardAgregarCliente.php">
                            <div class="field-body mb-3">
                                <div class="field">
                                    <label class="label">Codigo producto :</label>
                                    <div class="control has-icons-left">
                                        <input type="text" class="input" name="codigo">
                                        <span class="icon is-small is-left">
                                            <i class="fa-solid fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nombre del producto</label>
                                    <div class="control">
                                        <input type="text" class="input" name="nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Descripcion:</label>
                                    <div class="control">
                                        <input type="text" class="input" name="apellido">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Tipo de repuesto</label>
                                    <div class="control">
                                        <input type="text" class="input" name="apellidoMaterno">
                                    </div>
                                </div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">Calidad (Nuevo / Usado):</label>
                                    <div class="control">
                                        <input type="text" class="input" name="calidad">
                                    </div>
                                </div>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <label class="label">año de fabricacion:</label>
                                    <div class="control">
                                        <input type="date" class="input" name="anio">
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" class="button is-primary">Guardar</button>

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