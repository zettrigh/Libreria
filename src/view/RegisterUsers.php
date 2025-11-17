<?php 
    // Definimos el namespace para la vista de registro de usuarios
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuarios</h1>
    <hr>
    
    <form action="../controller/RegisterController.php" method="POST">
        
        <label for="nombre">Nombre</label>
        <input type="text" name="UserName" required></br></br>
        
        <label for="apellido">Apellido</label>
        <input type="text" name="UserLastname" required></br></br>
        
        <label for="email">Email</label>
        <input type="email" name="UserEmail" required></br></br>
        
        <label for="password">Contraseña</label>
        <input type="password" name="UserPassword" required></br></br>
            
        <label for="password_confirm">Confirmar contraseña</label>
        <input type="password" name="UserPassworConfirm" required></br></br>
    
        <input type="reset" value="Limpiar campos">
        <button type="submit" value="register">Registrar</button>
    </form>

    <a href="../index.php"><button>volver</button></a>
</body>
</html>