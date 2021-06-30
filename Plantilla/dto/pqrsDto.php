<?php

class PqrsDto{
    private $idPqrs = 0;
    private $nombre = "";
    private $asunto = "";
    private $mensaje = "";
    private $calificacion= "";


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
    function getCalificacion(){
        return $this->calificacion;
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
    function setCalificacion($calificacion){
        $this->calificacion=$calificacion;
    }
}

?>