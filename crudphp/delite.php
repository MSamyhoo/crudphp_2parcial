<?php
 include ('config/db.php');

$id = $_GET['id'];
$query = "DELETE FROM producto where (cod_producto = '$id')";
$result = mysqli_query($conn,$query);
if($query){
    header('location:index.php');
}

?>