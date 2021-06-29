<?php

class UsuarioLoginDto{
    private $idUsuario = 0;
    private $nombre = "";
    private $apellido = "";
    private $correo = "";
    private $cedula = "";
    private $celular = "";
    private $contraseña = "";
    private $tipousuario = "";


    function getIdUsuario(){
        return $this->idUsuario;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getApellido(){
        return $this->apellido;
    }
    function getCorreo(){
        return $this->correo;
    }
    function getCedula(){
        return $this->cedula;
    }
    function getCelular(){
        return $this->celular;
    }
    function getContraseña(){
        return $this->contraseña;
    }
    function getTipousuario(){
        return $this->tipousuario;
    }
    function setIdUsuario($idUsuario){
        $this->idUsuario=$idUsuario;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setApellido($apellido){
        $this->apellido=$apellido;
    }
    function setCorreo($correo){
        $this->correo=$correo;
    }
    function setCedula($cedula){
        $this->cedula=$cedula;
    }
    function setCelular($celular){
        $this->celular=$celular;
    }
    function setContraseña($contraseña){
        $this->contraseña=$contraseña;
    }
    function setTipousuario($tipousuario){
        $this->tipousuario=$tipousuario;
    }
}

?>