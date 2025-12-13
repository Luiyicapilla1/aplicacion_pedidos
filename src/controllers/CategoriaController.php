<?php
namespace lgc\aplicacion_pedidos\controllers;
use  lgc\aplicacion_pedidos\daos\CategoriaDao;

class CategoriaController extends CategoriaDao
{
    public function category_list()
    {
        if ($this->get_all() == null){
            return false;
        }else{
            return $this->get_all();
        }
    }
    public function single_category($id){
        if($this->get_by_id($id) == null){
            return false;
        }else{
            return $this->get_by_id($id);
        }
    }
}