<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link rel="stylesheet"  href = "diseñoo.css">

</head>
<body>
<div class = "main-card">
<?php
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "proyecto_curso";

/* Conexión */
$link = mysqli_connect($host, $usuario, $password, $bd);

if (!$link) {
die("Error conectando a la base de datos: " . mysqli_connect_error());
}

/* Consulta */
echo "REGISTROS DE LA TABLA DE TRABAJADOR.<br><br>";

$sql = "SELECT nombre, ape_paterno FROM trabajador";
$result = mysqli_query($link, $sql);

if (!$result) {
die("Error en la consulta: " . mysqli_error($link));
}
?>

<?php
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
    <td>{$row['nombre']}</td>
    <td>{$row['ape_paterno']}</td>
  </tr>";
}
?>

<p class="heider-text">Practica web</p>
</p>

<div class = "header-top">
<img src="fondo/fondo.jpg"   class = "fondo" alt="un fondo gris" title="fondo gris">

<!--Aqui lo que se hace es que el login se enlaza con procesar_login.php-->

</div>
<form action="procesar_practica_web.php" method="post">
<br><br><br>

<div class="main-card-registro">

<b><label for="name">Nombre</label></b>
<input type="name" name="name" id="name" class="form-control" placeholder="nombre" required > 

<b><label for="correo">Correo</label></b>
<input type="email" name="correo" id="correo" class="form-control" placeholder="correo" required> 

<!-- input contraseña -->  
<b><label for="contraseña">Contraseña</label></b>

<label id="errorlabel" style="color: red" class="visually-hidden" for="contraseña">Contraseña</label> 
<input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="contraseña" required > 

<button  href = "procesar_practica_web.php" type="submit" class="button button1">Ingresar</button>

<a href = "logica/registro.php" type = "submit"  class = "registrarse">Registrarse</a>
</div> 

<?php 
if (isset($_SESSION['error_login'])) {
echo '<p style="color: red;">' . htmlspecialchars($_SESSION['error_login']) . '</p>';
unset($_SESSION['error_login']);
}
?> 


<?php 
if (isset($_SESSION['error_login'])) {
echo '<p style="color: red;">' . htmlspecialchars($_SESSION['error_login']) . '</p>';
unset($_SESSION['error_login']);
}
?> 
</div>
</form>
</form>
</body>
</html>