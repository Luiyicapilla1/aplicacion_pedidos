<?php

namespace  lgc\aplicacion_pedidos\tools;
use Dotenv\Dotenv;

class Conexion
{
    public static function getConexion(): \PDO {
        $env = Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']."/aplicacion_pedidos");
        $env->load();
        return new \PDO("pgsql:host=". $_ENV['HOST']. ";dbname=".$_ENV['DATABASE'] . ";port=".$_ENV['PORT'], $_ENV['USER'], $_ENV['PASSWORD']);
    }
}