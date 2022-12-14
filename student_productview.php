<?php
include 'connection.php';
session_start();
$data2= $_SESSION['log'];
$data= mysqli_query($con,"select * from product_tb where login_id='$data2' ");


?>


<!DOCTYPE html>



<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Products</title>

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
  

<?php
include 'student_header.php';
?>

<!-- page-title -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">Products</h1>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->

<!-- service -->
<section class="section">
  <div class="container">
    <div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
          <th scope="col">SL NO</th>
            <th scope="col">Product ID</th>
            <th scope="col">Product name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Details</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            <th scope="col">Status</th>

            
          </tr>
        </thead>
        <tbody>
        <?php
        $count=0;
          while($row= mysqli_fetch_assoc($data)){
              $count++;
          ?>
          <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row['product_id'] ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><?php echo $row['category'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['details'] ?></td>
            <td><img src="images/<?php echo $row['image'] ?>" height="100" width="100" alt=""></td>
            <td><a href="product_edit.php?id=<?php echo $row['product_id'] ?>">Edit</a></td>
            <td><a href="product_delete.php?id=<?php echo $row['product_id'] ?>">Delete</a></td>
            <?php
            if($row['status']==0){ ?>
            <td>Pending</td>
              <?php } else { ?>
                <td>Approved</td>
                <?php } ?>
            
            
              
           
          </tr>
         <?php
          }
         ?>
        </tbody>
      </table>
     
    </div>
  </div>
</section>
<!-- /service -->


<!-- footer -->
<footer class="bg-secondary position-relative">
  <img src="images/backgrounds/map.png" class="img-fluid overlay-image" alt="">
  <div class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 col-6">
          
        </div>
        <div class="col-md-3 col-6">
          
        </div>
        <div class="col-md-6">
          
        </div>
      </div>
    </div>
  </div>
  <div class="pb-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-left">
          <p class="text-light mb-0">Copyright &copy; 2019 a theme by <a class="text-gradient-primary" href="https://themefisher.com">themefisher.com</a>
          </p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline text-md-right text-center">
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-instagram"></i></a></li>
            <li class="list-inline-item"><a class="d-block p-3 text-white" href="#"><i class="ti-github"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

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