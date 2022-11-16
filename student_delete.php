<?php
include 'connection.php';
$id= $_GET['id'];
mysqli_query($con,"delete from student_registration  where login_id='$id'");
mysqli_query($con,"delete from login_tb  where login_id='$id'");
 echo "<script>alert('Deleted student successfully')</script>";
echo "<script>window.location.href='students_view.php'</script>";


?>