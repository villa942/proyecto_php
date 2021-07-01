<?php
require '../Dao/planesdesaludDao.php';
require '../Dto/planesdesaludDto.php';
require '../conexion.php';

if (isset($_POST['registrar'])) {
    $pDao = new PlanDao();
    $pDto = new PlanDto();

    $pDto->setIdPlan($_POST['idPlan']);
    $pDto->setTipoDocumento($_POST['Tipodocumento']);
    $pDto->setDocumento($_POST['Numerodocumento']);
    $pDto->setNombre($_POST['Nombre']);
    $pDto->setCorreo($_POST['Correo']);
    $pDto->setTelefono($_POST['Telefono']);
    $pDto->setPlanSeleccionado($_POST['Planseleccionado']);

    $mensaje = $pDao->registrarPlan($pDto);

    header("Location:../planesSalud.php?mensaje=".$mensaje);
}
elseif ($_GET['id']!=null) {
    $pDao = new PlanDao();

    $mensaje = $pDao->eliminarPlan($_GET['id']);

    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $pDao = new PlanDao();
    $pDto = new PlanDto();

    $pDto->setIdPlan($_POST['idPlan']);
    $pDto->setTipoDocumento($_POST['Tipodocumento']);
    $pDto->setDocumento($_POST['Documento']);
    $pDto->setNombre($_POST['Nombre']);
    $pDto->setCorreo($_POST['Correo']);
    $pDto->setTelefono($_POST['Telefono']);
    $pDto->setPlanSeleccionado($_POST['Planseleccionado']);


    $mensaje = $pDao->modificarPlan($pDto);
    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}

?>