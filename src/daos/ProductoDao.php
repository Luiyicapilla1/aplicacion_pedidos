<?php
namespace lgc\aplicacion_pedidos\daos;
use lgc\aplicacion_pedidos\models\Producto;
use lgc\aplicacion_pedidos\tools\Conexion;

class ProductoDao{
    public static function get_by_id($id){
        $bd_connection = Conexion::getConexion();
        $query = "SELECT * FROM productos WHERE cod_prod = '$id'";
        $stmt = $bd_connection->query($query);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Producto::class);
        return $stmt->fetch();
    }
}