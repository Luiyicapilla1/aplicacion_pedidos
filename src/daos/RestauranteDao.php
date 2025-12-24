<?php
namespace lgc\aplicacion_pedidos\daos;
use lgc\aplicacion_pedidos\models\Restaurante;
use lgc\aplicacion_pedidos\tools\Conexion;
class RestauranteDao
{
    public static function get_by_email($correo){
        $conexion = Conexion::getConexion();
        $query = "SELECT cod_res, correo, clave, pais, cp, ciudad, direccion FROM restaurantes WHERE correo = '$correo'";
        $stmt = $conexion->query($query);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Restaurante::class);
        return $stmt->fetch() ?? null;
    }
}