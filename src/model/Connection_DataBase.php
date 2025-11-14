<?php

class Connection_DataBase {
    private $host = "localhost";
    private $db_name = "libreria";
    private $username = "root";
    private $password = "";

    public function getConnection() {
        $conn = null;

        try {
            $conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        
        } catch (\PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $conn;
    }
}
?>