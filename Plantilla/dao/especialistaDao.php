<?php


 class EspecialistaDao{

    public function registrarEspecialista(EspecialistaDto $especialistaDto){
        $cnn = Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO usuario_especialista values (?,?,?,?,?,?,?,?)");
            $query->bindParam(1, $especialistaDto->getLicencia());
            $query->bindParam(2, $especialistaDto->getNombre());
            $query->bindParam(3, $especialistaDto->getCorreo());
            $query->bindParam(4, $especialistaDto->getCelular());
            $query->bindParam(5, $especialistaDto->getEspecialidad());
            $query->bindParam(6, $especialistaDto->getCiudad());
            $query->bindParam(7, $especialistaDto->getExpedicion());
            $query->bindParam(8, $especialistaDto->getEnte());

            $query->execute();
            $mensaje="Registrado exitosamente";
    
    
    
    
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
          
        }
        $cnn= null;
        return $mensaje;
    }
    public function listarTodoses(){
        $cnn=Conexion::getConexion();
    
    try {
        $listarUsuarios ='select * from usuario_especialista';
        $query =$cnn->prepare($listarUsuarios);
        $query->execute();
        return $query->fetchAll();
    } catch (Exception $ex) {
        echo 'Error'.$ex->getMessage();
    }
    
    }
    public function eliminarEspecialista($numero){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM usuario_especialista WHERE numero_licencia= ?");
            $query->bindParam(1, $numero);
            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        return $mensaje;
    }
    public function obtenerEspecialista($numero){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM usuario_especialista WHERE numero_licencia = ?');
            $query->bindParam(1, $numero);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    public function modificarEspecialista(EspecialistaDto $especialistaDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE usuario_especialista SET numero_licencia=?, nombre=?, correo_electronico=?, celular=?, especialidad=?, ciudad=?, fecha_expedicion=? WHERE numero_licencia=?');
            
            $query->bindParam(1, $especialistaDto->getLicencia());
            $query->bindParam(2, $especialistaDto->getNombre());
            $query->bindParam(3, $especialistaDto->getCorreo());
            $query->bindParam(4, $especialistaDto->getCelular());
            $query->bindParam(5, $especialistaDto->getEspecialidad());
            $query->bindParam(6, $especialistaDto->getCiudad());
            $query->bindParam(7, $especialistaDto->getExpedicion());
            $query->bindParam(8, $especialistaDto->getEnte());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    



 }









?>