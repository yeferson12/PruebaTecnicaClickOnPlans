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

   echo $_GET['id'];
?> 
<div class="mr-3 ml-3 mt-3">
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">

    <label for="exampleFormControlInput1">Pelicula</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Pelicula">
  </div>
</form>
</div>

</body>
</html>