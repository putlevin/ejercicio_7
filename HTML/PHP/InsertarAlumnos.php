<?php

include ("../PHP/conexionbase.php"); //llama la pagina para hacer la conexion con la bd


//Llama los inputs de la pagina alumnos.html

$id_al = $_POST['txtal'];
$nombreal = $_POST["txtnom"];
$apellidopat = $_POST["txtpat"];
$apellidomat = $_POST["txtmat"];
$edadal = $_POST["txtedad"];
$telal = $_POST["txttel"];
$correoal = $_POST["txtcorreo"];


//AGREGAR LA ID A LA TABLA ALUMNOS

$sql="INSERT into alumnos values('$id_al','$nombreal','$apellidopat','$apellidomat','$edadal','$telal','$correoal')";

//Pregunta si los campos tienen info 
//empty es un metodo que comprueba si los campos estan vacios
if(mysqli_query($conexion,$sql))  
//al momento de enviar los inputs se va info vacia y marca el mensaje de que debe estar lleno
//hace que se guarde info vacia
{
    header("Location:../../HTML/INDEX.html");   //IMPORTANTE

}
else
{//insertar datos en la base
    echo "Error: ".sql."<br>".mysqli_error($conexion);


}





?>