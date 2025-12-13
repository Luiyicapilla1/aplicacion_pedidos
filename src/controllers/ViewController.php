<?php
namespace lgc\aplicacion_pedidos\controllers;

class ViewController
{
    private $categories_data;
    public function __construct(){
        $categories = new CategoriaController();
        $this->categories_data = $categories->category_list();
    }
    public function get_view($view_url){
        if (empty($view_url)) {
            return require_once '../src/views/login-view.php';
        }else{
            if (file_exists('../src/views/' . $view_url . '-view.php')){
                return include_once '../src/views/' .$view_url . '-view.php';
            }else{
                foreach ($this->categories_data as $data){
                    if ($data->getSlug() . "?id=" . $data->getCodCat() == $view_url){
                       return include_once '../src/views/categoria-single-view.php';
                    }
                }
                return include_once '../src/views/error-view.php';
            }
        }
    }
}