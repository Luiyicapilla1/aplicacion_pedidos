<?php
require_once '../vendor/autoload.php';
use lgc\aplicacion_pedidos\controllers\RestauranteController;
use lgc\aplicacion_pedidos\controllers\ViewController;

$actual_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$explode_url = explode('/', $actual_url); //key 5
$view_controller = new ViewController();
$view_controller->get_view($explode_url[5]);

if (empty($explode_url[5]) || $explode_url[5] == 'login'){
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $restaurante_controller = new RestauranteController();
        if ($restaurante_controller->verify_login()){
            session_start();
            $_SESSION['user'] = $_POST['correo'];
            header('location:/aplicacion_pedidos/public/lista-categorias');
        }else{
            $error = "El usuario o la contraseña no son correctos";
        }
    }
}