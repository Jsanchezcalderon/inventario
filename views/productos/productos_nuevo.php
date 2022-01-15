<?php

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
        <h2 class="text-center py-3"> <?php echo "Agregar ". strtolower($data["titulo"]); ?></h2>
    </div>
    <div class="container-fluid bg-ligth">
        <div class="container">
            <form action="index.php?c=productos&a=guarda" id="nuevo" name="nuevo" method="POST" autocomplete="off" class="was-validated">
                <div class="form-group">
                    <label for="email">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Referencia:</label>
                    <input type="text" class="form-control" id="refencia" name="referencia" required>
                </div>
                <div class="form-group">
                    <label for="email">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Peso:</label>
                    <input type="number" class="form-control" id="peso" name="peso" required>
                </div>
                <div class="form-group">
                    <label for="email">Categoria:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Stock:</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
                <div class="form-group">
                    <label for="email">Fecha de creacion:</label>
                    <input type="date" class="form-control" id="fecha_crea" name="fecha_crea" required>
                </div>
                <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
            <!-- <form id="nuevo" name="nuevo" method="POST" action="index.php?c=productos&a=guarda" autocomplete="off">
                Nombre: <input type="text" id="nombre" name="nombre" required /><br>
                Referencia: <input type="text" id="refencia" name="referencia" required /><br>
                Precio: <input type="text" id="precio" name="precio" required /><br>
                Peso: <input type="text" id="peso" name="peso" required /><br>
                Categoria: <input type="text" id="categoria" name="categoria" required /><br>
                Stock: <input type="text" id="stock" name="stock" required /><br>
                Fecha de creacion: <input type="date" id="fecha_crea" name="fecha_crea" required /><br>
                <button id="guardar" name="guardar" type="submit">Guardar</button>
            </form> -->

</body>

</html>