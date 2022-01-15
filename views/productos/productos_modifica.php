<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["titulo"]; ?></title>
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
        <h2 class="text-center py-3"> <?php echo "Modificar ". strtolower($data["titulo"]); ?></h2>
    </div>
    <div class="container-fluid bg-ligth">
        <div class="container">
            <form action="index.php?c=productos&a=actualizar" id="actualiza" name="actualiza" method="POST" autocomplete="off">
                <div class="form-group">
                    <input class="form-control"type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data["productos"]["nombre"];?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Referencia:</label>
                    <input type="text" class="form-control" id="refencia" name="referencia" value="<?php echo $data["productos"]["referencia"];?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $data["productos"]["precio"];?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Peso:</label>
                    <input type="number" class="form-control" id="peso" name="peso" value="<?php echo $data["productos"]["peso"];?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Categoria:</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="<?php echo $data["productos"]["categoria"];?>" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Stock:</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $data["productos"]["stock"];?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Fecha de creacion:</label>
                    <input type="date" class="form-control" id="fecha_crea" name="fecha_crea" value="<?php echo $data["productos"]["fecha_crea"];?>" required>
                </div>
                <button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    <!-- <h2><?php echo $data["titulo"]; ?></h2>
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
    </form> -->
    
</body>
</html>