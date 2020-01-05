<?php
$department_name=$_POST['department_name'];
$mail_alias=$_POST['mail_alias'];
$department_head=$_POST['department_head'];
$con=mysqli_connect('localhost','root','','school_ms');
$qry="INSERT INTO department(department_name, mail_alias,department_head) VALUES ('$department_name','$mail_alias','$department_head')";
$run=mysqli_query($con,$qry);
if($run==TRUE){
	header('location:department_detail.php');
               }
else{
	echo "failed";
}








?>