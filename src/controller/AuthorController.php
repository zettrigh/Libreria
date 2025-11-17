<?php
// Controlador para el registro de usuarios
require_once '../model/Autores.php';
require_once '../config/Connection_Data_Base.php';


// Crear una nueva conexión a la base de datos
$connection = new DataBase("localhost", "root", "", "libreria");
$Pdo = $connection->getConnection();

// Crear un nuevo usuario
if ($Pdo) {
    $User = new User($Pdo);
    $User->Name = $_GET['UserName'];
    $User->Lastname = $_GET['UserLastname'];
    $User->Email = $_GET['UserEmail'];
    $User->Password = $_GET['UserPassword'];

    // Intentar crear el usuario en la base de datos
    if ($User->InsertUser()) {
        echo "Usuario registrado exitosamente.";
        echo "<br><a href='../view/UserLogin.php'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar usuario.";
    }
} else { // Si no se pudo conectar a la base de datos
    echo "No se pudo conectar a la base de datos.";
}