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
                if(isset($_POST["btn_modificar"])){
                    $ob=new Horarios(); /* instancia al controlador */
                    if($ob->abrirConexion()){
                        $h=new Horario();/* instancia a la clase */
                        $h->setId($_POST["id"]);
                        $h->setDescripcion($_POST["descripcion"]);
                        $h->setOrden($_POST["orden"]);
                        if($ob->editar($h)){
                            echo"Se modifico exitosamente";
                            
                        }else{
                            echo"ERROR AL MODIFICAR";
                        }  
                        $ob->cerrarConexion();
                    }else{
                        echo"ERROR DE CONEXION";
                    }

                }  
                if(isset($_GET["id"])){
                    $ob=new Horarios(); /* instancia al controlador */
                    if($ob->abrirConexion()){
                        $h=new Horario();/* instancia a la clase */
                        $h->setId($_GET["id"]);


                        if($ob->borrar($h)){
                            echo "Se elimino correctamente";
                        }else{
                            echo"ERROR AL ELIMINAR";
                        }
                        $ob->cerrarConexion();

                        }else{
                            echo "ERROR DE CONEXION"; /* psw.unaux.com/vista/horarios*/
                        }

                    }
                        
                ?>

