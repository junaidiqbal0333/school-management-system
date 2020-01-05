<?php  

$name=$_POST['name'];
$father_name=$_POST['father_name'];
$email=$_POST['email'];
$class=$_POST['class'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="UPDATE `students` SET `name`='$name',`father_name`='$father_name',`email`='$email',`class`='$class',`phone`='$phone' WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if($run == TRUE)
{
  header('location:student_detail.php');
  exit();
}
?>
