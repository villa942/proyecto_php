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
}elseif ($_GET['id']!=null) {
    $uDao = new EnteDao();

    $mensaje = $uDao->eliminarEnte($_GET['id']);

    header("Location:../interfacesadmi/entes.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $uDao = new EnteLoginDao();
    $uDto = new EnteLoginDto();

    $uDto->setNit($_POST['nit']);
    $uDto->setRazon($_POST['razon_social']);
    $uDto->setRepresentante($_POST['nombre_representante_legal']);
    $uDto->setCorreo($_POST['correo_electronico']);
    $uDto->setSitio($_POST['sitio_web']);
    $uDto->setCiudad($_POST['ciudad']);
    $uDto->setCapacidad($_POST['capacidad_pacientes']);

    $mensaje = $uDao->modificarUsuario($uDto);
    header("Location:../interfacesadmi/entes.php?mensaje=".$mensaje);

}

?>