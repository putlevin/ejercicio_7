<?php


include "conexionbase.php";
//Obtiene un dato en este caso el ID
$id_Admin = $_GET['ID_Admin'];
//Elimina la info que se pide
$eliminar_admin = "DELETE FROM administrativos WHERE ID_Admin = '$id_Admin'";
//guarda la conexion de la bd y elimina el registro
$resultado = $conexion->query($eliminar_admin); 
//verifica si elimino 
if($resultado == TRUE)
{
    header("Location:./ConsultarAdministrativos.php");

}
else
{
    echo "Error" . $eliminar_admin . "<br>" . $conexion->error;
}


?>


