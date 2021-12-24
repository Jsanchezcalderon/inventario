<?php

class Productos_model {
    private $db;
    private $productos;

    public function __construct(){
        $this -> db = Conectar::conexion();
        $this -> productos = array();

    }

    public function getProductos(){
        $resultado = $this->db->query("select id, nombre, referencia, precio, peso, categoria, stock, fecha_crea from productos");
        while($fila = $resultado->fetch_assoc()){
            $this->productos[]=$fila;
        }
        return $this->productos;
    }
    public function getVentas(){
        $resultado = $this->db->query("select cantidad, idproducto from ventas");
        while($fila = $resultado->fetch_assoc()){
            $this->productos[]=$fila;
        }
        return $this->productos;
    }

    public function insertar($nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha_crea){
        $resultado = $this->db->query("insert into productos (nombre, referencia, precio, peso, categoria, stock, fecha_crea)
        values ('$nombre', '$referencia', '$precio', '$peso', '$categoria', '$stock', '$fecha_crea')");
        return $resultado;
    }

    public function modificar($id, $nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha_crea){
        $resultado = $this->db->query("update productos set nombre = '$nombre', referencia = '$referencia', precio = '$precio', peso = '$peso', categoria = '$categoria', stock = '$stock', fecha_crea = '$fecha_crea' where id = '$id'");
        return $resultado;
    }

    public function eliminar($id){
        $resultado = $this->db->query("delete from productos where id = '$id'");
        return $resultado;
    }

    public function getProducto($id){

        $resultado = $this->db->query("select id, nombre, referencia, precio, peso, categoria, stock, fecha_crea from productos where id ='$id' limit 1");

        $fila = $resultado->fetch_assoc();
        
        return $fila;
    }

    public function verStock($idprod){
         $cantstock = $this->db->query("select stock from productos where id = '$idprod'");

         $fila = $cantstock->fetch_assoc();
         return $fila["stock"];
    }

    public function vender($idprod, $cantidad){        
        $resultado = $this ->db->query("insert into ventas(cantidad, idproducto) values ('$cantidad','$idprod')");
        return $resultado;

    }

    public function cambiarStock($idprod, $cantidad){        
        $resultado = $this ->db->query("update productos set stock = stock -'$cantidad' where id = '$idprod'");
        return $resultado;

    }
}

?>