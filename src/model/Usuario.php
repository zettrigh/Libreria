
<?php

class User {
    public $Name;
    public $Lastname;
    public $Email;
    public $Password;
    private $conn;

    public function __construct($Connection) {
        $this->conn = $Connection;
    }

    public function Create() {
        $Query = "INSERT INTO usuarios (Nombre, Apellido, Email, Contrasenia) VALUES (?, ?, ?, ?)";
        $Stmt = $this->conn->prepare($Query);

        if ($Stmt->execute([$this->Name, $this->Lastname, $this->Email, password_hash($this->Password, PASSWORD_BCRYPT)])) {
            return true;
        } else {
            return false;
        }
    }
}