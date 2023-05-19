<?php

if(isset($_POST['submit'])){
  $nombre=$_POST['nombre'];   
  $direccion=$_POST['direccion'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];

  $sql="INSERT INTO `persona` (`nombre`, `direccion`, `telefono`, `email`) VALUES ('$nombre', '$direccion', '$telefono', '$email')";
  $result=mysqli_query($conn,$sql);

if($result){
  //echo "Datos insertados";
  header('location:leer.php');
}else{
  die(mysqli_error($conn));
}
}
?>

