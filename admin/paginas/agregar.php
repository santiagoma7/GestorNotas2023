<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="estilos/estilos.css">
    <title>Registro</title>
</head>
<body>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding-top: 100px;
            text-align: center;
        }

        form {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: purple;
            padding: 30px;
            border-radius: 20px;
            color: white;
            margin: 0 auto;
            width: 300px;
        }

        form label {
            display: block;
            margin-bottom: 3px;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
        }

        form button {
            width: 100%;
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

    <div class="container">
        <form>
            <label>Nombre</label>
            <br>
            <input type="text" placeholder="Nombre">
            <br>
            <label>Apellido</label>
            <br>
            <input type="text" placeholder="Apellido">
            <br>
            <label>Usuario</label>
            <br>
            <input type="text" placeholder="Usuario">
            <br>
            <label>Contraseña</label>
            <br>
            <input type="password" placeholder="Contraseña">
            <br>
            <input type="submit">
        </form>
    </div>
</body>
</html>
