<?php
//llama la pagina de la bd 
include "conexionbase.php";
//obtener info con las columnas de la tabla alumnos de la bd
$student_id = $_GET['ID_Al'];


if (isset($_POST["btnactualizar"])){


$nombreal = $_POST["txtnom"];
$apellidopat = $_POST["txtpat"];
$apellidomat = $_POST["txtmat"];
$edadal = $_POST["txtedad"];
$telal = $_POST["txttel"];
$correoal = $_POST["txtcorreo"];

//Actualizar info

$modificar_al = "UPDATE alumnos SET Nombre_Al = '$nombreal', ApellidoPat = '$apellidopat', Apellidomat = '$apellidomat',
Edad = '$edadal',Telefono= '$telal',Correo='$correoal' WHERE ID_Al = $student_id";

$resultadoupdate = $conexion-> query($modificar_al);
if($resultadoupdate == TRUE)
{
  echo "Actualizado correctamente";
}
else
{
  echo "error" . $modificar_al . "<br>" . $conexion->error;
}

}

//ejecutar la conexion y la instruccion del update

$sql = "SELECT * FROM alumnos WHERE ID_Al = '$student_id'";


$resultadoselect = $conexion->query($sql);

if ($resultadoselect->num_rows > 0){
  while ($row = $resultadoselect->fetch_assoc()){
    //Columnas de las base de datos
      $id_al = $row['ID_Al'];
      $nombreal = $row['Nombre_Al'];
      $apellidopat = $row['ApellidoPat'];
      $apellidomat = $row['Apellidomat'];
      $edadal = $row['Edad'];
      $telal = $row['Telefono'];
      $correoal = $row['Correo'];
  }
}




?>

<!doctype html>
<html lang="en">
  <head>
    <title>Modificar Alumnos</title>
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
              <h1 style="text-align: center;"> Alumnos</h1>
            </div>
        </div>
        
        <div class="row">
          <div class="col-12">
            <img src="../../IMG/lo.png" class="LOGO" width="300" height="300">
          </div>
         
          <br>
          
        <br>
        <div class="row">
          <div class="col-12">
            <form action="" method="post" class="form-group">    <!-- //el metodo post hace una peticion  -->

              <div class="form-group">
                <div class="col-12">
                  <label for="inputEmail4" class="form-label"><h4>Matricula</h4></label>
                  <input type="number" class="form-control"  placeholder="Ingresa una matricula" name="txtid" Required value="<?php echo $id_al;?>">
                </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label"><h4>Nombre</h4></label>
              <input type="text" class="form-control"  placeholder="Ingresa un Nombre" Required  name="txtnom" value="<?php echo $nombreal;?>">
            </div>
            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Apellido Paterno</h4></label>
              <input type="text" class="form-control"  placeholder="Ingresa apellido" required name="txtpat" value="<?php echo $apellidopat;?>" >
            </div>

            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Apellido Materno</h4></label>
              <input type="text" class="form-control"  placeholder="Ingresa apellido" required name="txtmat" value="<?php echo $apellidomat;?>">
            </div>

            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Edad</h4></label>
              <input type="number" class="form-control"  placeholder="Ingresa edad" required name="txtedad" value="<?php echo $edadal;?>">
            </div>


            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Telefono</h4></label>
              <input type="number" class="form-control"  placeholder="Ingresa telefono" required name="txttel" value="<?php echo $telal;?>">
            </div>

            <div class="col-md-12">
              <label for="inputPassword4" class="form-label"><h4>Correo</h4></label>
              <input type="email" class="form-control"  placeholder="Ingresa correo" required name="txtcorreo" value="<?php echo $correoal;?>">
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
