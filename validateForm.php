<?php
  $alert = '';
  if(!empty($_POST)){
    if(empty($_POST['username']) || empty($_POST['password'])){
      return;
    } else {
      include('db.php');

      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = mysqli_query($conection,"SELECT * FROM users WHERE username='$username' and password='$password'")or die(mysqli_error($conection));
      $result = mysqli_num_rows($query);

      if($result > 0){
        $data = mysqli_fetch_array($query);
        session_start();

        $_SESSION['active'] = true;
        $_SESSION['idAdmin'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header('location:home.php');
      } else {
        header('location:index.php');
        $alert = "Incorrect account/password, please note that they are case sensitive.";
      }
    }
  }
?>
