<!DOCTYPE html>
<html>
<head>
    <title >Inicio de sesión</title>
    <style>
        body {
            background-image: url("img/notas.jpg");
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding-top: 100px;
            width: 40%;
            text-align: center;
        }

        form {
            background-color: purple;
            padding: 30px;
            border-radius: 48px;
            color: white;
        }

        form label {
            display: block;
            margin-bottom: 3px;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 90%;
            padding: 6px;
            margin-bottom: 10px;
        }

        form button {
            width: 95%;
            padding: 12px;
            background-color: #6c757d;
            border: none;
            color: white;
            cursor: pointer;
        }

        form button:hover {
            background-color: #495057;
        }

        form p {
            text-align: center;
            margin-top: 10px;
        }

        form a {
            color: white;
            text-decoration: underline;
        }
    </style>
</head>
<body>
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

        <p class="mt-3 text-center">¿No tienes una cuenta? <a href="admin/paginas/agregar.php">Regístrate aquí </a>.</p>
    </div>
</body>
</html>
