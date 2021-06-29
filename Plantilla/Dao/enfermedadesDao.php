<?php

class EnfermedadesDao{
    public function registrarEnfermedad(EnfermedadesDto $enfermedadesDto){
        $cnn=Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO enciclopedia_medica values (?,?,?,?,?)");
            $query->bindParam(1,$enfermedadesDto->getCodigo());
            $query->bindParam(2,$enfermedadesDto->getNombreEnf());
            $query->bindParam(3,$enfermedadesDto->getDescripcion());
            $query->bindParam(4,$enfermedadesDto->getSintomas());
            $query->bindParam(5,$enfermedadesDto->getRecomendaciones());

            $query->execute();
            $mensaje="Registrado Exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Modificar
    public function modificarEnfermedad(EnfermedadesDto $enfermedadesDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE enciclopedia_medica SET nombre_enfermedad=?, descripcion=?, sintomas=?, recomendaciones=? WHERE codigo=?');
            $query->bindParam(1,$enfermedadesDto->getCodigo());
            $query->bindParam(2,$enfermedadesDto->getNombreEnf());
            $query->bindParam(3,$enfermedadesDto->getDescripcion());
            $query->bindParam(4,$enfermedadesDto->getSintomas());
            $query->bindParam(5,$enfermedadesDto->getRecomendaciones());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Obtener 
    public function obtenerEnfermedad($codigo){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM enciclopedia_medica WHERE codigo = ?');
            $query->bindParam(1, $codigo);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Eliminar 
    public function eliminarEnfermedad($codigo){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM enciclopedia_medica WHERE codigo= ?");
            $query->bindParam(1, $codigo);
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
            $listarEnfermedad= 'SELECT * FROM enciclopedia_medica';
            $query = $cnn->prepare($listarEnfermedad);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
    }

}
?>