<?php 
session_start();
$title = "Registrarse";
require_once("config/settings.php");
include_once("components/header.php");

if (isset($_SESSION['userID'])) {
    header('Location:' . APP_URL);
}

if (!empty($_POST)) {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : false;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    if ($firstname && $lastname && $email && $password) {
        $query = "INSERT INTO USUARIO (NOMBRE_USUARIO, APELLIDO_USUARIO, CORREO_ELECTRONICO, PASSWORD) VALUES ('$firstname', '$lastname', '$email', '" . md5($password) . "')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header('Location:' . APP_URL . 'login?q=success');
        } else {
            $_SESSION['error_message'] = "Error al registrarse. Inténtelo nuevamente.";
            $_SESSION['error_type'] = "warning";
        }
    } else {
        $_SESSION['error_message'] = "Debes rellenar todos los campos.";
        $_SESSION['error_type'] = "warning";
    }
}
?>
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <?php if (isset($_SESSION['error_message']) && isset($_SESSION['error_type'])) { ?>
            <article class="message is-<?= $_SESSION['error_type'] ?>">
                <div class="message-body">
                <?= $_SESSION['error_message'] ?>
                </div>
            </article>
            <?php } unset($_SESSION['error_message']); unset($_SESSION['error_type']); ?>
            <form method="POST" class="card">
                <div class="card-header">
                    <p class="card-header-title">
                        Registro de nuevo usuario
                    </p>
                </div>
                <div class="card-content">
                    <div class="field">
                        <label class="label">Nombre:</label>
                        <div class="control">
                            <input type="text" name="firstname" class="input">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Apellido:</label>
                        <div class="control">
                            <input type="text" name="lastname" class="input">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Correo electrónico:</label>
                        <div class="control">
                            <input type="text" name="email" class="input">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Contraseña:</label>
                        <div class="control">
                            <input type="password" name="password" class="input">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Registrarse</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
include_once("components/footer.php"); 
?>
