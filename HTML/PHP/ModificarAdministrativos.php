<?php
//llama la pagina de la bd 
include "conexionbase.php";
//obtener info con las columnas de la tabla alumnos de la bd
$admin_id = $_GET['ID_Admin'];


if (isset($_POST["btnactualizar"])){

    
    $nombread = $_POST["txtnom"];
    $apellidoad = $_POST["txtapel"];
    $puesto = $_POST["txtpuesto"];
    $correoad = $_POST["txtcorreo"];

//Actualizar info

$modificar_ad= "UPDATE administrativos SET Nombre_Ad = '$nombread', Apellido_Ad = '$apellidoad', 
Puesto = '$puesto',Correo='$correoad' WHERE ID_Admin = $admin_id";

$resultadoupdate = $conexion-> query($modificar_ad);
if($resultadoupdate == TRUE)
{
  echo "Actualizado correctamente";
}
else
{
  echo "error" . $modificar_ad . "<br>" . $conexion->error;
}

}

//ejecutar la conexion y la instruccion del update

$sql = "SELECT * FROM administrativos WHERE ID_Admin = '$admin_id'";


$resultadoselect = $conexion->query($sql);

if ($resultadoselect->num_rows > 0){
  while ($row = $resultadoselect->fetch_assoc()){
    //Columnas de las base de datos
      $id_Admin = $row['ID_Admin'];
      $nombread = $row['Nombre_Ad'];
      $apellidoad = $row['Apellido_Ad'];
      $puesto = $row['Puesto'];
      $correoad = $row['Correo'];
     
  }
}




?>

<!doctype html>
<html lang="en">
  <head>
    <title>Modificar Administrativos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../CSS/PHP.CSS">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  
  <div class="container-flued">
  <div class="row">
            <div class="col-12">
              <h1 style="text-align: center;"> Administrativos</h1>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <img src="../../IMG/lo.png" class="LOGO" width="300" height="300">
          </div>
         
        <div class="row">
          <div class="col-12">
            <form action="" method="post" class="form-group">    <!-- //el metodo post hace una peticion  -->

            <div class="form-group">
            <div class="col-12">
              <label for="inputEmail4" class="form-label"><h4>ID</h4></label>
              <input type="number" class="form-control"  placeholder="Ingresa ID" Required name="txtid" value="<?php echo $id_Admin;?>">
            </div>
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Nombre</h4></label>
              <input type="text" class="form-control"  placeholder="Ingresa nombre" required name="txtnom" value="<?php echo $nombread;?>">
            </div>

            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Apellido</h4></label>
              <input type="text" class="form-control"  placeholder="Ingresa apellido" required name="txtapel" value="<?php echo $apellidoad;?>">
            </div>

            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Puesto</h4></label>
              <input type="text" class="form-control"  placeholder="Ingresa puesto" required name="txtpuesto" value="<?php echo $puesto;?>">
            </div>


           
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Correo</h4></label>
              <input type="email" class="form-control"  placeholder="Ingresa correo" required name="txtcorreo" value="<?php echo $correoad;?>">
            </div>
            </div>
            <br>
            <div class="col-12">
              <button name="btnactualizar" class="boton" type="submit" class="btn btn-primary" style="margin-left: 20px;">Modificar</button>
            </div>

            <div class="col-12">
              <button  class="boton" type="submit" class="btn btn-primary" style="margin-left: 20px;"><a href="../index.html">Regresar</a></button>
            </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
