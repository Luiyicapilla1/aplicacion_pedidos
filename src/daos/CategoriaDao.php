<?php
namespace lgc\aplicacion_pedidos\daos;
use lgc\aplicacion_pedidos\models\Categoria;
use lgc\aplicacion_pedidos\tools\Conexion;

class categoriaDao {
    protected function get_all(){
        $bd_connection = Conexion::getConexion();
        $query = "SELECT cod_categoria, nombre_cat, descripcion, slug FROM categorias";
        $stmt = $bd_connection->query($query);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Categoria::class) ?? null;
    }

    protected function get_by_id($id)
    {
        $bd_connection = Conexion::getConexion();
        $query = "SELECT cod_categoria, nombre_cat, descripcion, slug FROM categorias WHERE cod_categoria = '$id'";
        $stmt = $bd_connection->query($query);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Categoria::class);
        return $stmt->fetch() ?? null;
    }
}