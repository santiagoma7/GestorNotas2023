
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
header('Location: ../page/index.php');
 }else
 {
echo "Uusario no registrado";
header ('Location: ../pages/agregar.php')
 }
}


//FUNCION PARA OBTENER ADMINISTRADOR
public function getadmin ()
{

    $row = null;
    $statement = $this->db->prepare("SELECT FROM usuarios WHERE Perfil='Administrador'");
    $statement->execute();

    while($result->$statement->fetch()){
        $row[]=$result;
    }
    result $row;
}

//FUNCION PARA CONSULTAR EL USUARIO DE ACUERDO A SU ID

public function getidad($Id)
{
$row=null;
$statement=$this->db->prepare("SELECT * FROM usuarios WHERE id_usuario=:Id AND Perfil='Administrador'");
$statement->bindParam(':Id',$Id);
$statement->execute();
while($result->$statement->fetch()){
    $row[]=$result;
}
}

//FUNCION ACTUALIZAR LOS DATOS DEL USUARIO
public function updatead ($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estado)
{
$statement=$this->db->prepare("UPDATE usuarios SET Nombreusu=:Nombreusu, Apellidousu=:Apellidousu, Usuario:Usuariousu, Passwordu=:Passwordu, Estado=:Estado WHERE id_usuario=$Id");
$statement->bindParam(':Id',$Id);
$statement->bindParam(':Nombreusu',$Nombreusu);
$statement->bindParam(':Apellidousu',$Apellidousu);
$statement->bindParam(':Usuariousu',$Usuariousu);
$statement->bindParam(':Passwordusu',$Passwordusu);
$statement->bindParam(':Estadousu',$Estado);
if ($statement->execute()){
    header('Location: ../pages/index.php');
}else{
    header('Location: ../pages/editar.php');
}
}


//FUNCION PARA BORRAR UN USUARIO

public function deletead ($Id,$Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Estado)
{
$statement=$this->prepare(" DELETE FROM usuarios WHERE id_usuario=:Id");
$statement->bindParam(':Id',$Id);
if($statement->execute())
{
    echo "Usuario eliminado ";
    header('Location: ..pages/index.php');
}else{
    echo "error no se puede eliminar usuario";
    header('Location: ..pages/eliminar.php');
}
}



}
?>
