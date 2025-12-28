<?php
namespace lgc\aplicacion_pedidos\controllers\ProductoController;
use lgc\aplicacion_pedidos\controllers\ProductoController;
use lgc\aplicacion_pedidos\daos\PedidoProductoDao;
use lgc\aplicacion_pedidos\controllers\MailsController;

session_start();
if (!isset($_SESSION['user'])){
    header('location:/aplicacion_pedidos/public/login');
    exit();
}


$producto_controller = new ProductoController();
$carrito_array = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cantidad_disminuir'])) {
    $_SESSION['carrito'][$_POST['num_producto']] -= $_POST['cantidad_disminuir'];
}
foreach ($_SESSION['carrito'] as $product_key => $product_value) {
    $carrito_array[$product_key] = [
        "cantidad" => $product_value,
        "producto" => $producto_controller->get_product_by_id($product_key),
        "id_producto" => $product_key,
    ];
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pedir_true'])){
    $pedido_producto = new PedidoProductoDao();
    $pedido_producto->set_productos_pedido($_SESSION['user'],$carrito_array);
    $mailer = new MailsController();
    $mailer->send_mail('luisgarciacapilla1@gmail.com', 'luisgarciacapilla1@gmail.com');
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
            <li><a href="/aplicacion_pedidos/public/carrito">Ver Carrito</a></li>
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
                foreach ($carrito_array as $key => $product){
                    echo "<tr>";
                    echo "<td>" . $product['producto']->getNombre() . "</td>";
                    echo "<td>" . $product['producto']->getDescripcion() . "</td>";
                    echo "<td>" . $product['producto']->getPeso() . "</td>";
                    echo "<td>" . $product['cantidad'] . "</td>";
                    echo "<td><form action='' method='post'>";
                    echo "<input type='number' id='cantidad_disminuir' name='cantidad_disminuir'>";
                    echo "<input type='hidden' id='num_producto' name='num_producto' value='$key'>";
                    echo "<input type='submit' name='eliminar' value='Eliminar'>";
                    echo "</form></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </main>
    <section>
        <form method="post" action="">
            <input type="hidden" name="pedir_true">
            <input type="submit" name="Pedir" id="Pedir">
        </form>
    </section>
</body>
</html>
