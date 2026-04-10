<?php
session_start();
require 'conexion_db.php';

if (
  !isset($_POST['Correo']) ||
    !isset($_POST['Contraseña']) ||
    trim($_POST['Correo']) === '' ||
    $_POST['Contraseña'] === ''
)

{
$_SESSION['error_correo'] = 'Ingresa el correo';
$_SESSION['error_contraseña'] = 'Ingresa la contraseña';
header('Location: practica_web.php');
exit();
}

$correo = trim($_POST['correo']);
$contraseña = $_POST['contraseña'];

$sql = "SELECT RPE, Nombre, Ape_Paterno, Ape_Materno, CVE, Telefono, Correo, Contraseña FROM trabajador WHERE correo = ? LIMIT 1";
$stmt = $conexion->prepare($sql);

if (!$stmt) {   
$_SESSION['error_correo'] = 'Error del sistema';
header('Location: practica_web.php');
exit();
}

$stmt->bind_param('s', $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
$_SESSION['error_correo'] = 'Correo incorrecto';
header('Location: practica_web.php');
exit();
}

$usuario = $resultado->fetch_assoc();

if ($resultado->num_rows === 0) {
$_SESSION['error_contraseña'] = 'Contraseña incorrecta';
header('Location: practica_web.php');
exit();
}

$_SESSION['usuario_nombre'] = $usuario['nombre'];
$_SESSION['usuario_correo'] = $usuario['correo'];

exit();
