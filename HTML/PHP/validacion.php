<?php
session_start();
include("./conexionbase.php");

$user = $_POST['correo'];
$pass = $_POST['pass'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombreusuario= '$user' AND contrasenia = '$pass'");
if(mysqli_num_rows($validar_login) > 0)

{
    echo "Ya";
    exit();

}
else 
{
    echo "no";
    exit ();
}

?>