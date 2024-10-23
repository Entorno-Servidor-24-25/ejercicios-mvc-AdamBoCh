<?php
// Define la constante BASE_PATH con la ruta del directorio actual
define('BASE_PATH', __DIR__);

// Cargar el controlador
require_once BASE_PATH . '/controllers/UserController.php';

// Crear una instancia del controlador y procesar la solicitud
$controller = new UserController();
$controller->getAllUsers();
?>
