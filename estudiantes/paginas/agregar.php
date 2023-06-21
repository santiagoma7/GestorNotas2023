<!DOCTYPE html>
<html>
<head>
    <title>Formulario Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="../../estilos/agregarest.css">
</head>
<body>

<h2>Formulario de Registro Estudiantes</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="documento">Documento:</label>
    <input type="text" id="documento" name="documento" required><br><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required><br><br>

    <label for="promedio">Promedio:</label>
    <input type="text" id="promedio" name="promedio" required><br><br>

    <label for="fechar">Fecha Registro:</label>
    <input type="text" id="fechar" name="fechar" required><br><br>

    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $materia = $_POST['promedio'];
    $notas = $_POST['fechar'];
    echo '<script languaje="javascript">alert("¡Gracias por enviar el formulario!");</script>';
}
?>
