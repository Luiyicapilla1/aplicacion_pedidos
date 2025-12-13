<?php
namespace lgc\aplicacion_pedidos\daos;
use lgc\aplicacion_pedidos\models\Producto;
use lgc\aplicacion_pedidos\tools\Conexion;

class ProductoDao{
    protected static function get_by_category($id){
        $bd_connection = Conexion::getConexion();
        $query = "SELECT * FROM productos WHERE categoria = '$id'";
        $stmt = $bd_connection->query($query);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Producto::class) ?? null;
    }
}