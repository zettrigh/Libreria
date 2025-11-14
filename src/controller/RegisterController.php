<?php
// Controlador para el registro de usuarios
require_once '../model/Usuario.php';
require_once '../model/Connection_DataBase.php';

// Crear una nueva conexión a la base de datos
$connection = new Connection_DataBase();
$pdo = $connection->getConnection();

// Crear un nuevo usuario
if ($pdo) {
    $user = new User($pdo);
    $user->Name = $_POST['UserName'];
    $user->Lastname = $_POST['UserLastname'];
    $user->Email = $_POST['UserEmail'];
    $user->Password = $_POST['UserPassword'];

    // Intentar crear el usuario en la base de datos
    if ($user->CreateUser()) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar usuario.";
    }
} else { // Si no se pudo conectar a la base de datos
    echo "No se pudo conectar a la base de datos.";
}