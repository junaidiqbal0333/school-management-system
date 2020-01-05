<?php  

$class_name=$_POST['class_name'];
$department=$_POST['department'];

$id=$_POST['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="UPDATE `classes` SET `class_name`='$class_name',`department`='$department' WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if($run == TRUE)
{
  header('location:classes_detail.php');
  exit();
}
?>
