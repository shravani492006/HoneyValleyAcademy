<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_date = $_POST['product_date'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_date) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO workshop(name, date, image) VALUES('$product_name', '$product_date', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new workshop added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM workshop WHERE id = $id");
   header('location:admin_page.php');
};

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="color: #1f1ce0;">My Blog</title>
    <link rel="stylesheet" href="style1.css">
</head>
  
    


<body>
    

    <main style="width: 3000px;background-color:transparent;
    background-repeat: no-repeat;
            background-position: center;
            background-size: cover ;"
    >
      <!DOCTYPE html> 


<style>
    /* style.css*/
h1 { 
	color:white; 
} 

h3 { 
	color: blue; 
	font: 25px; 
	font-weight: 700; 
} 

.mybox1 { 
	display: none; 
} 

button { 
	padding: 10px; 
	font-size: 20px; 
	font-weight: 700; 
	color: rgb(5, 14, 5); 
	border: none; 
	border-radius: 30px; 
	background-color: rgb(182, 215, 182); 
	margin-top: 20px; 
} 

div, 
span { 
	font-size: 20px; 
}

</style><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="height=device-height, initial-scale=1.0">


    <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico" />
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
<link rel="stylesheet" media="screen and (min-width: 769px)" href="desktop.css">


    <title>home</title>

    <link rel="stylesheet" href="./styles/index.css" type="text/css" />
    <link rel="stylesheet" href="./styles/nav.css" type="text/css" />
    <link rel="stylesheet" href="./styles/top.css" type="text/css" />
    <link rel="stylesheet" href="./styles/app.css" type="text/css" />
    <link rel="stylesheet" href="./styles/main.css" type="text/css" />
    <link rel="stylesheet" href="./styles/explore.css" type="text/css" />
    <link rel="stylesheet" href="./styles/footer.css" type="text/css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body >
    <style>
      /* Mobile devices */
@media only screen and (max-width: 768px) {
  /* Styles for mobile devices */
}

/* Desktop devices */
@media only screen and (min-width: 769px) {
  /* Styles for desktop devices */
}

/* Tablet devices */
@media only screen and (min-width: 481px) and (max-width: 768px) {
  /* Styles for tablet devices */
}




.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
}

.item {
  width: 50%;
  float: left;
}

/* Responsive images */
img {
  width: 100%;
  height: auto;
}

/* Responsive videos */
video {
  width: 100%;
  height: auto;
}

/* Common breakpoints */
@media (max-width: 320px) { /* Mobile portrait */ }
@media (max-width: 480px) { /* Mobile landscape */ }
@media (max-width: 768px) { /* Tablet portrait */ }
@media (max-width: 1024px) { /* Tablet landscape */ }
@media (min-width: 1200px) { /* Desktop */ }


    </style>
    <header>
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
<body>
    <header>
        <style>
          .main.container5{
              width: 1200px;
          }
                    body {
          font-family: Arial, Helvetica, sans-serif;
        }
        
        .navbar {
          overflow: hidden;
          background-color:transparent;
           width: 100%;
    height: 60px;      /* Consistent height */
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
          font-family: inherit;
          margin: 0;
        }
        
        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }
        
        .dropdown-content {
          display: none;
          position: absolute;
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
        <!DOCTYPE html>
        <html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
          font-family: "Lato", sans-serif;
          transition: background-color .5s;
        }
        
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: #111;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }
        
        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }
        
        .sidenav a:hover {
          color: #f1f1f1;
        }
        
        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        
        #main {
          transition: margin-left .5s;
          padding: 16px;
        }
        
        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
        </style>
        </head>
        <body>
        
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="http://localhost/final%20project/logphp/phpfile/index2.php">Admin</a>
          <a href="http://localhost/final%20project/logphp/phpfile/login1.php">Student</a>
          <a href="http://localhost/final%20project/logphp/phpfile/login.php">Logout</a>

        </div>
        

        
        <script>
        
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

   
        </script>
           
        </body>
        </html> 
        
        </style>
        <nav>
                
        <div class="navbar" style="background-color: transparent;padding: 2px; font-size:10px;margin-left: 25px; " >
          <div id="main" >
            <span  style="font-size:20px;cursor:pointer; margin-top: 10px;margin-left: 10px; color: #0a0a0a;" onclick="openNav()"> Login</span>
          
          </div>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdchX4vLqLSLT-S3l4EZA-DrxZVbEXGlX_efUrUTN2TooeejQ/viewform" style="margin-left: 380px;">Admission</a>
                <a href="Achivements.html">Achievements</a>
                <a href="Blog.html">Blog</a>
  
                <a href="http://localhost/final%20project/logphp/phpfile/Workshop.php">Workshop</a>

  <a href="About Us.html">About Us</a>
  <a href="ContactUsDb.html">Contact Us</a>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
  }
  
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
  }
  
  .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .sidenav a:hover {
    color: #f1f1f1;
  }
  
  .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }
  
  #main {
    transition: margin-left .5s;
    padding: 16px;
  }
  
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  </style>
  </head>
  <body>
  
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>
  
  </div>
