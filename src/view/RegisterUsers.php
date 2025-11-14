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
        
        <label for="nombre">Nombre</label></br>
        <input type="text" id="nombre" name="UserName" required></br>
        
        <label for="apellido">Apellido</label></br>
        <input type="text" id="apellido" name="UserLastname" required></br>
        
        <label for="email">Email</label></br>
        <input type="email" id="email" name="UserEmail" required></br>
        
        <label for="password">Contraseña</label></br>
        <input type="password" id="password" name="UserPassword" required></br>
            
        <label for="password_confirm">Confirmar contraseña</label></br>
        <input type="password" id="password_confirm" name="UserPassworConfirm" required></br>
    
        <input type="reset" value="Limpiar campos">
        <button type="submit" value="register">Registrar</button>
    </form>
</body>
</html>