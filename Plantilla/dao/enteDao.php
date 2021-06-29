<?php


 class EnteDao{

    public function registrarEnte(enteDto $enteDto){
        $cnn = Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO usuario_contenido_ente values (?,?,?,?,?,?,?)");
            $query->bindParam(1, $enteDto->getNit());
            $query->bindParam(2, $enteDto->getRazon());
            $query->bindParam(3, $enteDto->getRepresentante());
            $query->bindParam(4, $enteDto->getCorreo());
            $query->bindParam(5, $enteDto->getSitio());
            $query->bindParam(6, $enteDto->getCiudad());
            $query->bindParam(7, $enteDto->getCapacidad());
    
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