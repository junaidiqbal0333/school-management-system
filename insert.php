<?php 
$name=$_POST['name'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phoneno'];

$con=mysqli_connect('localhost','root','','school_ms');
$sql="INSERT INTO students (name,father_name,email,phone) VALUES ('$name','$fname','$email','$phone')";
$run=mysqli_query($con,$sql);
if($run==TRUE)
{
	echo "successfully";
}
else {
	echo "Error!";
}
?>