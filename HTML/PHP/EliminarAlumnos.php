<?php


require "conexionbase.php";
//Obtiene un dato en este caso el ID
$student_id = $_GET['ID_Al'];
//Elimina la info que se pide
$eliminar_al = "DELETE FROM alumnos WHERE ID_Al = '$student_id'";
//guarda la conexion de la bd y elimina el registro
$resultado = $conexion->query($eliminar_al); 
//verifica si elimino 
if($resultado == TRUE)
{
    header("Location:./ConsultarAlumnos.php");

}
else
{
    echo "Error" . $eliminar_al . "<br>" . $conexion->error;
}


?>