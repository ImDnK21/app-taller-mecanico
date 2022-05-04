<?php 
require_once("config/settings.php");

if (!isset($_SESSION['userID'])) {
    header('Location: ' . APP_URL . 'login');
    exit();
}
