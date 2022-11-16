<?php
include 'connection.php';
$ID= $_GET['id'];
mysqli_query($con,"update product_tb set status='1' where product_id='$ID'");
header('location:admin_product.php');

?>