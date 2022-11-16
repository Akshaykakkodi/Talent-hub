<?php
include 'connection.php';
$ID= $_GET['id'];
mysqli_query($con,"update student_registration set status='1' where login_id='$ID'");
header('location:students_view.php');

?>