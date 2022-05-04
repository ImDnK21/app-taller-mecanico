<?php
session_start();
$title = "Dashboard";
require_once "auth.php";
require_once "config/settings.php";



?>
<!DOCTYPE html>
<html lang="en">


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listar Mecanicos</title>
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

        // $consulta = "SELECT * FROM MECANICO ORDER by RUT_MECANICO ASC ";

      ?>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <div class="container">
                        <form method="GET" class="form-inline">
                            <div class="form-group mr-3">
                                <input type="text" id="rut" name="rut" placeholder="Buscar por rut"
                                    class="form-control">
                            </div>
                            <button class="btn btn-primary">Ver resultados</button>
                        </form>
                        <?php
                    if (isset($_GET['rut'])) {
                        $consultaSQL = "SELECT * FROM MECANICO WHERE RUT_MECANICO LIKE '%" . $_GET['rut'] . "%'";
                      } else {
                        $consultaSQL = "SELECT * FROM MECANICO";
                      }
                      $titulo = isset($_GET['rut']) ? 'Lista de mecanicos (' . $_GET['rut'] . ')' : 'Lista de mecanicos';
                    ?>
                    </div>
                    <tr>
                        <th><abbr title="rut_mecanico">Rut Mecanico</abbr></th>
                        <th>
                            <abr title="nombre_mecanico">Nombre Mecanico</abr>
                        </th>
                        <th><abbr title="apellido_mecanico">Apellido Mecanico</abbr></th>
                        <th><abbr title="correo_electronico">Correo Electronico</abbr></th>
                        <th><abbr title="telefono">Telefono de contacto</abbr></th>
                    </tr>
                </thead>
                <tbody>
                    <?php  if ($resultado = mysqli_query($enlace, $consultaSQL)) { ?>
                    <?php foreach ($resultado as $value){ ?>
                    <tr>
                        <td><?= $value['RUT_MECANICO']; ?></td>
                        <td><?= $value['NOMBRE_MECANICO']; ?></td>
                        <td><?= $value['APELLIDO_MECANICO']; ?></td>
                        <td><?= $value['CORREO_ELECTRONICO_MECANICO']; ?></td>
                        <td><?= $value['TELEFONO_MECANICO']; ?></td>
                        <td>
                            <center><a href="editarMecanico.php?rut=<?= $value['RUT_MECANICO']; ?>">Editar</a></center>
                        </td>
                        <td>
                            <center><a href="eliminarMecanico.php?rut=<?= $value['RUT_MECANICO']; ?>">Eliminar</a>
                            </center>
                        </td>
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