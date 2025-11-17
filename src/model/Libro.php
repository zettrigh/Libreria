<?php
require_once '../model/DataBase.php';
// Definición de la clase libro
class Book {
    // Propiedades del libro
    public $Title;
    public $Genero;
    public $Isbn;
    public $DatePublished;
    private $Conn;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($Connection) {
        $this->Conn = $Connection;
    }
    
    // Método para crear un nuevo libro en la base de datos
    public function InsertBook() {
        $Query = "INSERT INTO libros (Titulo, Genero, isbn, Anio_publicacion) VALUES (?, ?, ?, ?)";
        //preparar la consulta
        $Stmt = $this->Conn->prepare($Query);

        // Ejecutar la consulta con los datos del libro
        if ($Stmt->execute([$this->Title, $this->Genero, $this->Isbn, $this->DatePublished])) {
            return true;
        } else {
            return false;
        }
    }
}