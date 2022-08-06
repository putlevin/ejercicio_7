<?php

include ("../PHP/conexionbase.php");

//Llama los inputs de la pagina alumnos.html

$id_Admin= $_POST["txtid"];
$nombread = $_POST["txtnom"];
$apellidoad = $_POST["txtapel"];
$puesto = $_POST["txtpuesto"];
$correoad = $_POST["txtcorreo"];

$sql="insert into administrativos values('$id_Admin','$nombread','$apellidoad','$puesto','$correoad')";

//AGREGAR LA ID A LA TABLA ALUMNOS



//Pregunta si los campos tienen info 
//empty es un metodo que comprueba si los campos estan vacios


if(mysqli_query($conexion,$sql))  
{
    header("Location:../../HTML/index.html");   //IMPORTANTE

}
else
{//insertar datos en la base
    echo "Error: ".sql."<br>".mysqli_error($conexion);


}



?>