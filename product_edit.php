<?php
include 'connection.php';
session_start();
$pid= $_GET['id'];
$data= mysqli_query($con,"select * from category_tb");
$data2= mysqli_query($con,"select * from product_tb where product_id='$pid'");
$data3= mysqli_fetch_assoc($data2);

 
if(isset($_POST['sub'])){

   $pname= $_POST['pname'];
   $price= $_POST['price'];
   $dtls= $_POST['det'];
//    $pic= $_FILES['img']['name'];
   $stu= $_SESSION['log'];
//    $cat= $_POST['category'];
  
//    if($pic!=""){
//     $filearray= pathinfo($_FILES['img']['name']);
//     $file1= rand();
//     $file_ext= $filearray['extension'];
//     $filenew= $file1.".".$file_ext;
//     move_uploaded_file($_FILES['img']['tmp_name'],"images/".$filenew);
//   }

   mysqli_query($con,"update product_tb set product_name='$pname',price= '$price',details='$dtls' where product_id='$pid'");
   echo "<script>alert('updated successfully')</script>";
   echo "<script>window.location.href='student_productview.php'</script>";
 
}


?>


<!DOCTYPE html>




<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Product entry</title>

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
        <div class="col-md-6">
          <div class="bg-white p-4">
            <h3>Product Entry</h3>
         
            <form method="post" enctype="multipart/form-data">
            
               
              <input type="text" id="name" name="pname" value="<?php echo $data3['product_name'] ?>" class="form-control mb-4 px-0" placeholder="Product name">
              <input type="text" id="name" name="price" value="<?php echo $data3['price'] ?>" class="form-control mb-4 px-0" placeholder="Price">
              
              <input type="text" id="name" name="det" value="<?php echo $data3['details'] ?>" class="form-control mb-4 px-0" placeholder="Details">
              
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