<?php
require 'sqlmyadmin.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$soyad=$_POST['soyad'];
	$yas=$_POST['yas'];
	$meslek=$_POST['meslek'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM crudoperation WHERE name = '$name' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO crudoperation VALUES('','$name','$soyad','$yas','$meslek','$email','$mobile','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lezzetli Site Kayıt</title>
	<!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
	<body class="login">
	<div class="login_wrapper">
		<section class="login_content">
					<form class="" action="" method="post" autocomplete="off">
					<h2> Kayıt Formu </h2><br>
					  <label for="name">Adınız : </label>
					  <input type="text" name="name" id = "name" required value=""> 
					  
					  <label for="soyad">Soyadınız : </label>
					  <input type="text" name="soyad" id = "soyad" required value=""> 
					  
					  <label for="yas">Yaşınız : </label>
					  <input type="text" name="yas" id = "yas" required value=""> 
					  
					  <label for="meslek">Meslek : </label>
					  <input type="text" name="meslek" id = "meslek" required value=""> 
					  
					  <label for="email">email : </label>
					  <input type="email" name="email" id = "email" required value=""> 
					  
					  <label for="mobile">Telefon Numaranız : </label>
					  <input type="text" name="mobile" id = "mobile" required value=""> 
					  
					  <label for="password">Şifre : </label>
					  <input type="password" name="password" id = "password" required value=""> 
					  
					  <label for="confirmpassword">Şifre Tekrar : </label>
					  <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> 
					  <div>
					  
					  <button class="btn btn-default submit" type="submit" name="submit">Kayıt</button>
					  </div>
					  	<br>
									<p class="change_link">Hesabın Var Mı?
									<br>
									  <a href="login.php" class="to_register">>> Hesabınız ile Giriş Yapın, <<</a>
									</p>
										<div class="clearfix"></div>
								<div class="separator">
										<br>									
									<div>
										<div class="clearfix"></div>
									  <h1><i class="fa fa-paw"></i> Lezzetli Ekip!</h1>
									  <p>©2022 İnternet Programcılığı Ödevi</p>
									</div>
								</div>
					</form>
					
				
			</form>
						
				
					
					
		</section>
		
	</div>
	
  </body>
</html>