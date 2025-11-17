<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
    <h1>Registrar Libro</h1>
    <hr>
    
    <form action="/src/controller/BooksController.php" method="get">

        <label for="Titulo">Titulo:</label>
        <input type="text" name="BookTitle" required></br></br>

        <label for="ISBN">IBSN:</label>
        <input type="text" name="BookISBN" min="13" max="13" required></br></br>

        <label for="Genero">Genero:</label>
        <input type="text" name="BookGender" required></br></br>

        <label for="FechaPublicacion">Fecha de publicacion:</label>
        <input type="date" name="BookPublicationDate" min="4" required></br></br>

        <input type="reset" value="Limpiar campos">
        <button type="submit" value="register">Registrar</button>
    </form>

    <a href="../index.php"><button>volver</button></a>
</body>
</html>