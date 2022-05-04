<?php
session_start();
$title = "Dashboard";
require_once "auth.php";
require_once "config/settings.php";


// ?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
                        Perfil Administrador
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <?php
                        // var_dump ($_SESSION);
                     $query = "SELECT * FROM usuario WHERE id_usuario = '".$_SESSION['userID']."'";

                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) { 
                        ?>
                        <form action="<?= APP_URL . 'perfilAdmin.php?rut=' . $rut ?>" method="POST"">
                            <div class=" field-body mb-3">
                            <div class="field">
                                <label class="label">Rut :</label>
                                <div class="control has-icons-left">
                                    <input type="text" class="input" name="rut" value="<?= $row['ID_USUARIO'] ?>"
                                        disabled>
                                    <span class="icon is-small is-left">
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Nombre</label>
                                <div class="control">
                                    <input type="text" class="input" name="nombre"
                                        value="<?= $row['NOMBRE_USUARIO'] ?>">
                                </div>
                            </div>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <label class="label">Apellido:</label>
                            <div class="control">
                                <input type="text" class="input" name="apellido"
                                    value="<?= $row['APELLIDO_USUARIO'] ?>">
                            </div>
                        </div>
                        <div class="field">
                            <div class="field">
                                <label class="label">Correo Electronico:</label>
                                <div class="control">
                                    <input type="email" class="input" name="email"
                                        value="<?= $row['CORREO_ELECTRONICO'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="field">
                                <label class="label " for="password">Password:</label>
                                <div class="control" style="display: flex;">
                                    <input class="input" type="password" id="password" value="<?= $row['PASSWORD'] ?>"
                                        style="position: initial;">
                                    <i class="bi bi-eye-slash" id="togglePassword"
                                        style="margin-left: -30px; margin-top: 5px;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <div class="field">
                                <label class="label " for="rol">Rol:</label>
                                <div class="control">
                                    <input class="input" type="text" value="<?= $row['ROL'] ?>">
                                </div>
                            </div>
                        </div>
                        </form>

                        <script>
                            const togglePassword = document.querySelector("#togglePassword");
                            const password = document.querySelector("#password");

                            togglePassword.addEventListener("click", function () {
                                // toggle the type attribute
                                const type = password.getAttribute("type") === "password" ? "text" : "password";
                                password.setAttribute("type", type);

                                // toggle the icon
                                this.classList.toggle("bi-eye");
                            });

                            // prevent form submit
                            const form = document.querySelector("form");
                            form.addEventListener('submit', function (e) {
                                e.preventDefault();
                            });
                        </script>
                        <?php } ?>
                    </div>
                </div>

                <div style="text-align: center">
                    <button type="submit" class="btn btn-primary" name="submit">Guardar</button>
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