
<?php

include_once('../../conexion.php');
class Administrador extends Conexion
{
public function __construct(){
    $this ->db = parent::__construct();
}

// FUNCION PARA REGISTRAR LOS USUARIOS
public function addadmi($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfil,$Estadousu);
{
//crear la sentencia sql
$statement= $this->db->prepare("INSERT INTO  usuarios(Nombreusu, Apellidousu,Usuario,Password,Perfil,
Estado)VALUES (:Nombreusu,:Apellidousu,:Usuariousu,:Passwordusu,:'Administrador',:'Activo')");

$statement->bindParam(':Nombreusu',$Nombreusu);
$statement->bindParam(':Apellidousu',$Apellidousu);
$statement->bindParam(':Usuariousu',$Usuariousu);
$statement->bindParam(':Passwordusu',$Passwordusu);
$statement->bindParam(':Perfil',$Perfil);
$statement->bindParam(':Estadousu',$Estadousu);
 if ($statement->execute())
 {
echo "Registrado con exito";
header(Location: '../page/index.php');
 }else
 {
echo "Uusario no registrado";
header (Location: '../pages/agregar.php')
 }
}

//FUNCION PARA CONSULTAR EL USUARIO DE ACUERDO A SU ID

public function getidad($Id)
{

}

//FUNCION ACTUALIZAR LOS DATOS DEL USUARIO
public function updatead ($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estado)
{

}


//FUNCION PARA BORRAR UN USUARIO

public function deletead ($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estado)
{

}

}

?>
