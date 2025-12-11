<?php
namespace lgc\aplicacion_pedidos\models;

class Producto
{
    private $cod_prod;
    private $nombre;
    private $descripcion;
    private $peso;
    private $stock;
    private $categoria;

    /**
     * @return mixed
     */
    public function getCodProd()
    {
        return $this->cod_prod;
    }

    /**
     * @param mixed $cod_prod
     */
    public function setCodProd($cod_prod): void
    {
        $this->cod_prod = $cod_prod;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria): void
    {
        $this->categoria = $categoria;
    }
}