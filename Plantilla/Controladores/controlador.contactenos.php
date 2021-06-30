<?php
require '../Dao/contactenosDao.php';
require '../Dto/contactenosDto.php';
require '../conexion.php';

if (isset($_POST['registro'])) {
    $cDao = new  ContactenosDao();
    $cDto = new  ContactenosDto();

    $cDto->setIdContacto($_POST['idContacto']);
    $cDto->setNombre($_POST['Nombre']);
    $cDto->setCorreo($_POST['Correo']);
    $cDto->setAsunto($_POST['Asunto']);
    $cDto->setMensaje($_POST['Mensaje']);

    $mensaje = $cDao->registrarContacto($cDto);

    header("Location:../index.html?mensaje=".$mensaje);
}
elseif ($_GET['id']!=null) {
    $cDao = new  ContactenosDao();

    $mensaje = $cDao->eliminarContacto($_GET['id']);

    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $cDao = new  ContactenosDao();
    $cDto = new  ContactenosDto();

    $cDto->setIdContacto($_POST['idContacto']);
    $cDto->setNombre($_POST['Nombre']);
    $cDto->setCorreo($_POST['Correo']);
    $cDto->setAsunto($_POST['Asunto']);
    $cDto->setMensaje($_POST['Mensaje']);


    $mensaje = $cDao->modificarContacto($cDto);
    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}

?>