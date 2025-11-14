<?php
require_once '../model/Usuario.php';
require_once '../model/Connection_DataBase.php';

$connection = new Connection_DataBase();
$pdo = $connection->getConnection();

if ($pdo) {
    $user = new User($pdo);
    $user->Name = $_POST['UserName'];
    $user->Lastname = $_POST['UserLastname'];
    $user->Email = $_POST['UserEmail'];
    $user->Password = $_POST['UserPassword'];

    if ($user->Create()) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar usuario.";
    }
} else {
    echo "No se pudo conectar a la base de datos.";
}