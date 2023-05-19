<?php

if(isset($_GET['eliminar_id'])){
    
    $id = $_GET['eliminar_id'];
    $sql = "DELETE FROM `persona` WHERE id='" . $id . "'";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        #echo "Eliminación correcta";
        header('location:leer.php');
    } else {
        die(mysqli_error($conn)); 
    }
}
?>
