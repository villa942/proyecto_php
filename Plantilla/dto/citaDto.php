<?php

class CitaDto{
    private $idCita = 0;
    private $fecha = "";
    private $especialidad = "";
    private $hora = "";
    private $centroMedico = "";
    


    function getIdCita(){
        return $this->idCita;
    }
    function getHora(){
        return $this->hora;
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
    
    function setIdCita($idCita){
        $this->idCita=$idCita;
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
    function setHora($hora){
        $this->hora=$hora;
    }
}

?>