<?php

class PlanDto{
    private $idPlan = 0;
    private $tipoDocumento = "";
    private $documento = "";
    private $nombre = "";
    private $correo = "";
    private $telefono = "";
    private $planSeleccionado = "";
    


    function getIdPlan(){
        return $this->idPlan;
    }
    function getTipoDocumento(){
        return $this->tipoDocumento;
    }
    function getDocumento(){
        return $this->documento;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getCorreo(){
        return $this->correo;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function getPlanSeleccionado(){
        return $this->planSeleccionado;
    }
    
    
    function setIdPlan($idPlan){
        $this->idPlan=$idPlan;
    }
    function setTipoDocumento($tipoDocumento){
        $this->tipoDocumento=$tipoDocumento;
    }
    function setDocumento($documento){
        $this->documento=$documento;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setCorreo($correo){
        $this->correo=$correo;
    }
    function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    function setPlanSeleccionado($planSeleccionado){
        $this->planSeleccionado=$planSeleccionado;
    }
}

?>