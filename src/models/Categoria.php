<?php
namespace lgc\aplicacion_pedidos\models;

class Categoria
{
    private $cod_categoria;
    private $nombre_cat;
    private $descripcion;
    private $slug;

    /**
     * @return mixed
     */
    public function getCodCat()
    {
        return $this->cod_categoria;
    }

    /**
     * @param mixed $cod_categoria
     */
    public function setCodCat($cod_categoria): void
    {
        $this->cod_categoria = $cod_categoria;
    }

    /**
     * @return mixed
     */
    public function getNombreCat()
    {
        return $this->nombre_cat;
    }

    /**
     * @param mixed $nombre_cat
     */
    public function setNombreCat($nombre_cat): void
    {
        $this->nombre_cat = $nombre_cat;
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
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }
}