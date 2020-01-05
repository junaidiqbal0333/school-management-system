<?php

$name=$_POST['name'];
$father_name=$_POST['father_name'];
$email=$_POST['email'];
$class=$_POST['class'];
$phone=$_POST['phone'];



$con = mysqli_connect('localhost','root','','school_ms');


$query="INSERT INTO students(name,father_name,email,class,phone) VALUES('$name','$father_name','$email','$class','$phone')";
$run=mysqli_query($con,$query);
if($run == TRUE)
{
	header('location:student_detail.php');
	exit();
}


?>