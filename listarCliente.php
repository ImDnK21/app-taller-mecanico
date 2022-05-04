<?php
session_start();
$title = "Dashboard";
require_once "auth.php";
require_once "config/settings.php";
include 'funciones.php';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
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
    <style>
        .btn-btn-primary{
            background-color: red;
            border-color: #00a8ff;
        }
    </style>
</head>

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

        $consulta = "SELECT * FROM CLIENTE ORDER by RUT_CLIENTE DESC ";

      ?>

        <table class="table">
            <thead>
                <div class="container">
                    <form method="post" class="form-inline">
                        <div class="form-group mr-3">
                            <input type="text" id="rut" name="rut" placeholder="Buscar por rut"
                                class="form-control">
                        </div>
                        <button  class="btn btn-primary">Ver resultados</button>
                    </form>
                    <?php
                    if (isset($_POST['rut'])) {
                        $consultaSQL = "SELECT * FROM CLIENTE WHERE RUT_CLIENTE LIKE '%" . $_POST['rut'] . "%'";
                      } else {
                        $consultaSQL = "SELECT * FROM CLIENTE";
                      }
                      $titulo = isset($_POST['rut']) ? 'Lista de clientes (' . $_POST['rut'] . ')' : 'Lista de clientes';
                    ?>
                </div>
                <tr>
                    <th title="rut" scope="col">Rut</th>
                    <th title="nombre" scope="col">Nombre</th>
                    <th title="apellido_paterno" scope="col">Apellido Paterno</th>
                    <th title="apellido_materno" scope="col">Apellido Materno</th>
                    <th title="telefono" scope="col">Telefono</th>
                    <th title="direccion" scope="col">Direccion</th>
                    <th title="correo_electronico" scope="col">Correo Electronico</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php  if ($resultado = mysqli_query($enlace, $consulta)) { ?>
                <?php foreach ($resultado as $value){ ?>
                <tr>
                    <td><?= $value['RUT_CLIENTE']; ?></td>
                    <td><?= $value['NOMBRE_CLIENTE']; ?></td>
                    <td><?= $value['APELLIDO_PATERNO_CLIENTE']; ?></td>
                    <td><?= $value['APELLIDO_MATERNO_CLIENTE']; ?></td>
                    <td><?= $value['TELEFONO_CLIENTE']; ?></td>
                    <td><?= $value['DIRECCION']; ?></td>
                    <td><?= $value['CORREO_ELECTRONICO']; ?></td>
                    <td><center><a href="editarCliente.php?rut=<?= $value['RUT_CLIENTE']; ?>">Editar</a></center></td>
                    <td><center>Eliminar</center></td>
                    
                
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



        </div> <!-- /container -->
</body>

</html>