<?php
use lgc\aplicacion_pedidos\controllers\CategoriaController;
use lgc\aplicacion_pedidos\controllers\ProductoController;

session_start();
if (!isset($_SESSION['user'])){
    header('location:/aplicacion_pedidos/public/login');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['carrito'][$_POST['id_producto']] = $_POST['cantidad'];
    print_r($_SESSION);
}

$categoria_controller = new CategoriaController();
$single_categoria = $categoria_controller->single_category($_GET['id']);

$producto_controller = new ProductoController();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/categoria-single.css">
    <title><?= $single_categoria->getDescripcion() ?></title>
</head>
<body>
    <section>
        <ul>
            <li class="user-info">Usuario:<?= $_SESSION['user'] ?></li>
            <li><a href="/aplicacion_pedidos/public/lista-categorias">Home</a></li>
            <li><a href="#">Ver Carrito</a></li>
            <li><a href="#">Cerrar Sesión</a></li>
        </ul>
    </section>
    <main>
        <h1><?= $single_categoria->getNombreCat() ?></h1>
        <p><?= $single_categoria->getDescripcion() ?></p>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Peso</th>
                <th>Stock</th>
                <th>Cantidad</th>
            </tr>
            <?php
                if ($producto_controller->get_products_by_category($_GET['id'])) {
                    foreach ($producto_controller->get_products_by_category($_GET['id']) as $producto) {
                        echo "<tr>";
                        echo "<td>" . $producto->getNombre() . "</td>";
                        echo "<td>" . $producto->getDescripcion() . "</td>";
                        echo "<td>" . $producto->getPeso() . "</td>";
                        echo "<td>" . $producto->getStock() . "</td>";
                        echo "<td><form action='' method='post'>";
                        echo "<input type='number' name='cantidad' id='cantidad'>";
                        echo "<input type='hidden' name='id_producto' value='$producto->cod_prod'>";
                        echo "<input type = 'submit' value='Comprar'>";
                        echo "</form></td>";
                        echo "</tr>";
                    }
                }else{
                    echo "No existen productos";
                }
            ?>
        </table>
    </main>
</body>
</html>
