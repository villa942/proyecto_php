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
     header('Location: Dashboard/admin.html');
 }

?> 
<!-- <?php
    // $usuario = $_POST['txtUsu'];
    // $contraseña = $_POST['txtPass'];
    // session_start();

    // $_SESSION['txtUsu']=$usuario;

    // $conexion=mysqli_connect("localhost","root","","centro_salud");
    
    // $consulta='SELECT * FROM usuarios WHERE cedula = ? and contraseña = ?';
    // $resultado=mysqli_query($conexion,$consulta);

    // $filas=mysqli_fetch_array($resultado);

    // if ($filas['tipo_usuario']==1) {//admin
    //     header('Location: Dashboard/index.html');
    // }else
    // if ($filas['tipo_usuario']==2) {//usuario
    //     header('Location: interfacesadmi/usuarios.php');
    // }else{
    //     ?>
    //     <?php
    //     include("Dashboard/index.html");
    //     ?>
    //     <h1>Error de autenticacion</h1>
    //     <?php
    // }
    // mysqli_free_result($resultado);
    // mysqli_close($conexion);
?> -->