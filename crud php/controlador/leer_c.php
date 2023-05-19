
<?php  

$sql="SELECT * FROM `persona`";
$result=mysqli_query($conn, $sql);

if($result){
   while ($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $nombre=$row['nombre'];
    $direccion=$row['direccion'];
    $telefono=$row['telefono'];
    $email=$row['email'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$nombre.'</td>
    <td>'.$direccion.'</td>
    <td>'.$telefono.'</td>
    <td>'.$email.'</td>

    <td>
    <button class="btn" class="text-dark">
    <a href="actualizar.php?
    actualizar_id='.$id.'">Actualizar</a></btton>

    <button class="btn" class="text-dark">
    <a href="eliminar.php?
    eliminar_id='.$id.'"> Eliminar </a></button>


</td>

  </tr>';
   }  
}
?>
