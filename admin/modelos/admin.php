<?php

include_once('../../conexion.php');

class Administrador extends Conexion
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->getConnection();
    }

    // FUNCION PARA REGISTRAR LOS USUARIOS
    public function addadmi($Nombreusu, $Apellidousu, $Usuariousu, $Passwordusu, $Perfil, $Estadousu)
    {
        // Crear la sentencia sql
        $statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu, Apellidousu, Usuariousu, Passwordusu, Perfil, Estado) VALUES (:Nombreusu, :Apellidousu, :Usuariousu, :Passwordusu, :Perfil, :Estadousu)");

        $statement->bindParam(':Nombreusu', $Nombreusu);
        $statement->bindParam(':Apellidousu', $Apellidousu);
        $statement->bindParam(':Usuariousu', $Usuariousu);
        $statement->bindParam(':Passwordusu', $Passwordusu);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estadousu', $Estadousu);
        
        if ($statement->execute()) {
            echo "Registrado con éxito";
            header('Location: ../index.php');
            exit;
        } else {
            echo "Usuario no registrado";
            header('Location: ../admin/paginas/agregar.php');
            exit;
        }
    }

    // FUNCION PARA CONSULTAR EL USUARIO DE ACUERDO A SU ID
    public function getidad($Id)
    {
        // Tu código aquí
    }

    // FUNCION ACTUALIZAR LOS DATOS DEL USUARIO
    public function updatead($Id, $Nombreusu, $Apellidousu, $Usuariousu, $Passwordusu, $Estado)
    {
        // Tu código aquí
    }

    // FUNCION PARA BORRAR UN USUARIO
    public function deletead($Id, $Nombreusu, $Apellidousu, $Usuariousu, $Passwordusu, $Estado)
    {
        // Tu código aquí
    }
}

?>
