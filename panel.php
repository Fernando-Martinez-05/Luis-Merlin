<?php session_start();;

if (isset($_SESSION["'usuario_id"]) ){

header('Location: login.php');

exit();


}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>


<b><h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario_nombre']);?>
</h1> <p>Has iniciado sesión con el correo: <?php echo htmlspecialchars($_SESSION['usuario_correo']);
 ?></p> <p>Tu ID de usuario es: <?php echo htmlspecialchars($_SESSION['usuario_id']); ?>
 </p> <a href="logout.php">Cerrar sesión</a></b>
    
</body>     
</html>


