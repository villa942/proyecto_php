<?php


class EspecialistaDto{
    
    private $licencia="";
    private $expedicion="";
    private $nombre="" ;
    private $correo ="";
    private $celular="" ;
    private $ciudad ="" ;
    private $especialidad ="" ;
    private $ente="" ;


    
    
    function getLicencia(){
        return $this->licencia;
    }
    function getExpedicion(){
        return $this->expedicion;
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
    function getCiudad(){
        return $this->ciudad;
    }
    function getEspecialidad(){
        return $this->especialidad;
    }
    function getEnte(){
        return $this->ente;
    }
    
    function setLicencia($licencia){
        $this->licencia = $licencia;
   }
   function setExpedicion($expedicion){
    $this->expedicion = $expedicion;
}
    function setNombre($nombre){
     $this->nombre=$nombre;
    }
    function setCorreo($correo){
         $this->correo = $correo;
    }
    function setCelular($celular){
         $this->celular = $celular;
    }
    function setCiudad($ciudad){
         $this->ciudad = $ciudad;
    }
    function setEspecialidad($especialidad){
        $this->especialidad = $especialidad;
   }
   function setEnte($ente){
    $this->ente = $ente;
    }

}