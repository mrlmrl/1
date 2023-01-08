<?php
require 'sqlmyadmin.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
	require 'header.php';
	require 'sidebar.php';
	require 'sidebar2.php';
	require 'dosya.php';
	require 'footer.php';
}
else{
  header("Location: login.php");
}


?>

