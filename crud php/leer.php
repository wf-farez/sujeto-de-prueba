<?php
include "modelo/conexion.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

<div class="container">

<button class="btn btn-primary my-5">
    <a href="crear.php" 
    class="text-dark">Agregar usuario
</button>


<table class="table">
  <thead>

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Operacion</th>
    </tr>

  </thead>

  <tbody>

    <?php
    include "controlador/leer_c.php";
    ?>


  </tbody>


</table>



</div>




</body>
</html>