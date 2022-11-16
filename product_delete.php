<?php
include 'connection.php';
$id= $_GET['id'];
mysqli_query($con,"delete from product_tb where product_id='$id'");

 echo "<script>alert('Deleted  successfully')</script>";
echo "<script>window.location.href='student_productview.php'</script>";


?>