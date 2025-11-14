<?php
// Definición de la clase User
class User {
    // Propiedades del usuario
    public $Name;
    public $Lastname;
    public $Email;
    public $Password;
    private $conn;

    // Constructor que recibe la conexión a la base de datos
    public function __construct($Connection) {
        $this->conn = $Connection;
    }
    
    // Método para crear un nuevo usuario
    public function CreateUser() {
        $Query = "INSERT INTO usuarios (Nombre, Apellido, Email, Contrasenia) VALUES (?, ?, ?, ?)";
        //preparar la consulta
        $Stmt = $this->conn->prepare($Query);

        // Ejecutar la consulta con los datos del usuario
        if ($Stmt->execute([$this->Name, $this->Lastname, $this->Email, password_hash($this->Password, PASSWORD_BCRYPT)])) {
            return true;
        } else {
            return false;
        }
    }
}