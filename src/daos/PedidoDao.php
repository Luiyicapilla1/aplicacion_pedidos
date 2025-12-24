<?php
namespace lgc\aplicacion_pedidos\daos;
use lgc\aplicacion_pedidos\models\Pedido;
use lgc\aplicacion_pedidos\tools\Conexion;
use lgc\aplicacion_pedidos\daos\RestauranteDao;

class PedidoDao {
    public function set_pedido($user){
        $db_connection = Conexion::getConexion();
        $date = date("Y-m-d H:i:s");
        $query = "INSERT INTO pedidos (fecha, enviado, restaurante) VALUES (:date, :enviado, :restaurante)";
        $db_connection->prepare($query)->execute([
            "date" => $date,
            "enviado" => 1,
            "restaurante" => RestauranteDao::get_by_email($user)->getCodRest(),
        ]);
        $db_connection = null;
    }
    public function get_last_pedido(){
        $db_connecton = Conexion::getConexion();
        $query = "SELECT * FROM pedidos ORDER BY cod_ped DESC LIMIT 1";
        $stmt = $db_connecton->query($query);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Pedido::class);
        return $stmt->fetch();
    }
}