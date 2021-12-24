<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $data["titulo"]; ?></title>
</head>
<body>
    <h2> <?php echo $data["titulo"]; ?></h2>
    <a href="index.php?c=productos&a=nuevo" class="button"><button>Agregar</button></a>
    <a href="index.php?c=productos&a=vender"><button>Vender</button></a>
    <br><br>
    <table border="1" width="80%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Fecha de creacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data["productos"] as $dato){
                    echo "<tr>";
                    echo "<td>".$dato["nombre"]."</td>";
                    echo "<td>".$dato["referencia"]."</td>";
                    echo "<td>".$dato["precio"]."</td>";
                    echo "<td>".$dato["peso"]."</td>";
                    echo "<td>".$dato["categoria"]."</td>";
                    echo "<td>".$dato["stock"]."</td>";
                    echo "<td>".$dato["fecha_crea"]."</td>";
                    echo "<td><a href='index.php?c=productos&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";
                    echo "<td><a href='index.php?c=productos&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
                    echo "</tr>";
                }
            ?> 
        </tbody>

    </table>
</body>
</html>