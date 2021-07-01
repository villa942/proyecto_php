<?php

class CitaDao{
    public function registrarCita(CitaDto $citaDto){
        $cnn=Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO cita values (?,?,?,?,?)");
            $query->bindParam(1,$citaDto->getIdCita());
            $query->bindParam(2,$citaDto->getFecha());
            $query->bindParam(3,$citaDto->getEspecialidad());
            $query->bindParam(4,$citaDto->getHora());
            $query->bindParam(5,$citaDto->getCentroMedico());

            $query->execute();
            $mensaje="Registrado Exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    //Modificar Cita
    public function modificarCita(CitaDto $citaDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE cita SET Fecha=?, Especilidad=?, Hora=?, CentroMedico=? WHERE id=?');
            
            $query->bindParam(1,$citaDto->getIdCita());
            $query->bindParam(2,$citaDto->getFecha());
            $query->bindParam(3,$citaDto->getEspecialidad());
            $query->bindParam(4,$citaDto->getHora());
            $query->bindParam(5,$citaDto->getCentroMedico());

            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Obtener Cita
    public function obtenerCita($idCita){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM cita WHERE id = ?');
            $query->bindParam(1, $idCita);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Eliminar Cita
    public function eliminarCita($idCita){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM cita WHERE id= ?");
            $query->bindParam(1, $idCita);
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
            $listarCita = 'SELECT * FROM cita';
            $query = $cnn->prepare($listarCita);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
    }

}
?>