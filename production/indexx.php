<?php
require 'sqlmyadmin.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user2 WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
	require 'header.php';
	require 'sidebar.php';
	require 'sidebar3.php';
	require 'adminindex.php';
	require 'footer.php';
}
else{
  header("Location: login.php");
}


?>

