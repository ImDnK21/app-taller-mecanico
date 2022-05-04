<?php
session_start();
$title = "Dashboard";
require_once "auth.php";
require_once "config/settings.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Vehiculos</title>
    <!-- <?php if (!empty($title)) {print($title . ' - ');}
echo APP_NAME?></title> -->
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

<body>
    <div class="g-sidenav-show bg-gray-100"">
    <div class=" min-height-300 bg-primary position-absolute w-100"></div>
    <?php include_once 'components/sidebarDashboard.php';?>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include_once 'components/navbarDashboard.php';?>

        <?php

        $enlace = mysqli_connect("localhost", "root", "root", "tallermecanico1");
        /* comprobar la conexión */
        if (mysqli_connect_errno())
        {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }

        $consulta = "SELECT * FROM VEHICULO ORDER by PATENTE_VEHICULO DESC ";

      ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><abbr title="patente_vehiculo">Patente Vehiculo</abbr></th>
                        <th>
                            <abr title="marca_vehiculo">Marca Vehiculo</abr>
                        </th>
                        <th><abbr title="modelo_vehiculo">Modelo Vehiculo </abbr></th>
                        <th><abbr title="anio_vehiculo">Año Vehiculo </abbr></th>
                        <th><abbr title="tipo_combustible">Tipo Combustible</abbr></th>
                        <th><abbr title="transmision">Transmision</abbr></th>
                        <th><abbr title="color_primario">Color Primario</abbr></th>
                        <th><abbr title="numero_chasis">Numero Chasis</abbr></th>
                        <th><abbr title="kilometraje">Kilometraje</abbr></th>
                        <th><abbr title="tipo_vehiculo">Tipo Vehiculo</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  if ($resultado = mysqli_query($enlace, $consulta)) { ?>
                    <?php foreach ($resultado as $value){ ?>
                    <tr>
                        <td><?= $value['PATENTE_VEHICULO']; ?></td>
                        <td><?= $value['MARCA_VEHICULO']; ?></td>
                        <td><?= $value['MODELO_VEHICULO']; ?></td>
                        <td><?= $value['ANIO_VEHICULO']; ?></td>
                        <td><?= $value['TIPO_COMBUSTIBLE']; ?></td>
                        <td><?= $value['TRANSMISION']; ?></td>
                        <td><?= $value['COLOR_PRIMARIO']; ?></td>
                        <td><?= $value['NUMERO_CHASIS']; ?></td>
                        <td><?= $value['KILOMETRAJE']; ?></td>
                        <td><?= $value['TIPO_VEHICULO']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php mysqli_free_result($resultado); ?>
                    <?php }else{ ?>
                    <tr>
                        <td colspan="3">No data</td>
                    </tr>
                    <?php } ?>
            </table>
            <?php  mysqli_close($enlace); ?>

        </div>

        </div> <!-- /container -->
</body>

</html>