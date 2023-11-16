<?php
class Profesional_Especialidad {
    private $Id; ///prioridades
    private $profesional_id;
    private $especialidad_id;

   
   
    public function __construct(){
        $this->setId("0");  ///CONSTRUCTOR
        $this->setProfesional_id("");
        $this->setEspecialidad_id("");



    }    

}

function setId($id){
    return $this->id=$id;
}

function getId() {
    return $this->id;

}

function setTProfesional($pfnal_ID){
    return $this->profesional_id=$pfnal_id;
}

function getProfesional_id() {
    return $this->pfnal_id;

}

function setEspecialidad_id($especialidad_id){
    return $this->especialidad_id=$especialidad_id;
}

function getEspecialidad_id() {
    return $this->epecialidad_id;

}


?> 