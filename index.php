<?php
session_start();
include 'connection.php';
if (isset($_POST['login'])){
 $usr = $_POST['usr'];
 $pass= $_POST['pass'];

 $data= mysqli_query($con,"select * from login_tb where username='$usr' and password='$pass'");

 if(mysqli_num_rows($data)>0){
 $data1 = mysqli_fetch_assoc($data);
 $_SESSION['log']= $data1['login_id'];
 $_SESSION['type']= $data1['type'];

 if($data1['type']=="admin"){
    header('location:admin_home.php');
 }else if($data1['type']=="student"){
    header('location:student_home.php');
 }else if($data1['type']=="public"){
    header('location:user_home.php');
 }
}
else{

    echo "<script>alert('Wrong details entered')</script>";
  }
 

}

 





?>




<!DOCTYPE html>



<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Login</title>

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
    <!-- <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Egen"></a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create Account</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="student_registration.php">Student Registration</a>
            <a class="dropdown-item" href="user_registration.php">Users Registration</a>
           
          </div>
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
      <h1 class="display-1 text-white font-weight-bold font-primary">Talent Hub</h1>
        <div class="col-md-6">
          <div class="bg-white p-4">
            <h3>Login in</h3>
         
            <form method="post">
              <table>
                <tr>
                  <td>username</td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control mb-4 px-0" name="usr"></td>
                
                </tr>
                <tr>
                  <td>Password</td>
                  </tr>
                <tr>
                  <td><input type="password" class="form-control mb-4 px-0" name="pass"></td>
                </tr>
              </table>
           
            
              
              <button class="btn btn-primary" type="submit" name="login">Login in</button>
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