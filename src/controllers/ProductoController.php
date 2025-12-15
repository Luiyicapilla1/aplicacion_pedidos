<?php
namespace lgc\aplicacion_pedidos\controllers;
use lgc\aplicacion_pedidos\daos\ProductoDao;
class ProductoController extends ProductoDao
{
    public function get_products_by_category($id){
        if ($this->get_by_category($id) == null){
            return false;
        }else{
            return $this->get_by_category($id);
        }
    }
    public function get_product_by_id($id){
        if ($this->get_by_id($id) == null){
            return false;
        }else{
            return $this->get_by_id($id);
        }
    }
}