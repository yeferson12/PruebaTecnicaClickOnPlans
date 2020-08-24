<?php
 include '../controlador/conexion.php';
$var_consulta = "DELETE FROM actors_movies
WHERE id=" . $_GET['id'];
//$var_consulta = "SELECT * from actors";
$var_resultado = $_SESSION["mysqli"]->query($var_consulta);

header('Location: ../vista/index.php');
?>