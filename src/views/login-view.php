<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/login.css">
    <title>Login</title>
</head>
<body>
    <main class="login-card">
        <h1>Iniciar sesión</h1>
        <p>Accede con tus credenciales</p>

        <?php if (isset($error)): ?>
            <div class="error">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="post" action="">
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" id="correo" name="correo" required>
            </div>

            <div class="form-group">
                <label for="clave">Contraseña</label>
                <input type="password" id="clave" name="clave" required>
            </div>

            <button type="submit">Entrar</button>
        </form>

        <div class="footer-text">
            © <?= date('Y') ?> · Acceso seguro
        </div>
    </main>
</body>
</html>