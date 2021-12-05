<?php
  $user = "root";
  $pass = "";
  $server = "localhost";
  $db = "tablero_control";

  $conection = mysqli_connect($server,$user,$pass,$db) or die ("Error connecting to database.");
?>