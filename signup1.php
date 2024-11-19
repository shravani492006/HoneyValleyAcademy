<?php
 session_start();
 include("db1.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $Gender=$_POST['gender'];
  $num=$_POST['number'];
  $address=$_POST['add'];
  $gmail=$_POST['mail'];
  $password=$_POST['pass'];

  if(!empty($gmail)&& !empty($password) && !is_numeric($gmail))
  {
    $query="insert into form2(Fname,lname,gender,cnum,address,email,pass) values('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";
    mysqli_query($con,$query);
    echo"<script type='text/javascript'>alert('Successfully register2')</script>";

  }
  else{
    echo"<script type='text/javascript'>alert('Please Enter Some Valid Inform2ation')</script>";

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
  <body>
    <header>
        <style>
                    body {
background-color: #8aecff;
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .navbar {
          overflow: hidden;
          background-color: lightblue;
           width: 100%;
    height: 60px;      /* Consistent height */
    background-color: #333;
    color: white;
    display: flex;
    align-items: center;
    padding: 0 20px;
    box-sizing: border-box;
        }
        
        .navbar a {
          float: left;
          font-size: 16px;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        .dropdown {
          float: left;
          overflow: hidden;
        }
        
        .dropdown .dropbtn {
          font-size: 16px;  
          border: none;
          outline: none;
          color: black;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }
        
        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }
        
        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }
        
        .dropdown-content a:hover {
          background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
        </head>

        </style>

</header>
<body style="width:100%;height:100%">
<img src="footerbg.jpeg" style=" position: absolute;
  top:0;
  width: 100%;
  height: 710px;
  min-height: 42rem;
  z-index: -1;
 ">    <div class="signup" style="margin-left:400px;height:650px;width:350px; margin-top:1px">
      <h1>Sign Up</h1>
      <form method="post">
        <label>First Name</label>
        <input type="text" name="fname" required>
        <label>Last Name</label>
        <input type="text" name="lname" required>
        <label>Gender </label>
        <input type="text" name="gender" required>
        <label>Contact</label>
        <input type="tel" name="number" required>
        <label>Address</label>
        <input type="text" name="add" required>
        <label>Email</label>
        <input type="email" name="mail" required>
        <label>Password</label>
        <input type="password" name="pass" required>
        <input type="submit" name=""  value="Submit">
        <p>Already have an account?<a href="login1.php">Login Here</a></p>
      </form>
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
    </div>
  </body>
</html>