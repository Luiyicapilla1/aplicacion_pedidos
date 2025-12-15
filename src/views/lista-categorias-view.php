<?php
use lgc\aplicacion_pedidos\controllers\CategoriaController;

session_start();
if (!isset($_SESSION['user'])){
    header('location:/aplicacion_pedidos/public/login');
    exit();
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/lista-categorias.css">
    <title>Listado categorias</title>
</head>
<body>
    <section>
        <ul>
            <li class="user-info">Usuario:<?= $_SESSION['user'] ?></li>
            <li><a href="/aplicacion_pedidos/public/lista-categorias">Home</a></li>
            <li><a href="/aplicacion_pedidos/public/carrito-view">Ver Carrito</a></li>
            <li><a href="#">Cerrar Sesión</a></li>
        </ul>
    </section>
    <main>
        <ul>
            <?php
            $categoria_controller = new CategoriaController();
            $data = $categoria_controller->category_list();
            if ($categoria_controller->category_list()){
                foreach ($categoria_controller->category_list() as $category){
                    echo "<li><a href=" . $category->getSlug(). "?id=" . $category->getCodCat() . ">" . $category->getNombreCat() . "</a></li>";
                }
            }else{
                echo "<li>No existen categorias</li>";
            }
            ?>
        </ul>
    </main>
</body>
</html>

