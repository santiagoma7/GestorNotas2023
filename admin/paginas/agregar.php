<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="../../estilos/registroform.css">
    <title>Registro</title>
</head>
<body>
   

    <div class="container">
        <form action="../controladores/agregarusuario.php" method="POST">
            <label>Nombre</label>
            <br>
            <input type="text" placeholder="Nombre" name="txtnombre">
            <br>
            <label>Apellido</label>
            <br>
            <input type="text" name="txtapellido" placeholder="Apellido">
            <br>
            <label>Usuario</label>
            <br>
            <input type="text" name="txtusuario" placeholder="Usuario">
            <br>
            <label>Contraseña</label>
            <br>
            <input name="txtcontrasena" type="password" placeholder="Contraseña">
            <br>
            <p>Perfil
            <label for="perfil"></label>
            <select name="txtperfil">
                <option></option>
                <option value="Administrador">Administrador</option>
                <option value="Docente">Docentes</option>
                
            </select>
</p>
<p>Estado
            <label for="perfil"></label>
            <select name="txtestado">
                <option></option>
                <option value="Activo">Activo</option>
                <option value="No activo">No activo</option>
                
            </select>
</p>
            <input type="submit">
        </form>
    </div>
</body>
</html>
