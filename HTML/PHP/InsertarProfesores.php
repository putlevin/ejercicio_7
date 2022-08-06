<?php

include ("../PHP/conexionbase.php");
//Llama los inputs de la pagina alumnos.html

$id_Maestro= $_POST["txtidm"];
$nombremst = $_POST["txtnommst"];
$apellidomst = $_POST["txtapelmst"];
$materia = $_POST["txtmateria"];
$correomst = $_POST["txtcorreomst"];


//AGREGAR LA ID A LA TABLA ALUMNOS

$sql="INSERT into maestros values('$id_Maestro','$nombremst','$apellidomst','$materia','$correomst')";


//Pregunta si los campos tienen info 
//empty es un metodo que comprueba si los campos estan vacios
if(mysqli_query($conexion,$sql))  
//al momento de enviar los inputs se va info vacia y marca el mensaje de que debe estar lleno
//hace que se guarde info vacia
{
    header("Location:../../HTML/index.html");   //IMPORTANTE

}
else
{//insertar datos en la base
    echo "Error: ".sql."<br>".mysqli_error($conexion);


}

?>