</body>
</html>
</nav>

    
     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<section style="padding: 40px 20px;
max-width: 1100px;
margin: 20px auto;
background-color: #fff;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new workshop</h3>
         <input type="text" placeholder="enter workshop Description" name="product_name" class="box">
         <input type="number" placeholder="enter workshop date" name="product_date" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add workshop" style="width:360px;height:70px;margin-left:150px;background-color:orange">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM workshop");
   
   ?>
</div>

</body>
</html>
</section>
<section style="padding: 40px 20px;
max-width: 1100px;
margin: 20px auto;
background-color: #fff;
box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);">
<div class="product-display">
   <table class="product-display-table">
      <thead>
      <tr>
         <th>Workshop image</th>
         <th>Workshop Description</th>
         <th>Workshop date</th>
      </tr>
      </thead>
      <?php while($row = mysqli_fetch_assoc($select)){ ?>
      <tr>
         <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
         <td><?php echo $row['name']; ?></td>
         <td><?php echo $row['date']; ?></td>
         <td>
         <td>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </td>
      </tr>
   <?php } ?>
   </table>
</div>


           
         </tr>
      <?php  ?>
      </table>
   </div>

</div>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --green:#27ae60;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid var(--black);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.btn{
   display: block;
   width: 100%;
   cursor: pointer;
   border-radius: .5rem;
   margin-top: 1rem;
   font-size: 1.7rem;
   padding:1rem 3rem;
   background: var(--green);
   color:var(--white);
   text-align: center;
}

.btn:hover{
   background: var(--black);
}

.message{
   display: block;
   background: var(--bg-color);
   padding:1.5rem 1rem;
   font-size: 2rem;
   color:var(--black);
   margin-bottom: 2rem;
   text-align: center;
}

.container{
   max-width: 1200px;
   padding:2rem;
   margin:0 auto;
}

.admin-product-form-container.centered{
   display: flex;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   
}

.admin-product-form-container form{
   max-width: 70rem;
   margin:0 auto;
   padding:2rem;
   border-radius: .5rem;
   background: var(--bg-color);
}

.admin-product-form-container form h3{
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 1rem;
   text-align: center;
   font-size: 2.5rem;
}

.admin-product-form-container form .box{
   width: 100%;
   border-radius: .5rem;
   padding:1.2rem 1.5rem;
   font-size: 1.7rem;
   margin:1rem 0;
   background: var(--white);
   text-transform: none;
}

.product-display{
   margin:2rem 0;
}

.product-display .product-display-table{
   width: 100%;
   text-align: center;
}

.product-display .product-display-table thead{
   background: var(--bg-color);
}

