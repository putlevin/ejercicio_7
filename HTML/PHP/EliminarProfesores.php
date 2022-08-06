<?php


require "conexionbase.php";
//Obtiene un dato en este caso el ID
$maestro_id = $_GET['Id_Maestro'];
//Elimina la info que se pide
$eliminar_mas = "DELETE FROM maestros WHERE Id_Maestro = '$maestro_id'";
//guarda la conexion de la bd y elimina el registro
$resultado = $conexion->query($eliminar_mas); 
//verifica si elimino 
if($resultado == TRUE)
{
    header("Location:./ConsultarProfesores.php");

}
else
{
    echo "Error" . $eliminar_mas . "<br>" . $conexion->error;
}


?>