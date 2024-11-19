<?php 
  $con = mysqli_connect("localhost", "root", "", "register2");
  if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>