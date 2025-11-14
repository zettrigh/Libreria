<?php
// Clase para manejar la conexión a la base de datos
class Connection_DataBase {
    // Propiedades de conexión
    private $host = "localhost";
    private $db_name = "libreria";
    private $username = "root";
    private $password = "";

    // Método para obtener la conexión PDO
    public function getConnection() {
        $conn = null;

        // Intentar conectar a la base de datos
        try {
            // Crear la conexión PDO
            $conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        
        } catch (\PDOException $exception) {// Capturar errores de conexión
            echo "Connection error: " . $exception->getMessage();
        }

        return $conn;
    }
}
?>