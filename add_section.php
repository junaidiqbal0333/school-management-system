<?php
$section_name=$_POST['section_name'];
$section_class=$_POST['section_class'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="INSERT INTO section(section_name,section_class) VALUES('$section_name','$section_class')";
$run=mysqli_query($con,$qry);
if($run=true)
{
	header('location:section_detail.php');
}
else
{
	echo "failed";
}















?>