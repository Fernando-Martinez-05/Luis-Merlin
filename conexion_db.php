 <?php
 $host = "localhost";
    $usuariodb = "root";
    $password = "";
    $nombredb = "proyecto_curso";

    $conexion = new mysqli ("localhost", "root", "", "proyecto_curso");
    


 if ($conexion->connect_error) {


    die("Error en la conexion 8 de diciembre del 2025 " . $conexion->connect_error);
 }

 $conexion->set_charset("utf8");
    
?>