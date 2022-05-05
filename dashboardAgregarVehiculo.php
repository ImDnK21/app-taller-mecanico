
<?php
session_start();
$title = "Dashboard";
require_once "auth.php";
require_once "config/settings.php";

if
(isset($_POST) && !empty($_POST)){
    $patente = $_POST['patente'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $combustible = $_POST['combustible'];
    $transmision = $_POST['transmision'];
    $color_primario = $_POST['color_primario'];
    $numero_chasis = $_POST['numero_chasis'];
    $kilometraje = $_POST['kilometraje'];
    $tipo = $_POST['tipo'];
    $sql = "INSERT INTO vehiculo (PATENTE_VEHICULO , MARCA_VEHICULO, MODELO_VEHICULO, ANIO_VEHICULO, TIPO_COMBUSTIBLE, TRANSMISION, COLOR_PRIMARIO,NUMERO_CHASIS,KILOMETRAJE,TIPO_VEHICULO) VALUES ('$patente', '$marca', '$modelo', '$anio', '$combustible', '$transmision', '$color_primario', '$numero_chasis', '$kilometraje', '$tipo')";   
    $result = mysqli_query($conn, $sql);
    if ($result){
        '<script type="text/javascript">
            alert("Vehiculo agregado correctamente");
            window.location.href="DashboardAgregarVehiculo.php";
            </script>';
        
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

<body>

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
                            Registrar vehículo
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <form method="POST">
                                <div class="field-body mb-3">
                                    <div class="field">
                                        <label class="label">Patente:</label>
                                        <div class="control has-icons-left">
                                            <input type="text" class="input" name="patente" placeholder="Patente">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-car"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Marca:</label>
                                        <div class="select">
                                            <select style="width: 100%" name="marca">
                                                <option>Audi</option>
                                                <option>BMW</option>
                                                <option>Nissan</option>
                                                <option>KIA</option>
                                                <option>Chery</option>
                                                <option>MG</option>
                                                <option>Subaru</option>
                                                <option>Honda</option>
                                                <option>Toyota</option>
                                                <option>Mazda</option>
                                                <option>Chevrolet</option>
                                                <option>Ford</option>
                                                <option>Renault</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">Modelo:</label>
                                        <div class="control">
                                            <input type="text" class="input" name="modelo">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Año Vehiculo:</label>
                                        <div class="control">
                                            <input type="number" placeholder="YYYY" min="1980" max="2024" name="anio">
                                            <script>
                                                document.querySelector("input[type=number]")
                                                    .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">Combustible:</label>
                                        <div class="select">
                                            <select style="width: 100%" name="combustible">
                                                <option>Gasolina</option>
                                                <option>Diesel</option>
                                                <option>Gas natural</option>
                                                <option>Electrico</option>
                                                <option>Hibrido</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Transmisión:</label>
                                        <div class="select">
                                            <select style="width: 100%" name="transmision">
                                                <option>Manual</option>
                                                <option>Automatica</option>
                                                <option>CVT</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">Color primario:</label>
                                        <div class="control">
                                            <input type="color" class="input" name="color_primario">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Numero Chasis:</label>
                                        <div class="control">
                                            <input type="text" class="input" name="numero_chasis">
                                        </div>
                                    </div>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label">Kilometraje:</label>
                                        <div class="control">
                                            <input type="number" class="input" name="kilometraje">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Tipo Vehiculo:</label>
                                        <div class="select">
                                            <select style="width: 100%" name="tipo_vehicul\">
                                                <option>Sedan</option>
                                                <option>Station Wagon</option>
                                                <option>HatchBack</option>
                                                <option>SUV</option>
                                                <option>Deportivo</option>
                                                <option>Vehiculo Comercial</option>
                                                <option>VAN</option>
                                                <option>Pick Up</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-submit">
                                    <button type="submit" class="btn btn-secondary">Guardar</button>
                                </div>
                            </form>
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