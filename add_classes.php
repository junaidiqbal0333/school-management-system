<?php
$class_name=$_POST['class_name'];
$department=$_POST['department'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="INSERT INTO `classes`(class_name,department) VALUES ('$class_name','$department')";
$run=mysqli_query($con,$qry);
if($run==TRUE){

header( "Location:classes_detail.php " );
exit ;
}
else
{
	echo "failed";
}

?>