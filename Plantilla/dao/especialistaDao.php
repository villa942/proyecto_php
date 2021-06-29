<?php


 class EnteDao{

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


 }









?>