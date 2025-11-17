<?php 
require_once '../model/DataBase.php';;

try {
    // Consultas para crear las tablas
    $QueryTableBD = [
                "Autores" => "
                CREATE TABLE IF NOT EXISTS Autores (
                    id_autor INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
                    Nombre VARCHAR(255) NOT NULL,
                    Apellido VARCHAR(255) NOT NULL,
                    Nacionalidad VARCHAR(255) NOT NULL,
                    Fecha_nacimiento DATE NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",
                
                "Usuarios" => "
                CREATE TABLE IF NOT EXISTS Usuarios (
                    id_usuario INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
                    Nombre VARCHAR(255) NOT NULL,
                    Apellido VARCHAR(255) NOT NULL,
                    Email VARCHAR(255) UNIQUE NOT NULL,
                    Contrasenia VARCHAR(255) NOT NULL,
                    Fecha_registro DATE NOT NULL,
                    Activo BOOLEAN NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",
                
                "Libros" => "
                CREATE TABLE IF NOT EXISTS Libros (
                    id_libro INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
                    Titulo VARCHAR(255) NOT NULL,
                    Genero VARCHAR(255) NOT NULL,
                    isbn INTEGER NOT NULL,
                    Anio_publicacion DATE NOT NULL,
                    Fecha_agregado DATE NOT NULL,
                    Disponible BOOLEAN NOT NULL,
                    fk_id_autor INTEGER NOT NULL,
                    FOREIGN KEY (fk_id_autor) REFERENCES Autores(id_autor) ON DELETE NO ACTION ON UPDATE NO ACTION
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",
                
                "Prestamo" => "
                CREATE TABLE IF NOT EXISTS Prestamo (
                    id_prestamo INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL UNIQUE,
                    id_usuario INTEGER NOT NULL,
                    id_libro INTEGER NOT NULL,
                    Fecha_prestamo DATE NOT NULL,
                    Fecha_devolucion_esperada DATETIME NOT NULL,
                    Fecha_devolucion_real DATETIME NOT NULL,
                    Devuelto BOOLEAN NOT NULL,
                    Multa DECIMAL(10, 2) NOT NULL,
                    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id_usuario) ON DELETE NO ACTION ON UPDATE NO ACTION,
                    FOREIGN KEY (id_libro) REFERENCES Libros(id_libro) ON DELETE NO ACTION ON UPDATE NO ACTION
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4"
            ];

    // Objeto de la clase Database para crear la base de datos y las tablas
    $Conn = new Database("localhost", "root", "", "libreria");
    $Conn->createDatabase();
    $Conn->CreateTable($QueryTableBD, $Conn->getConnection());
    echo "<h2>Base de datos y tablas creadas o verificadas exitosamente.</h2>";
    echo "<br><a href='../index.php'>Volver al inicio</a>"; 


} catch (PDOException $e) {
    echo "Error al crear la base de datos: " . $e->getMessage();
}
