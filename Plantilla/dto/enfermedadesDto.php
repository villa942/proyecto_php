<?php


class EnfermedadesDto{
    
    private $codigo = 0;
    private $nombreEnf="" ;
    private $descripcion ="";
    private $sintomas="" ;
    private $recomendaciones ="" ;


    
    
    function getCodigo(){
        return $this->codigo;
    }
    function getNombreEnf(){
        return $this->nombreEnf;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function getSintomas(){
        return $this->sintomas;
    }
    function getRecomendaciones(){
        return $this->recomendaciones;
    }
    
    function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    function setNombreEnf($nombreEnf){
     $this->nombreEnf=$nombreEnf;
    }
    function setDescripcion($descripcion){
         $this->descripcion = $descripcion;
    }
    function setSintomas($sintomas){
         $this->sintomas = $sintomas;
    }
    function setRecomendaciones($recomendaciones){
         $this->recomendaciones = $recomendaciones;
    }

}