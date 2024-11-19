<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="width:100%;height:100%">
<img src="footerbg.jpeg" style=" position: absolute;
  top:0;
  width: 100%;
  height: 700px;
  min-height: 42rem;
  z-index: -1;
 ">
    <div class="container" id="signup" style="display:none; ">
      <form method="post" action="register.php" style="width:460px;padding:50px;
    height: 550px;
    margin: auto;
    background: white;
    border-radius: 3px;" >
          <h1 class="form-title">Register</h1>

        <div class="input-group">
        <label for="fname">First Name</label>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        </div>
        <div class="input-group">
        <label for="lName">Last Name</label>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        </div>
        <div class="input-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp" style="margin-left:25px;height:50px">
      </form>

    </div>

    <div class="container" id="signIn">



        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton" style=" background-color:white;width:600px;height:100px;margin-left:300px;margin-top:200px;font-size:34px;">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
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
