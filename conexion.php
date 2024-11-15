<?php
$host = "localhost";      // Dirección del servidor de base de datos
$dbname = "granja_pollo"; // Nombre de la base de datos
$username = "root";       // Usuario de la base de datos (usualmente "root" en local)
$password = "";           // Contraseña de la base de datos (vacío en local)

try {
    // Establecer la conexión con PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar para mostrar errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si ocurre un error
    echo "Error de conexión: " . $e->getMessage();
}
?>
