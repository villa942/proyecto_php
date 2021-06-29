<?php


 class EnteDao{

    public function registrarEnte(EnteDto $enteDto){
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
    public function listarTodos(){
        $cnn=Conexion::getConexion();
    
    try {
        $listarUsuarios ='select * from usuario_contenido_ente';
        $query =$cnn->prepare($listarUsuarios);
        $query->execute();
        return $query->fetchAll();
    } catch (Exception $ex) {
        echo 'Error'.$ex->getMessage();
    }
    
    }
    ##modificar ente
    public function modificarEnte(EnteDto $enteDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE usuario_contenido_ente SET nit=?, razon_social=?, nombre_representante_legal=?, correo_electronico=?, sitio_web=?, ciudad=?, capacidad_pacientes=? WHERE nit=?');
            
            $query->bindParam(1, $enteDto->getNit());
            $query->bindParam(2, $enteDto->getRazon());
            $query->bindParam(3, $enteDto->getRepresentante());
            $query->bindParam(4, $enteDto->getCorreo());
            $query->bindParam(5, $enteDto->getSitio());
            $query->bindParam(6, $enteDto->getCiudad());
            $query->bindParam(7, $enteDto->getCapacidad());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    
    //Eliminar Ente
    public function eliminarEnte($nit){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM usuario_contenido_ente WHERE nit= ?");
            $query->bindParam(1, $nit);
            $query->execute();
            $mensaje = "Registro Eliminado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        return $mensaje;
    }
    //Obtener usuario
    public function obtenerEnte($nit){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM usuario_contenido_ente WHERE nit = ?');
            $query->bindParam(1, $nit);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

 }
 









?>