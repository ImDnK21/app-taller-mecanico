<?php
require_once('config/settings.php');
session_start();
session_destroy();
header('Location: ' . APP_URL . 'login');
