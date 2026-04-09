<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Login </title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script><link rel = "stylesheet" href = "estilo.css">
<!-- Enlace al CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<!--aqui se ajusta el formulario, se le da una posición de altura, de ancho, y en donde se encontrara ubicado el formulario-->



<!-- Le doy un color al label, y hago que el texto tenga una forma centrada-->
<style> label {
color:rgba(49, 75, 26, 1);
text-align: center;
}
/* le doy un tipo de letra distinto al metodo <p> que contiene el texto Subdirección de Ingeniería y Administración de la Construcción Coordinación de Proyectos Termoeléctricos  */
p {
text-transform: uppercase;
font-size: 25px;
}
</style>

<!--Se le da un estilo al button, en este caso al de ingresar se le da un color verde con un texto de color blanco-->
<style> .button{
background-color: darkgreen ;
color: White;
}
</style>
<style>

a{
background-color: darkgreen;
color:white;
}
</style>


<!--Aquí termina el diseño-->


<div class="container text-center">
  <div class="row align-items">

    <div class="col order-first" style = >
<p style="color:Darkgreen;">Gerencia de Construcción<br>de Proyectos Termoeléctricos  
</p>
    </div>
<!--Se agrega una imagen de la carpeta imagenes llamada proyecto cfe.jpg, y se le da una posición de la que no podra moverse, en caso de que no llegara a cargar la imagen debería aparecer el texto "PROYECTO CFE" -->
<div class = "col">
<img src= "imagenes/CFE.png"  class="img-fluid img-1" alt = "Logotipo neutral de la CFE" height="80" tittle ="COMISION FEDERAL DE ELECTRICIDAD"/> </div>  

<div class="row align-items-end">
<div class="col order-last " style = "background-color: blue;">
<img  class="col-md-6 float-md-end mb-3 ms-md-3" src= "imagenes/proyecto cfe.jpg" alt = "PROYECTO CFE"  tittle ="COMISION FEDERAL DE ELECTRICIDAD"></div> 
</div>
</div>
</div>




<!--Aqui lo que se hace es que el login, se enlaza con el archivo procesar_login.php, logrando posible el inicio de sesion-->
<!--Se crea un input, que contenga todos los complementos para poder iniciar sesión con el correo-->
<form action = "procesar_login.php" method= "post">
<br><br><br>
<div class = "form-login">
<b> <label for="fname">Correo</label></b>
<input type = "email" name = "correo" id = "correo" class = "form-control"  placeholder="correo"   required> <head> 
<div></head> 

<!--Se crea un input, que contenga todos los complementos para poder iniciar sesión con la contraseña-->

<b> <label for="fname">Contraseña</label></b>
<label id = "errorlabel" style = "color: red"
class =  "visually-hidden" for = "contraseña" >contraseña:</label> <input type = "password" name = "contraseña" 
id = "contraseña"  class = "form-control" placeholder="contraseña"> 



<!-- se crea el button de registro, este button lo que hace es redireccionar al usuario al registro.php, donde hará el proceso para registrarse y guardarse en la base de datos -->
<div class = "w-100 p-2"> <div class="h-45 d-inline-block" style="width: 100px;"> 
<button  type = "submit" class="button button1">Ingresar</button> </div>
<a href="registro.php">Regístrate aquí</a>

<!--Se crea una condicion, lo que hace es que si hay un error al hacer el login se mande un mensaje de error de color rojo-->
<?php 
if (isset ($_SESSION['error_login'])) {

echo '<p style = "color: red; ">'.
htmlspecialchars($_SESSION['error_login'] ). '</p>';
unset ($_SESSION['error_login']);
} ?>

</form>
</body>
</html>
