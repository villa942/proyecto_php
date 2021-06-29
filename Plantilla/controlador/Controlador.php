<?php

require '../conexion.php';
require '../dao/enteDao.php';
require '../dto/enteDto.php';

if(isset($_POST['registroe'])){

    $uDao = new EnteDao();
    $uDto = new EnteDto();
    $uDto->setNit($_POST['nit']);
    $uDto->setRazon($_POST['razon']);
    $uDto->setRepresentante($_POST['representante']);
    $uDto->setCorreo($_POST['correo']);
    $uDto->setSitio($_POST['sitio']);
    $uDto->setCiudad($_POST['ciudad']);
    $uDto->setCapacidad($_POST['capacidad']);


    $mensaje = $uDao->registrarEnte($uDto);

    header("Location:../crearente.php?mensaje=".$mensaje);
}


?>