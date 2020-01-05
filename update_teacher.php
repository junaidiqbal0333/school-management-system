<?php  

$name=$_POST['name'];
$subject=$_POST['subject'];
$qualification=$_POST['qualification'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="UPDATE `teacher` SET `name`='$name',`subject`='$subject',`qualification`='$qualification' WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if($run == TRUE)
{
  header('location:teacher_detail.php');
  exit();
}
else
{
	echo "sorry";
	exit();
}
?>
