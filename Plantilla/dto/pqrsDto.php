<?php

class PqrsDto{
    private $idPqrs = 0;
    private $nombre = "";
    private $asunto = "";
    private $mensaje = "";


    function getIdPqrs(){
        return $this->idPqrs;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getAsunto(){
        return $this->asunto;
    }
    function getMensaje(){
        return $this->mensaje;
    }
    function setIdPqrs($idPqrs){
        $this->idPqrs=$idPqrs;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setAsunto($asunto){
        $this->asunto=$asunto;
    }
    function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }
}

?>