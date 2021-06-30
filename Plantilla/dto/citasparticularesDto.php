<?php

class CitasParticularesDto{
    private $idCita = 0;
    private $nombre = "";
    private $correo = "";
    private $celular = "";
    private $fecha = "";
    private $centroMedico = "";
    private $especialidad = "";
    private $mensaje = "";


    function getIdCita(){
        return $this->idCita;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getCorreo(){
        return $this->correo;
    }
    function getCelular(){
        return $this->celular;
    }
    function getFecha(){
        return $this->fecha;
    }
    function getCentroMedico(){
        return $this->centroMedico;
    }
    function getEspecialidad(){
        return $this->especialidad;
    }
    function getMensaje(){
        return $this->mensaje;
    }
    function setIdCita($idCita){
        $this->idCita=$idCita;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setCorreo($correo){
        $this->correo=$correo;
    }
    function setCelular($celular){
        $this->celular=$celular;
    }
    function setFecha($fecha){
        $this->fecha=$fecha;
    }
    function setCentroMedico($centroMedico){
        $this->centroMedico=$centroMedico;
    }
    function setEspecialidad($especialidad){
        $this->especialidad=$especialidad;
    }
    function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }
}

?>