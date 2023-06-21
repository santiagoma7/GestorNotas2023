<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="estilos/iniciosesion.css">
    
    <title >Inicio de sesión</title>
    
    <?php
    // Verificar si se envió el formulario de inicio de sesión
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Verificar las credenciales ingresadas
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        if ($username === 'admin' && $password === '12345') {
            header('Location: inicio.php');
            exit();
        } else {
            echo '<p class="text-danger">Credenciales incorrectas. Inténtalo de nuevo.</p>';
        }
    }
    ?>

    <div class="container">
        <h2 class="text-center">Iniciar sesión</h2>
        <form method="POST" action="index.php">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" name="username" id="username" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit">Iniciar sesión</button>
        </form>

        <p class="mt-3 text-center">¿No tienes una cuenta? <a href="admin/paginas/index.php">Regístrate aquí </a>.</p>
    </div>
</body>
</html>
