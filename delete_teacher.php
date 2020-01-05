<?php 
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="DELETE FROM `teacher` WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if ($run == TRUE) {
	header('location:teacher_detail.php?deleted');
	exit();
}

 ?>