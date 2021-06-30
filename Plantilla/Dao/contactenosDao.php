<?php

class ContactenosDao{
    public function registrarContacto(ContactenosDto $contactenosDto){
        $cnn=Conexion::getConexion();
        $mensaje ="";
        try {
            $query = $cnn->prepare("INSERT INTO contactenos values (?,?,?,?,?)");
            $query->bindParam(1,$contactenosDto->getIdContacto());
            $query->bindParam(2,$contactenosDto->getNombre());
            $query->bindParam(3,$contactenosDto->getCorreo());
            $query->bindParam(4,$contactenosDto->getAsunto());
            $query->bindParam(5,$contactenosDto->getMensaje());


            $query->execute();
            $mensaje="Enviado Exitosamente";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }

    //Modificar Pqrs
    public function modificarContacto(ContactenosDto $contactenosDto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('UPDATE contactenos SET Nombre=?, Correo=?, Asunto=?,  Mensaje=? WHERE idContacto=?');
            
            $query->bindParam(1,$contactenosDto->getIdContacto());
            $query->bindParam(2,$contactenosDto->getNombre());
            $query->bindParam(3,$contactenosDto->getCorreo());
            $query->bindParam(4,$contactenosDto->getAsunto());
            $query->bindParam(5,$contactenosDto->getMensaje());
            $query->execute();
            $mensaje = "Registro Actualizado";
        } catch (Exception $ex) {
            $mensaje = $ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Obtener contactenos
    public function obtenerContacto($idContacto){
        $cnn = Conexion ::getConexion();
        $mensaje = "";
        try {
            $query= $cnn->prepare('SELECT * FROM contactenos WHERE idContacto = ?');
            $query->bindParam(1, $idContacto);
            $query->execute();
            return $query->fetch();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
        $cnn = null;
        return $mensaje;
    }
    //Eliminar contactenos
    public function eliminarContacto($idContacto){
        $cnn = Conexion::getConexion();
        $mensaje = "";
        try {
            $query = $cnn->prepare("DELETE FROM contactenos WHERE idContacto= ?");
            $query->bindParam(1, $idContacto);
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
            $listarContacto = 'SELECT * FROM contactenos';
            $query = $cnn->prepare($listarContacto);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error'.$ex->getMessage();
        }
    }

}
?>