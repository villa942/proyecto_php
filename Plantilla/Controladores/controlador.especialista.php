<?php

require '../conexion.php';
require '../dao/especialistaDao.php';
require '../dto/especialistaDto.php';

if(isset($_POST['registroes'])){

    $uDao = new EspecialistaDao();
    $uDto = new EspecialistaDto();
    $uDto->setLicencia($_POST['licencia']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setCorreo($_POST['correo']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setEspecialidad($_POST['especialidad']);
    $uDto->setCiudad($_POST['ciudad']);
    $uDto->setExpedicion($_POST['expedicion']);
    
    $uDto->setEnte($_POST['ente']);


    $mensaje = $uDao->registrarEspecialista($uDto);

    header("Location:../interfacesadmi/especialista.php?mensaje=".$mensaje);
}elseif ($_GET['id']!=null) {
    $uDao = new EspecialistaDao();

    $mensaje = $uDao->eliminarEspecialista($_GET['id']);

    header("Location:../interfacesadmi/especialista.php?mensaje=".$mensaje);
}elseif (isset($_POST['modificare'])) {
    $uDao = new EspecialistaDao();
    $uDto = new EspecialistaDto();

    $uDto->setLicencia($_POST['licencia']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setCorreo($_POST['correo']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setEspecialidad($_POST['especialidad']);
    $uDto->setCiudad($_POST['ciudad']);
    $uDto->setExpedicion($_POST['expedicion']);

    $mensaje = $uDao->modificarEspecialista($uDto);
    header("Location:../interfacesadmi/especialistas.php?mensaje=".$mensaje);
}elseif(isset($_POST['registrocon'])){

    $uDao = new EspecialistaDao();
    $uDto = new EspecialistaDto();
    $uDto->setLicencia($_POST['licencia']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setCorreo($_POST['correo']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setEspecialidad($_POST['especialidad']);
    $uDto->setCiudad($_POST['ciudad']);
    $uDto->setExpedicion($_POST['expedicion']);
    
    $uDto->setEnte($_POST['ente']);


    $mensaje = $uDao->registrarEspecialista($uDto);

    header("Location:../interfacecontenido/especialista.php?mensaje=".$mensaje);
}elseif (isset($_POST['modificar'])) {
    $uDao = new EspecialistaDao();
    $uDto = new EspecialistaDto();

    $uDto->setLicencia($_POST['licencia']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setCorreo($_POST['correo']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setEspecialidad($_POST['especialidad']);
    $uDto->setCiudad($_POST['ciudad']);
    $uDto->setExpedicion($_POST['expedicion']);

    $mensaje = $uDao->modificarEspecialista($uDto);
    header("Location:../interfacecontenido/especialistas.php?mensaje=".$mensaje);
}elseif ($_GET['id']!=null) {
    $uDao = new EspecialistaDao();

    $mensaje = $uDao->eliminarEspecialista($_GET['id']);

    header("Location:../interfacesadmi/especialista.php?mensaje=".$mensaje);
}


?>