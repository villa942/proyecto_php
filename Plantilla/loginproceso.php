<?php

session_start();
require '../Plantilla/conexion.php';

$cnn = Conexion::getConexion();
$usuario = $_POST['txtUsu'];
$contraseña = $_POST['txtPass'];

$sentencia = $cnn->prepare('SELECT * FROM usuarios WHERE cedula = ? and contraseña = ?;');
$sentencia->execute([$usuario,$contraseña]);

$datos = $sentencia->fetch(PDO::FETCH_OBJ);

if ($datos === false) {
    header('Location: login.php');
}elseif ($sentencia->rowCount() == 1) {
    $_SESSION['nombre'] = $datos->cedula;
    header('Location: Dashboard/index.html');
}

?>