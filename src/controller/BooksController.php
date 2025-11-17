<?php 
// Incluye los archivos necesarios de la base de datos y el modelo de libro
require_once '../model/Libro.php';
require_once '../config/Connection_Data_Base.php';

// Crear una nueva conexión a la base de datos
$Connection = new Database("localhost", "root", "", "libreria");
$Pdo = $Connection->getConnection();

// asignar los valores del libro recibido del formulario si la conexión es exitosa
if ($Pdo) {
    $Book = new Book($Pdo);
    $Book->Title = $_GET['BookTitle'];
    $Book->Genero = $_GET['BookGender'];
    $Book->Isbn = $_GET['BookISBN'];
    $Book->DatePublished = $_GET['BookPublicationDate'];


    // Intentar crear el libro en la base de datos
    if ($Book->InsertBook()) {
        echo "Libro registrado exitosamente.";
    } else {
        echo "Error al registrar libro.";
    }
} else {
    echo "No se pudo conectar a la base de datos.";
}