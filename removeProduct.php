<?php 
  include ('db.php');

  $id = $_GET['id'];
  $delete = "DELETE FROM products WHERE id='$id'";

  $result = mysqli_query($conection, $delete);

  if($result){
    header('location:home.php');
  } else {
    echo "<script>alert('The product could not be removed.'); window.history.go(-1);</script>";
  }
?>