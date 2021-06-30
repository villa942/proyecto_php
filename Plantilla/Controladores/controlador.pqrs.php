<?php
require '../Dao/pqrsDao.php';
require '../Dto/pqrsDto.php';
require '../conexion.php';

if (isset($_POST['registro'])) {
    $pDao = new PqrsDao();
    $pDto = new PqrsDto();

    $pDto->setIdPqrs($_POST['idPqrs']);
    $pDto->setNombre($_POST['Nombre']);
    $pDto->setAsunto($_POST['Asunto']);
    $pDto->setMensaje($_POST['Mensaje']);

    $mensaje = $pDao->registrarPqrs($pDto);

    header("Location:../pqrs.php?mensaje=".$mensaje);
}
elseif ($_GET['id']!=null) {
    $pDao = new PqrsDao();

    $mensaje = $pDao->eliminarPqrs($_GET['id']);

    header("Location:../interfacesadmi/pqrlistado.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $pDao = new PqrsDao();
    $pDto = new PqrsDto();

    $pDto->setIdPqrs($_POST['idPqrs']);
    $pDto->setNombre($_POST['Nombre']);
    $pDto->setAsunto($_POST['Asunto']);
    $pDto->setMensaje($_POST['Mensaje']);

    $mensaje = $cDao->modificarPqrs($pDto);
    header("Location:../interfacesadmi/pqrlistado.php?mensaje=".$mensaje);
}

?>