.product-display .product-display-table th{
   padding:1rem;
   font-size: 2rem;
}


.product-display .product-display-table td{
   padding:1rem;
   font-size: 2rem;
   border-bottom: var(--border);
}

.product-display .product-display-table .btn:first-child{
   margin-top: 0;
}

.product-display .product-display-table .btn:last-child{
   background: crimson;
}

.product-display .product-display-table .btn:last-child:hover{
   background: var(--black);
}









@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   .product-display{
      overflow-y:scroll;
   }

   .product-display .product-display-table{
      width: 80rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

}
</style>

</body>
</html>
</section>


</body>
</html>
</style>
</main>
<!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Footer Design</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
    
      <footer class="footer">
         <div class="container1">
        
           <div class="row">
             <div class="footer-col">
               <h4 style="margin-right:250px;">HoneyValley</h4>
               <ul>
                 <li><a href ="Homepage.html">Home</a></li>
                 <li><a href="ContactUsDb.html">Contact US</a></li>
                 <li><a href="About Us.html">About US</a></li>
    
               </ul>
             </div>
             <div class="footer-col">
               <h4 style="margin-right:250px;">QuickLink</h4>
               <ul>
                 <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdchX4vLqLSLT-S3l4EZA-DrxZVbEXGlX_efUrUTN2TooeejQ/viewform">Admission</a></li>
                 <li><a href="http://localhost/final%20project/logphp/phpfile/login1.php">Student</a></li>
                 <li><a href="Blog.html">Blog</a></li>
    
               </ul>
             </div>
             <div class="footer-col">
               <h4 style="margin-right:250px;">Other</h4>
               <ul>
                <li><a href="Achivements.html">Achievements</a></li>
             
                </ul>
             </div>
             <div class="footer-col">
               <h4 style="margin-right:250px;">followUs</h4>
               <div class="social-links">
                 <a href="https://www.facebook.com/profile.php?id=100065211922440&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                 <a href="https://youtube.com/@honeyvalleyactivityacademy?si=p-6gaUm6hdFAWiES"><i class="fab fa-youtube"></i></a>
                 <a href="https://www.instagram.com/info.honeyvalley?igsh=MXBsbmh1d2xxb2Nnbw=="><i class="fab fa-instagram"></i></a>
                 <a href="https://www.google.com/maps/place/Honey+Valley+Activity+Academy/@19.0259413,72.8411297,17z/data=!3m1!4b1!4m6!3m5!1s0x3be7cf77bdb62d47:0xc6a9c4d0af2a6585!8m2!3d19.0259362!4d72.8437046!16s%2Fg%2F11lp2ws720?hl=en-US&entry=ttu&g_ep=EgoyMDI0MTEwNS4wIKXMDSoASAFQAw%3D%3D"><i class="fa fa-map-marker"></i></a>
    
               </div>
             </div>
           </div>
         </div>
         <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    body{
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
    }
    *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    }
    .container2{
    max-width: 1170px;
    margin:auto;
    }
    .row{
    display: flex;
    flex-wrap: wrap;
    }
    ul{
    list-style: none;
    }
    .footer{
    background-color: #24262b;
    padding: 70px 0;
    }
    .footer-col{
    width: 25%;
    padding: 0 15px;
    }
    .footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
    }
    .footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
    }
    .footer-col ul li:not(:last-child){
    margin-bottom: 10px;
    }
    .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
    }
    .footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
    }
    .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
    }
    .footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
    }
    
    
    @media(max-width: 767px){
    .footer-col{
    width: 50%;
    margin-bottom: 30px;
    }
    }
    @media(max-width: 574px){
    .footer-col{
    width: 100%;
    }
    }
    
    
    
    
    </style>
      </footer>
    
    </body>
    </html>
</html>

    </style>
<style>        

        
        main {
            padding: 10px;
            max-width: 1200px;
            margin: 10px auto;
            background-color: transparent;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        </style>
    

