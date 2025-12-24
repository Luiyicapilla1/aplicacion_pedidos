<?php
namespace lgc\aplicacion_pedidos\daos;
use lgc\aplicacion_pedidos\tools\Conexion;
use lgc\aplicacion_pedidos\daos\PedidoDao;
class PedidoProductoDao
{
    public function set_productos_pedido($user, $carrito){
        $db_connection = Conexion::getConexion();
        $pedido = new PedidoDao();
        try {
            $pedido->set_pedido($user);
            $db_connection->beginTransaction();
            foreach ($carrito as $producto){
                $query = "INSERT INTO pedidosproductos (pedido, producto, unidades) VALUES (:pedido, :producto, :unidades)";
                $db_connection->prepare($query)->execute([
                    ':pedido' => $pedido->get_last_pedido()->getCodPed(),
                    ':producto' => $producto['producto']->getCodProd(),
                    ':unidades' => $producto['cantidad'],
                ]);
            }
            $db_connection->commit();
        } catch (\PDOException $e) {
            $db_connection->rollBack();
            echo $e->getMessage();
        }
    }
}