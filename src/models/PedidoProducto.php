<?php
namespace lgc\aplicacion_pedidos\models;

class PedidoProducto
{
    private $cod_ped_prod;
    private $pedido;
    private $producto;
    private $unidades;

    /**
     * @return mixed
     */
    public function getCodPedProd()
    {
        return $this->cod_ped_prod;
    }

    /**
     * @param mixed $cod_ped_prod
     */
    public function setCodPedProd($cod_ped_prod): void
    {
        $this->cod_ped_prod = $cod_ped_prod;
    }

    /**
     * @return mixed
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @param mixed $pedido
     */
    public function setPedido($pedido): void
    {
        $this->pedido = $pedido;
    }

    /**
     * @return mixed
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * @param mixed $producto
     */
    public function setProducto($producto): void
    {
        $this->producto = $producto;
    }

    /**
     * @return mixed
     */
    public function getUnidades()
    {
        return $this->unidades;
    }

    /**
     * @param mixed $unidades
     */
    public function setUnidades($unidades): void
    {
        $this->unidades = $unidades;
    }
}