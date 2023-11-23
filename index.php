<html>
    <head>

        
    </head>
    <body>
            <h1>Horarios</h1>
            <a href="FrmIngresar.php">
                Nuevo horario
            </a>
            <hr>
            <table>
                <tr>
                    <th>Acciones</th>
                    <th>ID</th>
                    <th>Descripcion</th>
                </tr>
            </table>
            <tbody>
                <?php
                require_once "../../Conexion/Conexion.php";
                require_once "../../Controlador/Horarios.php";
                require_once "../../Modelo/Horario.php";
                $ob_horario=new Horarios();
                if($ob_horario->abrirConexion()){

                    $rs=$ob_horario->listar("select * from horarios order by orden asc");
                    foreach($rs as $key=>$value){
                        echo "<tr>";
                        echo "<td><a href='frmEditar.php?id=".$value->getId()."'>Editar</a></td>";
                        echo"<td>".$value->getId()."</td>";
                        echo"<td>".$value->getDescripcion()."</td>";
                        echo "</tr>";

                    }
                    $ob_horario->cerrarConexion();
                }else{
                        echo "Error!";
                    }
                ?>

    </body>

</html>