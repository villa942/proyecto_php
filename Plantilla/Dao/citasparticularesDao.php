<?php

class CitasParticularesDao{
    public function registrarCitaParticular(CitasParticularesDto $citasParticularesDto){
        $cnn=Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO citas_particulares values (?,?,?,?,?,?,?,?)");
            $query->bindParam(1,$citasParticularesDto->getIdCita());
            $query->bindParam(2,$citasParticularesDto->getNombre());
            $query->bindParam(3,$citasParticularesDto->getCorreo());
            $query->bindParam(4,$citasParticularesDto->getCelular());
            $query->bindParam(5,$citasParticularesDto->getFecha());
            $query->bindParam(6,$citasParticularesDto->getCentroMedico());
            $query->bindParam(7,$citasParticularesDto->getEspecialidad());
            $query->bindParam(8,$citasParticularesDto->getMensaje());

            $query->execute();
            $mensaje="Registrado Exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    //Modificar CitaParticular
    public function modificarCitaParticular(CitasParticularesDto $citasParticularesDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE citas_particulares SET Nombre=?, Correo=?, Telefono=?, Fecha=?, CentroMedico=?, Especilidad=?, Mensaje=? WHERE idCita=?');
            
            $query->bindParam(1,$citasParticularesDto->getIdCita());
            $query->bindParam(2,$citasParticularesDto->getNombre());
            $query->bindParam(3,$citasParticularesDto->getCorreo());
            $query->bindParam(4,$citasParticularesDto->getCelular());
            $query->bindParam(5,$citasParticularesDto->getFecha());
            $query->bindParam(6,$citasParticularesDto->getCentroMedico());
            $query->bindParam(7,$citasParticularesDto->getEspecialidad());
            $query->bindParam(8,$citasParticularesDto->getMensaje());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Obtener CitaParticular
    public function obtenerCitaParticular($idCita){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM citas_particulares WHERE idCita = ?');
            $query->bindParam(1, $idCita);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Eliminar CitaParticular
    public function eliminarCitaParticular($idCita){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM citas_particulares WHERE idCita= ?");
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
            $listarCitaParticular = 'SELECT * FROM citas_particulares';
            $query = $cnn->prepare($listarCitaParticular);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
    }

}
?>