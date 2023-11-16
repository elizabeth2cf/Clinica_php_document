<html>
    <head>
        
    </head>
    <body>
         <form action="preparar.php" method="POST">
         <label for="id">Identificador</label>
         <input type="number" readonly name="id" value="0">
         <br><br>
         <label for="descripcion">Descripcion</label>
         <input type="text" name="descripcion"value="">
         <br><br>
         <label for="orden">Orden</label>
         <input type="number" name="orden"value="">
         <br><br>
         
         <input type="submit"name="btn_nuevo" value="Guardar">
         </form>
           
        
    </body>
</html>