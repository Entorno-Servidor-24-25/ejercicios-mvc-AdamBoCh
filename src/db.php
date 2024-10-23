<?php
$host = 'db';
$dbname = 'ejercicioMVC';
$username = 'root';
$password = 'root';

try {
    // Conexión a MySQL
    $connection = new mysqli($host, $username, $password);
    
    // Crear la base de datos si no existe
    $createDB = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($connection->query($createDB) === FALSE) {
        echo "Error al crear la base de datos.<br>";
    }

    // Conectar a la base de datos recién creada
    $connection->select_db($dbname);

    // Crear la tabla 'Usuario' si no existe
    $createTable = "CREATE TABLE IF NOT EXISTS Usuario (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL
    )";
    if ($connection->query($createTable) === FALSE) {
        echo "Error al crear la tabla Usuarios.<br>";
    }
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>
