<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Libros</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Libros Disponibles</h2>

    <?php
    require_once '../config/Connection_Data_Base.php';

    $Sql = "SELECT * FROM libros 
             RIGHT JOIN autores ON libros.fk_id_autor = autores.id_autor";
    
    $Stmt = $Conn->getConnection()->query($Sql);
    $Query = $Stmt->rowCount();
    
    if ($Query > 0) {
        // Los resultados se encontraron
    ?>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Género</th>
                <th>Año Publicación</th>
                <th>Disponible</th>
                <th>Autor</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // El bucle while itera sobre cada fila de la base de datos
            // FETCH_ASSOC obtiene los datos como un array asociativo
            while ($row = $Stmt->fetch(PDO::FETCH_ASSOC)) {
                // Extrae los valores de $row['id_libro'], $row['Titulo'], etc.
                extract($row); 
            ?>
            <tr>
                <td><?php echo htmlspecialchars($Titulo); ?></td>
                <td><?php echo htmlspecialchars($Genero); ?></td>
                <td><?php echo htmlspecialchars($Anio_publicacion); ?></td>
                <td><?php echo $Disponible ? 'Sí' : 'No';//condicional ternario para economizar lineas de codigo ?></td>
                <td><?php echo htmlspecialchars($Nombre . ' ' . $Apellido); ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    } else {
        // No se encontraron resultados
        echo "<p>No hay libros registrados.</p>";
    }
    ?>

</body>
</html>