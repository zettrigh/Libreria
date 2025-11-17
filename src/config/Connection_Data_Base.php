<?php 
// Clase para conectar a la base de datos
require_once '../model/DataBase.php';

// Crear la conexión a la base de datos
try {
    // Instantiar la clase Database y obtener la conexión
    $Conn = new Database("localhost", "root", "", "libreria");
    $Conn->getConnection();

} catch (PDOException $e) {
    echo "Error al crear la base de datos: " . $e->getMessage();
}
