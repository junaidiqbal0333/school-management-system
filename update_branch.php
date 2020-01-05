<?php  
$name=$_POST['name'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="UPDATE `branch` SET `name`='$name' WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if($run == TRUE)
{
  header('location:branch_detail.php');
  exit();
}
?>
