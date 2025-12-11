<?php
namespace lgc\aplicacion_pedidos\controllers;
use lgc\aplicacion_pedidos\daos\RestauranteDao;

class RestauranteController extends RestauranteDao
{
    public function verify_login(){
        $restaurante = RestauranteDao::get_by_email($_POST['correo']);

        if ($restaurante != null){
            if ($restaurante->getCorreo() == $_POST["correo"] && $restaurante->getClave() == $_POST["clave"]) {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}