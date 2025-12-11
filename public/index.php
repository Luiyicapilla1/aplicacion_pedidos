<?php
require_once '../vendor/autoload.php';
use lgc\aplicacion_pedidos\controllers\RestauranteController;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $restaurante_controller = new RestauranteController();
    if ($restaurante_controller->verify_login()){
        session_start();
        $_SESSION['user'] = $_POST['correo'];
        header('location:./lista_categorias.php');
    }else{
        $error = "El usuario o la contraseña no son correctos";
    }
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
    <main>
        <section>
            <?php if (isset($error)){echo $error;}?>
        </section>
        <section>
            <form method="post" action="">
                <label for="correo">
                    <input type="email" id="correo" name="correo">
                </label>
                <label for="clave">
                    <input type="password" id="clave" name="clave">
                </label>
                <input type="submit" value="Enviar Consulta">
            </form>
        </section>
    </main>
</body>
</html>
