<?php
require '../Dao/UsuarioLoginDao.php';
require '../Dto/UsuarioLoginDto.php';
require '../conexion.php';

if (isset($_POST['registro'])) {
    $uDao = new UsuarioLoginDao();
    $uDto = new UsuarioLoginDto();

    $uDto->setIdUsuario($_POST['idUsuario']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setApellido($_POST['apellido']);
    $uDto->setCorreo($_POST['correo_electronico']);
    $uDto->setCedula($_POST['cedula']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setContraseña($_POST['contraseña']);
    $uDto->setTipousuario($_POST['tipo_usuario']);

    $mensaje = $uDao->registrarUsuario($uDto);

    header("Location:../registroUsuario.php?mensaje=".$mensaje);
}
elseif ($_GET['id']!=null) {
    $uDao = new UsuarioLoginDao();

    $mensaje = $uDao->eliminarUsuario($_GET['id']);

    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}
elseif (isset($_POST['modificar'])) {
    $uDao = new UsuarioLoginDao();
    $uDto = new UsuarioLoginDto();

    $uDto->setIdUsuario($_POST['idUsuario']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setApellido($_POST['apellido']);
    $uDto->setCorreo($_POST['correo_electronico']);
    $uDto->setCedula($_POST['cedula']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setContraseña($_POST['contraseña']);
    $uDto->setTipousuario($_POST['tipo_usuario']);

    $mensaje = $uDao->modificarUsuario($uDto);
    header("Location:../interfacesadmi/usuarios.php?mensaje=".$mensaje);
}else if (isset($_POST['registroa'])) {
    $uDao = new UsuarioLoginDao();
    $uDto = new UsuarioLoginDto();

    $uDto->setIdUsuario($_POST['idUsuario']);
    $uDto->setNombre($_POST['nombre']);
    $uDto->setApellido($_POST['apellido']);
    $uDto->setCorreo($_POST['correo_electronico']);
    $uDto->setCedula($_POST['cedula']);
    $uDto->setCelular($_POST['celular']);
    $uDto->setContraseña($_POST['contraseña']);
    $uDto->setTipousuario($_POST['tipo_usuario']);

    $mensaje = $uDao->registrarUsuario($uDto);

    header("Location:../interfacesadmi/crearusuario.php?mensaje=".$mensaje);
}

?>