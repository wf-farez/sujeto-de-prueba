<?php
include "modelo/conexion.php";
include "controlador/actualizar_c.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>


    <div class="container" >
        <div class="d-flex justify-content-center">
            <form method="post" class="col-5" >

                <div class="mb-3 my-5">
                    <label >Nombre</label>
                    <input type="text" class="form-control" 
                placeholder="Ingrese su nombre"
                name="nombre" autocomplete="off"
                value=<?php echo $nombre;?>>
                </div>

                <div class="mb-3">
                    <label >Direccion</label>
                    <input type="text" class="form-control" 
                placeholder="Ingrese su direccion"
                name="direccion" autocomplete="off"
                value=<?php echo $direccion;?>>
                </div>

                <div class="mb-3">
                    <label >Telefono</label>
                    <input type="text" class="form-control" 
                placeholder="Ingrese su telefono"
                name="telefono" autocomplete="off"
                value=<?php echo $telefono;?>>
                </div>

                <div class="mb-3">
                    <label >E-mail</label>
                    <input type="text" class="form-control" 
                placeholder="Ingrese su email"
                name="email" autocomplete="off"
                value=<?php echo $email;?>>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Actualizar</button>
            </form>
        </div>
    </div>



</body>
</html>