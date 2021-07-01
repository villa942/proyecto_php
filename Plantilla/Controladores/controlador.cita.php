<?php
require '../Dao/citaDao.php';
require '../Dto/citaDto.php';
require '../conexion.php';

if (isset($_POST['registro'])) {
    $cDao = new CitaDao();
    $cDto = new CitaDto();

    $cDto->setIdCita($_POST['idCita']);
    $cDto->setFecha($_POST['fecha']);
    $cDto->setEspecialidad($_POST['especialidad']);
    $cDto->setHora($_POST['hora']);
    $cDto->setCentroMedico($_POST['centroMedico']);


    $mensaje = $cDao->registrarCita($cDto);

    header("Location:../interfacenormal/citasprogramadas.php?mensaje=".$mensaje);
}
elseif ($_GET['id']!=null) {
    $cDao = new CitaDao();

    $mensaje = $cDao->eliminarCita($_GET['id']);

    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $cDao = new CitaDao();
    $cDto = new CitaDto();

    $cDto->setIdCita($_POST['idCita']);
    $cDto->setFecha($_POST['fecha']);
    $cDto->setEspecialidad($_POST['especialidad']);
    $cDto->setHora($_POST['hora']);
    $cDto->setCentroMedico($_POST['centroMedico']);

    $mensaje = $cDao->modificarCita($cDto);
    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}

?>