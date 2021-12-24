<?php
    require_once "models/ProductosModel.php";
    $producto = new Productos_model();
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
    <form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=venta" autocomplete="off">
        ID del producto: <input type="text" id="id" name="id" /><br>
        cantidad a vender: <input type="text" id="cantidad" name="cantidad" /><br>
        
        <button id="vender" name="vender" type="submit">Vender</button>     
    </form>
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Cantidad vendida</th>
                <th>Id producto vendido</th>
            </tr>
        </thead>
        <tbody>
            <?php            
            $ventas = $producto->getVentas();

                foreach($ventas as $dato){
                    echo "<tr>";
                    echo "<td>".$dato["cantidad"]."</td>";
                    echo "<td>".$dato["idproducto"]."</td>";
                    echo "</tr>";
                }
            ?> 
        </tbody>

    </table>
    
</body>
</html>