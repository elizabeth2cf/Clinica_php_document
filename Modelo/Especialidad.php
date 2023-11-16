<?php
class Especialidad {
    private $Id; ///prioridades
    private $descripcion;
   

    public function __construct(){
        $this->setId("0");  ///CONSTRUCTOR
        $this->setdescipcion("");





    }    

}

function setId($id){
    return $this->id=$id;
}

function getId() {
    return $this->id;

}

function setDescripcion($descrip){
    return $this->descripcion=$descrip;
}

function getDescrip() {
    return $this->descrip;

}

?>