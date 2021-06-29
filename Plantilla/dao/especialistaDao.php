<?php


 class EspecialistaDao{

    public function registrarEspecialista(EspecialistaDto $especialistaDto){
        $cnn = Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO usuario_especialista values (?,?,?,?,?,?,?,?)");
            $query->bindParam(1, $especialistaDto->getLicencia());
            $query->bindParam(2, $especialistaDto->getExpedicion());
            $query->bindParam(3, $especialistaDto->getNombre());
            $query->bindParam(4, $especialistaDto->getCorreo());
            $query->bindParam(5, $especialistaDto->getCelular());
            $query->bindParam(6, $especialistaDto->getCiudad());
            $query->bindParam(7, $especialistaDto->getEspecialidad());
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


 }









?>