<?php  
$section_name=$_POST['section_name'];
$section_class=$_POST['section_class'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="UPDATE `section` SET `section_name`='$section_name',`section_class`='$section_class' WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if($run == TRUE)
{
  header('location:section_detail.php');
  exit();
}
?>
