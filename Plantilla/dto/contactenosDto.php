<?php

class ContactenosDto{
    private $idContacto = 0;
    private $nombre = "";
    private $correo = "";
    private $asunto = "";
    private $mensaje = "";


    function getIdContacto(){
        return $this->idContacto;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getCorreo(){
        return $this->correo;
    }
    function getAsunto(){
        return $this->asunto;
    }
    function getMensaje(){
        return $this->mensaje;
    }
    function setIdContacto($idContacto){
        $this->idContacto=$idContacto;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setCorreo($correo){
        $this->correo=$correo;
    }
    function setAsunto($asunto){
        $this->asunto=$asunto;
    }
    function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }
}

?>