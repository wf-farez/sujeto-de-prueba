<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "crud"; 

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn) {
    echo "Conexión exitosa a la base de datos";
}else{
    die(mysqli_error($conn));
}

?>
