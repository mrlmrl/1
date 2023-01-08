<?php
require 'sqlmyadmin.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	
	$sql="delete from crudoperation where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		// echo "deleted seccessfull";
		header('location:indexx.php');
	}else{
		die(mysqli_error($conn));
	}
}
?>