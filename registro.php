<?php
require 'conexion.php';

if (isset($_POST['nombre'])) {

    $nombre     = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $correo     = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contraseña = mysqli_real_escape_string($conexion,$_POST['contraseña']);

    $query = "INSERT INTO usuarios (nombre, correo, contraseña)
              VALUES ('$nombre', '$correo', '$contraseña')";

    if (mysqli_query($conexion, $query)) {
        echo "<div class='form'>
                <h3>Registro exitoso.</h3>
                <a href='login.php'>Iniciar sesión</a>
              </div>";
    } else {
        echo "<div class='form'>
                <h3>Error al registrar: " . mysqli_error($conexion) . "</h3>
              </div>";
    }

} else {
?>
<div class="form">
    <h1>Registro</h1>
    <form name="registro" method="post">
        <input type="text" name="nombre" placeholder="Nombre de usuario" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<?php } ?>
