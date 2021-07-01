<?php

class PlanDao{
    public function registrarPlan(PlanDto $planDto){
        $cnn=Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO planes_salud values (?,?,?,?,?,?,?)");
            $query->bindParam(1,$planDto->getIdPlan());
            $query->bindParam(2,$planDto->getTipoDocumento());
            $query->bindParam(3,$planDto->getDocumento());
            $query->bindParam(4,$planDto->getNombre());
            $query->bindParam(5,$planDto->getCorreo());
            $query->bindParam(6,$planDto->getTelefono());
            $query->bindParam(7,$planDto->getPlanSeleccionado());


            $query->execute();
            $mensaje="Enviado Exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    //Modificar Pqrs
    public function modificarPlan(PlanDto $planDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE planes_salud SET Tipodocumento=?, Numerodocumento=?, Nombre=?, Correo=?, Telefono=?,  Planseleccionado=? WHERE idPlan=?');
            
            $query->bindParam(1,$planDto->getIdPlan());
            $query->bindParam(2,$planDto->getTipoDocumento());
            $query->bindParam(3,$planDto->getDocumento());
            $query->bindParam(4,$planDto->getNombre());
            $query->bindParam(5,$planDto->getCorreo());
            $query->bindParam(6,$planDto->getTelefono());
            $query->bindParam(7,$planDto->getPlanSeleccionado());

            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Obtener planes_salud
    public function obtenerPlan($idPlan){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM planes_salud WHERE idPlan = ?');
            $query->bindParam(1, $idPlan);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Eliminar planes_salud
    public function eliminarPlan($idPlan){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM planes_salud WHERE idPlan= ?");
            $query->bindParam(1, $idPlan);
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
            $listarPlan = 'SELECT * FROM planes_salud';
            $query = $cnn->prepare($listarPlan);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
    }

}
?>