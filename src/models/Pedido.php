<?php
namespace lgc\aplicacion_pedidos\models;

class Pedido
{
    private $cod_ped;
    private $fecha;
    private $enviado;
    private $restaurante;

    /**
     * @return mixed
     */
    public function getCodPed()
    {
        return $this->cod_ped;
    }

    /**
     * @param mixed $cod_ped
     */
    public function setCodPed($cod_ped): void
    {
        $this->cod_ped = $cod_ped;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * @param mixed $enviado
     */
    public function setEnviado($enviado): void
    {
        $this->enviado = $enviado;
    }

    /**
     * @return mixed
     */
    public function getRestaurante()
    {
        return $this->restaurante;
    }

    /**
     * @param mixed $restaurante
     */
    public function setRestaurante($restaurante): void
    {
        $this->restaurante = $restaurante;
    }


}