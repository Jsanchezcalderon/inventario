<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
</head>
<body>
    <h2><?php echo $data["titulo"]; ?></h2>
    <form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=guarda" autocomplete="off">
        Nombre: <input type="text" id="nombre" name="nombre" required/><br>
        Referencia: <input type="text" id="refencia" name="referencia" required/><br>
        Precio: <input type="text" id="precio" name="precio" required/><br>
        Peso: <input type="text" id="peso" name="peso" required/><br>
        Categoria: <input type="text" id="categoria" name="categoria" required/><br>
        Stock: <input type="text" id="stock" name="stock" required/><br>
        Fecha de creacion: <input type="date" id="fecha_crea" name="fecha_crea" required/><br>
        <button id="guardar" name="guardar" type="submit">Guardar</button>        
    </form>
    
</body>
</html>