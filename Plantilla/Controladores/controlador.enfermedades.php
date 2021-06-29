<?php
require '../Dao/enfermedadesDao.php';
require '../Dto/enfermedadesDto.php';
require '../conexion.php';

if (isset($_POST['registro'])) {
    $eDao = new EnfermedadesDao();
    $eDto = new EnfermedadesDto();

    $eDto->setCodigo($_POST['codigo']);
    $eDto->setNombreEnf($_POST['nombre_enfermedad']);
    $eDto->setDescripcion($_POST['descripcion']);
    $eDto->setSintomas($_POST['sintomas']);
    $eDto->setRecomendaciones($_POST['recomendaciones']);

    $mensaje = $eDao->registrarEnfermedad($eDto);

    header("Location:../enfermedades.php?mensaje=".$mensaje);
}
elseif ($_GET['id']!=null) {
    $eDao = new EnfermedadesDao();

    $mensaje = $eDao->eliminarEnfermedad($_GET['id']);

    header("Location:../listaenfermedades.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $eDao = new EnfermedadesDao();
    $eDto = new EnfermedadesDto();

    $eDto->setCodigo($_POST['codigo']);
    $eDto->setNombreEnf($_POST['nombre_enfermedad']);
    $eDto->setDescripcion($_POST['descripcion']);
    $eDto->setSintomas($_POST['sintomas']);
    $eDto->setRecomendaciones($_POST['recomendaciones']);

    $mensaje = $eDao->modificarEnfermedad($eDto);
    header("Location:../listaenfermedades.php?mensaje=".$mensaje);
}

?>