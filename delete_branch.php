<?php 
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="DELETE FROM `branch` WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if ($run == TRUE) {
	header('location:branch_detail.php?deleted');
	exit();
}

 ?>