<?php
$name=$_POST['name'];
$subject=$_POST['subject'];
$qualification=$_POST['qualification'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="INSERT INTO teacher(name, subject, qualification) VALUES ('$name','$subject','$qualification')";
$run=mysqli_query($con,$qry);
if($run==true){
	header('location:teacher_detail.php');
  exit();
}
else{
	echo "failed";
}

?>