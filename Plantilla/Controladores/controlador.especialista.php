<?php

require '../conexion.php';
require '../dao/especialistaDao.php';
require '../dto/especialistaDto.php';

if(isset($_POST['registroes'])){

    $uDao = new EspecialistaDao();
    $uDto = new EspecialistaDto();
    $uDto->setLicencia($_POST['licencia']);
    $uDto->setExpedicion($_POST['expedicion']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setCorreo($_POST['correo']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setCiudad($_POST['ciudad']);
    $uDto->setEspecialidad($_POST['especialidad']);
    $uDto->setEnte($_POST['ente']);


    $mensaje = $uDao->registrarEspecialista($uDto);

    header("Location:../crearespecialista.php?mensaje=".$mensaje);
}elseif ($_GET['id']!=null) {
    $uDao = new EspecialistaDao();

    $mensaje = $uDao->eliminarEspecialista($_GET['id']);

    header("Location:../interfacesadmi/especialista.php?mensaje=".$mensaje);
}


?>