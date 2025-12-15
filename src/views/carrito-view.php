<?php
namespace lgc\aplicacion_pedidos\controllers\ProductoController;

use lgc\aplicacion_pedidos\controllers\ProductoController;

session_start();
$data = $_SESSION['carrito'];
$producto_controller = new ProductoController();
$carrito_array = [];
foreach ($data as $product_key => $product_value) {
    $carrito_array[] = $producto_controller->get_product_by_id($product_key);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrito</title>
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
        <table>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Peso</th>
                <th>Unidades</th>
                <th>Eliminar</th>
            </tr>
            <?php
                foreach ($carrito_array as $product){
                    echo "<tr>";
                    echo "<td>" . $product->getNombre() . "</td>";
                    echo "<td>" . $product->getDescripcion() . "</td>";
                    echo "<td>" . $product->getPeso() . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
</body>
</html>
