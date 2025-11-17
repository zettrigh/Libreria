<?php 
// Clase para crear la base de datos
class Database {
    private $Host = "localhost";
    private $Username = "root";
    private $Password = "";
    private $BD_name = "libreria";

    // Constructor que recibe los parámetros de conexión
    public function __construct($Host, $Username, $Password, $BD_name) {
        $this->Host = $Host;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->BD_name = $BD_name;
    }
    // Método para crear las tablas en la base de datos
    public function CreateTable($QueryTableBD, $Conn) {
        // Crear las tablas utilizando un bucle foreach para cada consulta dentro del array $QueryTableBD
        foreach ($QueryTableBD as $TableName => $CreateQuery) {
            try {
                $Conn->exec($CreateQuery);
            } catch (PDOException $e) {
                echo "Error creando tabla {$TableName}: " . $e->getMessage() . "\n";
            }

        }
    }

    // Método para obtener la conexión a la base de datos
    public function getConnection() {
        try {
            $Conn = new PDO("mysql:host=" . $this->Host . ";dbname=" . $this->BD_name, $this->Username, $this->Password);
            return $Conn;

        } catch (PDOException $e) {
            echo "Error de conexión a la base de datos: " . $e->getMessage();
            return null;
        }
    }
    // Método para crear la base de datos si no existe
    public function createDatabase() {
        try {
            
            $Conn = new PDO("mysql:host=" . $this->Host, $this->Username, $this->Password);

            $DataBaseCreate = "CREATE DATABASE IF NOT EXISTS " . $this->BD_name;
            $Conn->exec($DataBaseCreate);
            
                // Definir las consultas para crear las tablas con un bucle foreach 
        } catch (PDOexception $e) {
            echo "Error al crear la base de datos: " . $e->getMessage();
        }
    }
    public function selectBooks() {
        try {
            $Conn = $this->getConnection();
            $stmt = $Conn->prepare("SELECT * FROM libros 
                RIGHT JOIN autores ON libros.fk_id_autor = autores.id_autor");
            $stmt->execute();
            return $stmt;
        } catch (PDOException $e) {
            echo "Error al seleccionar los libros: " . $e->getMessage();
            return null;
        }
    }
}