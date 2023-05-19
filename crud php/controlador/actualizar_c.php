<?php


$id=$_GET['actualizar_id'];

$sql="SELECT * FROM `persona` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$nombre=$row['nombre'];
$direccion=$row['direccion'];
$telefono=$row['telefono'];
$email=$row['email'];

if(isset($_POST['submit'])){
  $nombre=$_POST['nombre'];   
  $direccion=$_POST['direccion'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];

  $sql="UPDATE `persona` SET id='$id', 
  nombre='$nombre', direccion='$direccion',
   telefono='$telefono',email='$email'
   where id=$id";
  $result=mysqli_query($conn,$sql);

if($result){
  //echo "Datos actualizados";
  header('location:leer.php');
}else{
  die(mysqli_error($conn));
}


}
?>
