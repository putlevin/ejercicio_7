<?php
require "conexionbase.php"; //acceder a la pagina de conexion

$consultaradmin = "SELECT * FROM administrativos"; //indicar de donde se hara la consulta
$result = $conexion->query($consultaradmin);
//conectar a la bd y hacer el select



?>

<!--Determina la version del html-->
<!doctype html>
<html lang="en">
  <head>
    <title>ADMINISTRATIVO</title>
    <!-- Required meta tags
    Se utiliza para que los navegadores -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
<!--MENU INICIO------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="../../CSS/PHP.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../../IMG/Harvard.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-light" id="menu">
        <div class="container-fluid">
          
        </div>
      </nav>
    <div class="container-fluid">
        <nav class="navbar bg-light fixed-top">
              <a class="navbar-brand" href="#" ><img src="../../IMG/Harvard.jpg" width="200px" height="100px">Golden University</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-body" >
                  <div class="row">
                    <div class="col-6" class="php">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-flex flex-row" class="php">
                        <li class="nav-item">
                          <a class="nav-link active ml-5" aria-current="page" href="./INDEX.HTML">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link ml-5" href="./ACERCA.HTML">Acerca:</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="./OFERTA.HTML">Oferta educativa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-5" href="./SERVICIOS.HTML">Servicios</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-3">
                      <div class="boton menu">
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                            Menu
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button"><a href="./PERFIL.HTML"><img src="./../IMG/PERFIL.png" width="50px" height="50px"> Perfil</button></a>
                            <hr>
                            <button class="dropdown-item" type="button"><a href="./ALUMNOS.HTML"><img src="./../IMG/Alumno.png" width="50px" height="50px"> Alumnos</button></a>
                            <button class="dropdown-item" type="button"><a href="./MAESTROS.HTML"><img src="./../IMG/Maestro.png" width="50px" height="50px"> Maestros</button></a>
                            <button class="dropdown-item" type="button"><a href="./ADMINISTRATIVO.HTML"><img src="./../IMG/Administrativo.png" width="50px" height="50px"> Administrativo</button></a>
                            <hr>
                            <button class="dropdown-item" type="button"><a href="./../PHP/cerrarsesion.php"><img src="./../IMG/Cerrar.png" width="50px" height="50px"> Cerrar sesion</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
<!--MENU FINAL------------------------------------------------------------------------------------------------------------------------------------->
<!--DESARROLLO INICIO-->
      <div class="row">
        <div class="col-12">
          <table class="table mt-5">
            <thead class="thead-dark">  <!--dar color-->
              <tr><!--crear filas-->
                <th scope="col">ID_Admin</th> <!--agregarcolumnas-->
                <th scope="col">Nombre_Ad</th>
                <th scope="col">Apellido_Admin</th>
                <th scope="col">Puesto</th>
                <th scope="col">Correo_Admin</th>

              </tr>
            </thead>
            <tbody>
              <?php
              if($result->num_rows>0) //preguntar si la tabla este llena, mayor a 0, mientras la fila este
              //verificar que tenga registros
              {
                while($row = $result->fetch_assoc()){  //fetch convierte la info en arreglos, 
                  ?>
                  <tr>
                    <td><?php echo $row['ID_Admin']; ?></td>
                    <td><?php echo $row['Nombre_Ad']; ?></td>
                    <td><?php echo $row['Apellido_Ad']; ?></td>
                    <td><?php echo $row['Puesto']; ?></td>
                    <td><?php echo $row['Correo']; ?></td>
                    <td><a class="btn btn-info" href="ModificarAdministrativos.php?ID_Admin=<?php echo $row['ID_Admin'];?>">Edit</a> &nbsp;
                    <a class="btn btn-danger" href="EliminarAdministrativos.php?ID_Admin=<?php echo $row ['ID_Admin'];?>">Delete</a>
                    <!--Pone una valiable fila para obtener el valor de la matricula-->
                    </td>
                  </tr>
                  <?php

                }

              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
<!--DESARROLLO FINAL-->
<!--FOOTER INICIO------------------------------------------------------------------------------------------------------------------------------------->
        <div class="row">
            <div class="col-6">
              <hr><hr>
                <ul>
                    <li class="iconos"><a href="https://es-la.facebook.com/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></a></i></li>
                    <li class="iconos"><a href="https://www.instagram.com/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></a></i></li>
                    <li class="iconos"><a href="https://www.youtube.com/?hl=ES"><i class="fa fa-youtube fa-2x" aria-hidden="true"></a></i></li>
                    <li class="iconos"><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
                </ul>
                <p id="Contacto">Contactanos <br>
                  Telefono: (449) 193 - 99 - 54 <br>
                  Direccion: #43, Recinto Agave, Valle de los cactus, Aguascalientes, Aguascalientes. <br>
              </p>
              <br>
            </div>
            <div class="col-6">
              <hr><hr>
                <img src="./../IMG/Harvard.jpg">
            </div>
        </div>
        <div class="row">
          <div class="col-6">
            <form>
              <div class="form-group">
                <label>Nombre:</label>
                <input type="text" placeholder="Ingresa tu nombre completo" required class="form-control"><br><br>
                <label>Email:</label>
                <input type="Email" placeholder="Ingresa  tu correo elec." required class="form-control"><br><br>
                <label>Comentarios:</label>
                <textarea cols="30" rows="5" placeholder="Ingresa tus comentarios" required class="form-control"></textarea>
              </div>
            </form>
          </div>
          <div class="col-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d654.5276586817728!2d-102.2356677992113!3d21.874209610088172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429f363621cb487%3A0xef36680b1e89b243!2sOxxo%20Los%20Cactus!5e0!3m2!1ses-419!2smx!4v1655475959117!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>© This page will create by Kevin Diaz with visual studio code program</p>
            </div>
        </div>
<!--FOOTER FINAL------------------------------------------------------------------------------------------------------------------------------------->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
      