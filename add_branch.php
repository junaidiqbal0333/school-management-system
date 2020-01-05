<?php

$name=$_POST['name'];
$con=mysqli_connect('localhost','root','','school_ms');
$query="INSERT INTO branch(name) VALUES ('$name')";
$run=mysqli_query($con,$query);
if ($run == TRUE) {
	header('location:branch_detail.php');
}
else
{
	echo " Sorry";
}

?>
