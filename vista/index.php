<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
  <?php 
  include '../controlador/conexion.php';


$var_consulta = "SELECT actors_movies.id, actors.nombre, movies.nombre as nombrepeli 
FROM actors_movies 
INNER JOIN actors ON actors.id = actors_movies.actor_id 
INNER JOIN movies ON movies.id = actors_movies.movi_id";
//$var_consulta = "SELECT * from actors";
$var_resultado = $_SESSION["mysqli"]->query($var_consulta);

  ?> 
<div class="col-12">
<a  href="insertar.php"class="btn btn-primary mb-3 ml-3 mt-3">Insertar</a>
</div>

    <div class="mr-3 mt-3 ml-3 col-12">
        <table class="table">
            <thead>
              <tr>
               
              </tr>
            </thead>
            <tbody>
              <?php
              while($var_fila=$var_resultado->fetch_array())
              {
                ?>
                  <tr>
                  <td> <?php echo $var_fila["id"] ?></td>
                  <td> <?php echo $var_fila["nombre"] ?></td>
                  <td> <?php echo $var_fila["nombrepeli"] ?></td>
                  <td><a href="editar.php?id=<?php echo $var_fila["id"]; ?>" class="badge badge-success">editar</a></td>
                  <td><a href="../controlador/eliminar.php?id=<?php echo $var_fila["id"]; ?>" class="badge badge-danger">eliminar</a></td>
                  </tr>
              <?php
               } 
              ?>
              <tr>
        

              </tr>
              
            </tbody>
          </table>
    </div>
    
</body>
</html>