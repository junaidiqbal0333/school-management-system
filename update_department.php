<?php  

$department_name=$_POST['department_name'];
$mail_alias=$_POST['mail|_alias'];
$department_head=$_POST['department_head'];
$id=$_POST['id'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="UPDATE `department` SET `department_name`='$department_name',`mail_alias`='$mail_alias',`department_head`='$department_head' WHERE `id`='$id'";
$run=mysqli_query($con,$qry);
if($run == TRUE)
{
  header('location:department_detail.php');
  exit();
}
?>
