<?php
//llamar pagina php myadmin
$localhost = "localhost";
$user = "root"; //llamar usuario
$pass = "";
$namebd = "golduniversity";//llamar el nombre de la bd

//leer variables
$conexion = mysqli_connect($localhost, $user,$pass,$namebd);//mysqli es una funcion para la conexion de la bd
//seleccionar bd
mysqli_select_db($conexion, $namebd);

//imprimir inf con echo
//PHP Debug extension instalar y PHP IntelliSense y PHP Server
//echo = "Base de Datos existente";

if(!$conexion)
{
die ("Conexión fallida" . mysqli_connect_error()); //die imprime errores



}
else{


//echo "La conexión es exitosa";//imprimimr conexión exitosa
//se cierra la conexión a la base de datos

}

?>