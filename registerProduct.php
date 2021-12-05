<?php 
  include('db.php');

  $product = $_POST['product'];
  $mark = $_POST['mark'];
  $model = $_POST['model'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];
  if($_POST['stock'] <= 0){
    $state = 'Not Available';
  } else {
    $state = 'Available';
  }

  $insertProduct = "INSERT INTO products(product,mark,model,price,stock,state) 
    VALUES ('$product','$mark','$model','$price','$stock', '$state')";

  $result = mysqli_query($conection, $insertProduct);

  //Revisar
  if(!$result){
    echo 'Error when registering product.';
  } else {
    header('location:home.php');
  }
  mysqli_close($conection);
?>