<?php
require '../Dao/citasparticularesDao.php';
require '../Dto/citasparticularesDto.php';
require '../conexion.php';

if (isset($_POST['registro'])) {
    $cDao = new CitasParticularesDao();
    $cDto = new CitasParticularesDto();

    $cDto->setIdCita($_POST['idCita']);
    $cDto->setNombre($_POST['Nombre']);
    $cDto->setCorreo($_POST['Correo']);
    $cDto->setCelular($_POST['Telefono']);
    $cDto->setFecha($_POST['Fecha']);
    $cDto->setCentroMedico($_POST['CentroMedico']);
    $cDto->setEspecialidad($_POST['Especialidad']);
    $cDto->setMensaje($_POST['Mensaje']);

    $mensaje = $cDao->registrarCitaParticular($cDto);

    header("Location:../citaspariculares.php?mensaje=".$mensaje);
}
elseif ($_GET['id']!=null) {
    $cDao = new CitasParticularesDao();

    $mensaje = $cDao->eliminarCitaParticular($_GET['id']);

    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $cDao = new CitasParticularesDao();
    $cDto = new CitasParticularesDto();

    $cDto->setIdCita($_POST['idCita']);
    $cDto->setNombre($_POST['Nombre']);
    $cDto->setCorreo($_POST['Correo']);
    $cDto->setCelular($_POST['Telefono']);
    $cDto->setFecha($_POST['Fecha']);
    $cDto->setCentroMedico($_POST['CentroMedico']);
    $cDto->setEspecialidad($_POST['Especialidad']);
    $cDto->setMensaje($_POST['Mensaje']);

    $mensaje = $cDao->modificarCitaParticular($cDto);
    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}

?>