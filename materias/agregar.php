<!DOCTYPE html>
<html>
<head>
    <title>Formulario Profesores</title>
    <link rel="stylesheet" type="text/css" href="../estilos/agregarmat.css">
</head>
<body>

<h2>Formulario de Registro Profesores</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label for="idmateria">Id Materia</label>
    <input type="text" id="idmateria" name="idmateria" required><br><br>
   
<label for="nombre">Nombre Materia</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

   
   <input type="submit">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombrema = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $correo = $_POST['correo'];
    $materia = $_POST['materia'];
    $notas = $_POST['notas'];
    echo '<script languaje="javascript">alert("¡Gracias por enviar el formulario!");</script>';
}
?>