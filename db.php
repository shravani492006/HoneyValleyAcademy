<?php 
  $con = mysqli_connect("localhost", "root", "", "register");
  if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>