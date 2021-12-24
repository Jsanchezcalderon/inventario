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
    <form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=actualizar" autocomplete="off">
        <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>"/>
        Nombre: <input type="text" id="nombre" name="nombre" value="<?php echo $data["productos"]["nombre"];?>" required/><br>
        Referencia: <input type="text" id="refencia" name="referencia" value="<?php echo $data["productos"]["referencia"];?>" required/><br>
        Precio: <input type="text" id="precio" name="precio" value="<?php echo $data["productos"]["precio"];?>" required/><br>
        Peso: <input type="text" id="peso" name="peso" value="<?php echo $data["productos"]["peso"];?>" required/><br>
        Categoria: <input type="text" id="categoria" name="categoria" value="<?php echo $data["productos"]["categoria"];?>" required/><br>
        Stock: <input type="text" id="stock" name="stock" value="<?php echo $data["productos"]["stock"];?>" required/><br>
        Fecha de creacion: <input type="date" id="fecha_crea" name="fecha_crea" value="<?php echo $data["productos"]["fecha_crea"];?>" required/><br>
        <button id="guardar" name="guardar" type="submit">Guardar</button>
    </form>
    
</body>
</html>