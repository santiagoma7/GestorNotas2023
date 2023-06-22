<?php
include_once('../../conexion.php');
include_once('../modelos/admin.php');

//Crear el objeto de la clase administrador;

$admin = new Administrador();
//definir argumentos que se van a enviar por medio de la funcion insertar usuario

$Nombreusu = $_POST['txtnombre'];
$Apellidousu = $_POST['txtapellido'];
$Usuariousu = $_POST['txtusuario'];
$Passwordusu = MD5 ($_POST['txtcontrasena']);
$Perfil = $_POST['txtperfil'];
$Estadousu = $_POST['txtestado'];


$admin->addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu);
?>
