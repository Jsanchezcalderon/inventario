<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $data["titulo"]; ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <h2 class="text-center py-3"> <?php echo $data["titulo"]; ?></h2>

    </div>
    <div class="container-fluid bg-ligth">
        <div class="container">
            <ul class="nav nav-pills py-2 nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?c=productos&a=nuevo">Agregar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?c=productos&a=vender">Vender</a>
                </li>

            </ul>

        </div>
    </div>
    <div class="container-fluid">
        <div class="container py-5">
            <table class="table table-hover">
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
                    foreach ($data["productos"] as $dato) {
                        echo "<tr>";
                        echo "<td>" . $dato["nombre"] . "</td>";
                        echo "<td>" . $dato["referencia"] . "</td>";
                        echo "<td>" . $dato["precio"] . "</td>";
                        echo "<td>" . $dato["peso"] . "</td>";
                        echo "<td>" . $dato["categoria"] . "</td>";
                        echo "<td>" . $dato["stock"] . "</td>";
                        echo "<td>" . $dato["fecha_crea"] . "</td>";
                        echo "<td><a class='fas fa-undo-alt' style='font-size:25px;color:#f2741d' href='index.php?c=productos&a=modificar&id=" . $dato["id"] . "'></a></td>";
                        echo "<td><a class='fas fa-trash-alt' style='font-size:25px;color:red' href='index.php?c=productos&a=eliminar&id=" . $dato["id"] . "'></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>