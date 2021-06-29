<?php

class UsuarioLoginDao{
    public function registrarUsuario(UsuarioLoginDto $usuarioLoginDto){
        $cnn=Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO usuarios values (?,?,?,?,?,?,?,?)");
            $query->bindParam(1,$usuarioLoginDto->getIdUsuario());
            $query->bindParam(2,$usuarioLoginDto->getNombre());
            $query->bindParam(3,$usuarioLoginDto->getApellido());
            $query->bindParam(4,$usuarioLoginDto->getCorreo());
            $query->bindParam(5,$usuarioLoginDto->getCedula());
            $query->bindParam(6,$usuarioLoginDto->getCelular());
            $query->bindParam(7,$usuarioLoginDto->getContraseña());
            $query->bindParam(8,$usuarioLoginDto->getTipousuario());

            $query->execute();
            $mensaje="Registrado Exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Modificar usuario
    public function modificarUsuario(UsuarioLoginDto $usuarioLoginDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE usuarios SET nombre=?, apellido=?, correo_electronico=?, cedula=?, celular=?, contraseña=?, tipo_usuario=? WHERE idUsuario=?');
            $query->bindParam(1,$usuarioLoginDto->getIdUsuario());
            $query->bindParam(2,$usuarioLoginDto->getNombre());
            $query->bindParam(3,$usuarioLoginDto->getApellido());
            $query->bindParam(4,$usuarioLoginDto->getCorreo());
            $query->bindParam(5,$usuarioLoginDto->getCedula());
            $query->bindParam(6,$usuarioLoginDto->getCelular());
            $query->bindParam(7,$usuarioLoginDto->getContraseña());
            $query->bindParam(8,$usuarioLoginDto->getTipousuario());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Obtener usuario
    public function obtenerUsuario($idUsuario){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM usuarios WHERE idUsuario = ?');
            $query->bindParam(1, $idUsuario);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Eliminar Usuario
    public function eliminarUsuario($idUsuario){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM usuarios WHERE idUsuario= ?");
            $query->bindParam(1, $idUsuario);
            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        return $mensaje;
    }
    //Listar Todos
    public function listarTodos(){
        $cnn = Conexion::getConexion();
        try {
            $listarUsuarios = 'SELECT * FROM usuarios';
            $query = $cnn->prepare($listarUsuarios);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
    }

}
?>