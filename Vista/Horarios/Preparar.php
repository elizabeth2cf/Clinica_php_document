<?php
                require_once "../../Conexion/Conexion.php";
                require_once "../../Modelo/Horario.php";
                require_once "../../Controlador/Horarios.php";
                if(isset($_POST["btn_nuevo"])){
                    $ob_horario=new Horarios(); ///INSTANCIAR CONTROLADOR
                    
                    if($ob_horario->abrirConexion()){
                        
                        $h=new horario(); ///INSTANCIAR al Modelo
                        $h->setDescripcion($_POST["descripcion"]);
                        $h->setOrden($_POST["orden"]);
                        if($ob_horario->ingresar($h)){
                            echo "registrado exitosamente";
                        }else{
                            echo "ERROR AL INTENTAR REGISTRAR";
                            $ob_horario->cerrarConexion();
                        }   
                    }else{
                    echo"No se conecto a la Base de Datos";
                    }

                }       
                ?>

