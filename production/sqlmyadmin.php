<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "internet_programciligi_proje");
if(!$conn){
		die(mysqli_error($conn));
		}
?>