<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    
    <h1>Iniciar sesión de Usuarios</h1>
    <hr>
    
    <form action="../controller/LoginController.php" method="POST">
        
        <label for="email">Email</label>
        <input type="email" name="UserEmail" required></br></br>
        
        <label for="password">Contraseña</label>
        <input type="password" name="UserPassword" required></br></br>
    
        <input type="reset" value="Limpiar campos">
        <button type="submit" value="login">Iniciar sesión</button>
    </form>

    <a href="../index.php"><button>volver</button></a>

</body>
</html>