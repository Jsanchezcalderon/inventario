<?php
class Conectar {
    public static function conexion (){
        $conexion = new mysqli("localhost", "root", "Sanchez1245@", "inventario");
        return $conexion;
    }
}

?>