<?php
session_start();
$user = 'root';
$pass = '';
$conn = 'internet_programciligi_proje';
$conn = new mysqli ('localhost', $user, $pass, $conn) or die("baglantı kurulamadı");
echo"baglantı basarılı";
?>