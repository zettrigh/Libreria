<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
</head>
<body>
    <h1>Registro de Autores</h1>
    <form action="../controller/RegisterAuthorController.php" method="POST">
        <label for="AuthorName">Nombre:</label>
        <input type="text" name="AuthorName" required><br><br>

        <label for="AuthorLastname">Apellido:</label>
        <input type="text" name="AuthorLastname" required><br><br>

        <label for="AuthorNationality">Nacionalidad:</label>
        <input type="text" name="AuthorNationality" required><br><br>

        <label for="AuthorBirthdate">Fecha de Nacimiento:</label>
        <input type="date" name="AuthorBirthdate" required><br><br>

        <input type="reset" value="Limpiar campos">
        <input type="submit" value="Registrar Autor">
    </form>

    <a href="../index.php"><button>volver</button></a>
</body>
</html>