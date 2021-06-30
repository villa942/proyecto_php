<?php

class PqrsDao{
    public function registrarPqrs(PqrsDto $pqrsDto){
        $cnn=Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO pqrs values (?,?,?,?,?)");
            $query->bindParam(1,$pqrsDto->getIdPqrs());
            $query->bindParam(2,$pqrsDto->getNombre());
            $query->bindParam(3,$pqrsDto->getAsunto());
            $query->bindParam(4,$pqrsDto->getMensaje());
            $query->bindParam(5,$pqrsDto->getCalificacion());


            $query->execute();
            $mensaje="Enviado Exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    //Modificar Pqrs
    public function modificarPqrs(PqrsDto $pqrsDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE pqrs SET Nombre=?, Asunto=?,  Mensaje=?, Calificacion=? WHERE idPqrs=?');
            
            $query->bindParam(1,$pqrsDto->getIdPqrs());
            $query->bindParam(2,$pqrsDto->getNombre());
            $query->bindParam(3,$pqrsDto->getAsunto());
            $query->bindParam(4,$pqrsDto->getMensaje());
            $query->bindParam(5,$pqrsDto->getCalificacion());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Obtener Pqrs
    public function obtenerPqrs($idPqrs){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM pqrs WHERE idPqrs = ?');
            $query->bindParam(1, $idPqrs);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Eliminar Pqrs
    public function eliminarPqrs($idPqrs){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM pqrs WHERE idPqrs= ?");
            $query->bindParam(1, $idPqrs);
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
            $listarPqrs = 'SELECT * FROM pqrs';
            $query = $cnn->prepare($listarPqrs);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
    }

}
?>