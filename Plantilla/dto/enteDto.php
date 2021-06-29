<?php


class EnteDto{
    
    private $nit="";
    private $razon="";
    private $representante ="" ;
    private $correo ="";
    private $sitio="" ;
    private $ciudad ="" ;
    private $capacidad ="" ;
    


    
    
    function getNit(){
        return $this->nit;
    }
    function getRazon(){
        return $this->razon;
    }
    function getRepresentante(){
        return $this->representante;
    }
    function getCorreo(){
        return $this->correo;
    }
    function getSitio(){
        return $this->sitio;
    }
    function getCiudad(){
        return $this->ciudad;
    }
    function getCapacidad(){
        return $this->capacidad;
    }
    
    function setNit($nit){
        $this->nit = $nit;
   }
   function setRazon($razon){
    $this->razon = $razon;
}
    function setRepresentante($representante){
     $this->representante=$representante;
    }
    function setCorreo($correo){
         $this->correo = $correo;
    }
    function setSitio($sitio){
         $this->sitio = $sitio;
    }
    function setCiudad($ciudad){
         $this->ciudad = $ciudad;
    }
    function setCapacidad($capacidad){
        $this->capacidad = $capacidad;
   }

}