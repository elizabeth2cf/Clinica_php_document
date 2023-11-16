<?php
class Personal {
    private $Id; ///prioridades
    private $apellido;
    private $nombre;
    private $matricula;
    private $titulo_profesional;
    private $email;
    private $celular;
    private $foto;
    private $estado;
   
    public function __construct(){
        $this->setId("0");  ///CONSTRUCTOR
        $this->setApellido("");
        $this->setNombre("");
        $this->setMatricula("");
        $this->setTitulo_profesional("");
        $this->setEmail("");
        $this->setCelular("");
        $this->setFoto("");
        $this->setEstado("");     

    }    

}

function setId($id){
    return $this->id=$id;
}

function getId() {
    return $this->id;

}

function setApellido($ape){
    return $this->apellido=$ape;
}

function getApellido() {
    return $this->ape;

}

function setNombre($nom){
    return $this->nombre=$nom;
}

function getNombre() {
    return $this->nom;

}
function setMatrucula($mtc){
    return $this->matricula=$mtc;
}

function getMatricula() {
    return $this->mtc;

}
function setTitulo_profesional($tlo_pfnal){
    return $this->fecha_inicio=$fcha_inicio;
}

function getTitulo_profesional() {
    return $this->tlo_pfnal;

}
function setEmail($email){
    return $this->fecha_fin=$email;
}

function getEmail() {
    return $this->email;

}

function setCelular($celular){
    return $this->fecha_fin=$celular;
}

function getCelular() {
    return $this->celular;

}
function setFoto($fto){
    return $this->foto=$fto;
}

function getFoto() {
    return $this->fto;

}
function setEstado($estado){
    return $this->Estado=$estado;
}

function getEstado() {
    return $this->estado;

}


?> 