<?php

 include ('config/db.php');

 if(!empty($_POST['producto'])){

  $producto = $_POST['producto'];
  
  $query = mysqli_query($conn,"insert into productos(producto) values('$producto')");
  
  if($query){

    header('location: index.php');
  }
}
?>


