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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $data["titulo"]; ?></title>
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
            <form action="index.php?c=productos&a=venta" id="vender" name="vender" method="POST" autocomplete="off" class="was-validated">
                <div class="form-group">
                    <label for="email">ID del producto:</label>
                    <input type="number" class="form-control" id="id" name="id" required>
                </div>
                <div class="form-group">
                    <label for="pwd">cantidad a vender:</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                </div>
                <button id="vender" name="vender" type="submit" class="btn btn-primary">Vender</button>
            </form>
        </div>
    </div>
    <!-- <form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=venta" autocomplete="off">
        ID del producto: <input type="text" id="id" name="id" /><br>
        cantidad a vender: <input type="text" id="cantidad" name="cantidad" /><br>

        <button id="vender" name="vender" type="submit">Vender</button>
    </form> -->

    <div class="container-fluid">
        <div class="container py-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Cantidad vendida</th>
                        <th>Id producto vendido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ventas = $producto->getVentas();

                    foreach ($ventas as $dato) {
                        echo "<tr>";
                        echo "<td>" . $dato["cantidad"] . "</td>";
                        echo "<td>" . $dato["idproducto"] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>