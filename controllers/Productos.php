<?php

class ProductosController {

    public function __construct(){
        require_once "Models/ProductosModel.php";
    }

    public function index(){
        $productos = new Productos_model();
        $data["titulo"] = "Productos";
        $data["productos"] = $productos->getProductos();
        $data["ventas"] = $productos->getVentas();
  
        require_once "views/productos/productos.php";
  
    }

    public function nuevo(){
        $data["titulo"] = "Productos";
        require_once "views/productos/productos_nuevo.php";
      }

      public function guarda(){
        $nombre = $_POST['nombre'];
        $referencia = $_POST['referencia'];
        $precio = $_POST['precio'];
        $peso = $_POST['peso'];
        $categoria = $_POST['categoria'];
        $stock =$_POST['stock'];
        $fecha_crea = $_POST['fecha_crea'];

        $productos = new productos_model();
        $productos->insertar($nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha_crea);
        $data["titulo"] = "Productos";
        $this->index();
        echo '<script language="javascript">alert("Producto agregado");</script>';
    
        
      }

      public function modificar($id){
        $productos = new Productos_model();
        $data["id"]=$id;
        $data["productos"]= $productos->getProducto($id);
        $data["titulo"] = "Productos";
        require_once "views/productos/Productos_modifica.php";
      }

      public function actualizar(){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $referencia = $_POST['referencia'];
        $precio = $_POST['precio'];
        $peso = $_POST['peso'];
        $categoria = $_POST['categoria'];
        $stock =$_POST['stock'];
        $fecha_crea = $_POST['fecha_crea'];
        
        $productos = new Productos_model();
        $productos->modificar($id, $nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha_crea);
        $data["titulo"] = "productos";
        $this->index();
        echo '<script language="javascript">alert("Producto Actualizado");</script>';
    
      }
    
      public function eliminar($id){

        $productos = new Productos_model();
        $productos->eliminar($id);
        $data["titulo"] = "Productos";
        $this->index();
        echo '<script language="javascript">alert("Producto Eliminado");</script>';
      }

      public function vender(){
          $data["titulo"] = "Vender";
        require_once "views/productos/vender_producto.php";
      }

      public function venta(){
        $id = $_POST['id'];
        $cantidad = $_POST['cantidad'];

        $productos = new productos_model();
        $stock = $productos->verStock($id);
        if($stock==0){
          echo '<script language="javascript">alert("No tiene Stock");</script>';
          $data["titulo"] = "productos";
          $this->index();
        }else{
          $productos->vender($id, $cantidad);
          $productos->cambiarStock($id, $cantidad);
          $data["titulo"] = "productos";
          $this->index();
        }
          
      }

}

?>