<?php
session_start();
require 'conexion.php';

if (
    !isset($_POST['correo']) ||
    !isset($_POST['contraseña']) ||
    trim($_POST['correo']) === '' ||
    $_POST['contraseña'] === ''
) {
    $_SESSION['error_correo'] = 'Ingresa el correo';
    $_SESSION['error_contraseña'] = 'Ingresa la contraseña';
    header('Location: login.php');
    exit();
}

$correo = trim($_POST['correo']);
$contraseña = $_POST['contraseña'];

$sql = "SELECT id, nombre, correo, contraseña FROM usuarios WHERE correo = ? LIMIT 1";
$stmt = $conexion->prepare($sql);

if (!$stmt) {   
    $_SESSION['error_correo'] = 'Error del sistema';
    header('Location: login.php');
    exit();
}

$stmt->bind_param('s', $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    $_SESSION['error_correo'] = 'Correo incorrecto';
    header('Location: login.php');
    exit();
}

$usuario = $resultado->fetch_assoc();

if ($resultado->num_rows === 0) {
    $_SESSION['error_contraseña'] = 'Contraseña incorrecta';
    header('Location: login.php');
    exit();
}
$_SESSION['usuario_id'] = $usuario['id'];
$_SESSION['usuario_nombre'] = $usuario['nombre'];
$_SESSION['usuario_correo'] = $usuario['correo'];

unset($_SESSION['error_correo']);
unset($_SESSION['error_contraseña']);
unset($_SESSION['old_correo']);

header('Location: panel.php');
exit();
