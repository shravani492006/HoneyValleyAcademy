<?php
 session_start();
 include("db.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
{
  $gmail=$_POST['mail'];
  $password=$_POST['pass'];
  if(!empty($gmail)&& !empty($password) && !is_numeric($gmail))
{
  $query="select * from  form where email='$gmail' limit 1";
  $result=mysqli_query($con,$query);
  if($result)
  {
    if($result && mysqli_num_rows($result)>0)
    {
      $user_data=mysqli_fetch_assoc($result);
      if($user_data['pass']==$password)
      {
        header("location:Homepage.html");
        die;

      }
    }
  }
    echo"<script type='text/javascript'>alert('Wrong Username Or Password')</script>";

}
else{
  echo"<script type='text/javascript'>alert(' Wrong Username Or Password')</script>";

}
}
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,intial-scale=1">
    <title>SignUp</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="width:100%;height:100%">
<img src="footerbg.jpeg" style=" position: absolute;
  top:0;
  width: 100%;
  height: 100%;
  min-height: 42rem;
  z-index: -1;
 ">
    <div class="login" style="margin-top:150px;">
        <h1>Login </h1>
        <form method="post">
          <label>Email</label>
          <input type="email" name="mail" required>
          <label>Password</label>
          <input type="password" name="pass" required>
          <input type="submit" name=""  value="Submit">
        </form>
<p>Not have an account?<a href="signup.php">Sign Up Here</a></p>
     <style> 
      body{

background-color: #8aceff;
    width: 100%;
    height: 100vh;
    font-family: sans-serif;
justify-content: center;      /* Center horizontally */
align-items: center;          /* Center vertically */
margin: 0;
}
.signup{
    width: 360px;
    height: 650px;
    margin: auto;
    background: white;
    border-radius: 3px;
}
.login{
    width: 360px;
    height: 320px;
    margin: auto;
    background: white;
    border-radius: 3px;
    

}
h1{
    text-align: center;
}
h4{
    text-align: center;
    padding-top: 15px;
}
form{
    width: 300px;
    margin-left: 20px;
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;
}
input[type="submit"]{
    width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #ff7200;
    color: white;
    font-size: 18px;
    cursor: pointer;
}
input[type="submit"]:hover{
    color: white;
    background: rgb(13,211,247);

}
p{
    text-align: center;
    padding-top: 20px;
    font-size: 15px;

}
     </style>
</body>
      
  </html>