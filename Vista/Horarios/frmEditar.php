<?php 
           require_once "../../Conexion/Conexion.php";
           require_once "../../Modelo/Horario.php";
           require_once "../../Controlador/Horarios.php";

           if(isset($_GET["id"])){
            $ob=new Horarios();
             if($ob->abrirConexion()){
                $h=new Horario();
                $h->setid($_GET["id"]);
                $hora=$ob->obtener($h);
                $ob->cerrarConexion();
             }else{
                echo "error";
             }
           }
           ?>
<html>
    <head>
        
    </head>
    <body>
         <form action="preparar.php" method="POST">
         <label for="id">Identificador</label>
         <input type="number" readonly name="id" value="<?php echo $hora->getid();?>">
         <br><br>
         <label for="descripcion">Descripcion</label>
         <input type="text" name="descripcion"value="<?php echo $hora->getDescripcion();?>">
         <br><br>
         <label for="orden">Orden</label>
         <input type="number" name="orden"value="<?php echo $hora->getorden();?>">
         <br><br>
         
         <input type="submit"name="btn_modificar" value="Guardar">
         </form>
           
    </body>
</html>