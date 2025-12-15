<?php
namespace lgc\aplicacion_pedidos\daos;
use lgc\aplicacion_pedidos\models\Producto;
use lgc\aplicacion_pedidos\tools\Conexion;

class ProductoDao{
    protected function get_by_category($id){
        $bd_connection = Conexion::getConexion();
        $query = "SELECT * FROM productos WHERE categoria = '$id'";
        $stmt = $bd_connection->query($query);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Producto::class) ?? null;
    }
    protected function get_by_id($id){
        $db_connectin = Conexion::getConexion();
        $query = "SELECT * FROM productos where cod_prod = '$id'";
        $stmt = $db_connectin->query($query);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Producto::class);
        return $stmt->fetch() ?? null;
    }
}