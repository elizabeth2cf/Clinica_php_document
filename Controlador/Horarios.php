<?php

class Horarios extends Conexion{
    public function listar(String $req){
        $retorno=[];
        $datos = $this->query($req);
        foreach($datos as $key => $value){
            $hora= new Horario(); //instancia modelo
            $hora->setId($value["id"]);
            $hora->setDescripcion($value["descripcion"]);
            $hora->setOrden($value["orden"]);
            $retorno[]=$hora;
        }

        return $retorno;
    }
    public function ingresar(Horarios $par){
        $ok=false;
        try{
            $sql=$this->prepare("insert into horarios(descripcion,orden)VALUES(:descripcion,:orden)");
            $desc=$par->getDescripcion();
            $ord=$par->getOrden();
            $sql->bindParam(":descripcion",$desc,PDO::PARAM_STR);
            $sql->bindParam(":orden",$ord,PDO::PARAM_INT);
            $sql->execute();
            $ok=true;
        }catch (PDPExepction $pdoex){
            echo "ERROR".$pdoex->getMessage();
        }finally{
            return $ok;
        }
    }
    public function obtener(Horario $par){
        $horario=$this->listar("select * from horarios where id=".$par->getid());
        if(sizeof($horario)>0){
            $horario=$horario[0];
    
        }else{
            $horario=new Horario();
        }
        return $horario;
    }
    
}

?>