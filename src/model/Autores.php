<?php
require_once '../config/Connection_Data_Base.php';
// Definición de la clase User
class Author {
    // Propiedades del usuario
    public $Name;
    public $Lastname;
    public $Nationality;
    public $Birthdate;
    private $Conn;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($Connection) {
        $this->Conn = $Connection;
    }
    
    // Método para crear un nuevo autor
    public function InsertUser() {
        $Query = "INSERT INTO autores (Nombre, Apellido, Nacionalidad, Fecha_nacimiento) VALUES (?, ?, ?, ?)";
        //preparar la consulta
        $Stmt = $this->Conn->prepare($Query);

        // Ejecutar la consulta con los datos del autor
        if ($Stmt->execute([$this->Name, $this->Lastname, $this->Nationality, $this->Birthdate])) {
            return true;
        } else {
            return false;
        }
    }
}