<?php
include 'connection.php';
 
if(isset($_POST['sub'])){

   $name= $_POST['name'];
   $mob= $_POST['mob'];
   $email= $_POST['em'];
   $col= $_POST['col'];
   $usr= $_POST['usr'];
   $pass= $_POST['pass'];

   mysqli_query($con,"insert into login_tb(username,password,type)value('$usr','$pass','student')");
   $log= mysqli_insert_id($con);
   mysqli_query($con,"insert into student_registration(login_id,name,mobile,email,college)value('$log','$name','$mob','$email','$col')");
}


?>


<!DOCTYPE html>



<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Registration</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- venobox css -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <!-- card slider -->
  <link rel="stylesheet" href="plugins/card-slider/css/style.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- page-title -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="col-md-6">
          <div class="bg-white p-4">
            <h3>Register</h3>
         
            <form method="post" >
              <table>
               
              <input type="text" id="name" name="name" class="form-control mb-4 px-0" placeholder="Full name">
              <input type="text" id="name" name="mob" class="form-control mb-4 px-0" placeholder="Mobile">
              <input type="email" id="name" name="em" class="form-control mb-4 px-0" placeholder="Email address">
              <input type="text" id="name" name="col" class="form-control mb-4 px-0" placeholder="College">
              <input type="text" id="name" name="usr" class="form-control mb-4 px-0" placeholder="Username">
              <input type="password" id="name" name="pass" class="form-control mb-4 px-0" placeholder="Password">
             
              <button class="btn btn-primary" name="sub" type="submit">Submit</button>
          
              
              
            </form>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->


<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- shuffle -->
<script src="plugins/shuffle/shuffle.min.js"></script>
<!-- apear js -->
<script src="plugins/counto/apear.js"></script>
<!-- counter -->
<script src="plugins/counto/counTo.js"></script>
<!-- card slider -->
<script src="plugins/card-slider/js/card-slider-min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>