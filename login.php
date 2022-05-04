<?php 
session_start();
$title = "Iniciar sesión";
require_once("config/settings.php");
include_once("components/header.php");

if (isset($_GET) && $_GET['q'] == 'success') {
    $_SESSION['error_message'] = "Usuario registrado con éxito.";
    $_SESSION['error_type'] = "success";
}

if (isset($_SESSION['userID'])) {
    header('Location:' . APP_URL);
}

if (!empty($_POST)) {
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    if ($email && $password) {
        $query = "SELECT ID_USUARIO, NOMBRE_USUARIO, ROL FROM USUARIO WHERE CORREO_ELECTRONICO = '$email' AND PASSWORD = '" .md5($password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows > 0) {
            $result = mysqli_query($conn, $query);
            while($data = mysqli_fetch_assoc($result)) {
                $_SESSION['userID'] = $data['ID_USUARIO'];
                $_SESSION['username'] = $data['NOMBRE_USUARIO'];
                $_SESSION['role'] = $data['ROL'];
            }

            switch($_SESSION['role']) {
                case 'usuario':
                    header('Location:' . APP_URL . 'index');
                    break;
                case 'admin':
                    header('Location:' . APP_URL . 'dashboard');
                    break;
                default: 
                    header('Location:' . APP_URL . 'index');
                    break;
            }
        } else {
            $_SESSION['error_message'] = "El correo o la contraseña son incorrectos.";
            $_SESSION['error_type'] = "danger";
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
                        Inicio de sesión
                    </p>
                </div>
                <div class="card-content">
                    <div class="field">
                        <label class="label">Correo electrónico:</label>
                        <div class="control">
                            <input type="email" name="email" class="input">
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
                            <button class="button is-link">Iniciar sesión</button>
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
