<?php
class Turnos {
    private $Id; ///prioridades
    private $profesional_id;
    private $especialidad_id;
    private $fecha;
    private $apellido_paciente;
    private $nombre_paciente;
    private $dni_paciente;
    private $obra_social;
    private $nro_credencial;
    private $atencion_particular;
    private $motivo_turno;
    private $estado;

    public function __construct(){
        $this->setId("0");  ///CONSTRUCTOR
        $this->setProfesional_id("");
        $this->setEspecialidad_id("");
        $this->setFecha("");
        $this->setApellido_paciente("");
        $this->setNombre_paciente("");
        $this->setDNI_paciente("");
        $this->setObra_Social("");
        $this->setNro_credencial("");
        $this->setAtencion_particular("");
        $this->setMotivo_turno("");
        $this->setEstado("");

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
function setFecha($fcha){
    return $this->fecha=$fcha;
}

function getFecha() {
    return $this->fcha;

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
function setDNI_paciente($dni_paciente){
    return $this->dni_paciente=$dni_paciente;
}

function getDNI_paciente() {
    return $this->dni_paciente;

}
function setObra_social($obra_social){
    return $this->obra_social=$obra_social;
}

function getObra_social() {
    return $this->obra_social;

}
function setNro_credencial($nro_credencial){
    return $this->nro_credencial=$nro_credencial;
}

function getNro_credencial() {
    return $this->nro_credencial;

}
unction setAtencion_particular($atencion_particular){
    return $this->atencion_particular=$atencion_particular;
}

function getAtencion_particular() {
    return $this->atencion_particular;

}

function setMotivo_turno($mtvo_turno){
    return $this->motivo_turno=$mtvo_turno;
}

function getMotivo_turno() {
    return $this->mtvo_turno;

}
unction setEstado($estado){
    return $this->estado=$estado;
}

function getEstado() {
    return $this->estado;

}


?> 