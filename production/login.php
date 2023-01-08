<?php
require 'sqlmyadmin.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM crudoperation WHERE name = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
	
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
						<h2> Giriş </h2><br>
							<div>
								<label for="usernameemail"> Kullanıcı Adı veya Email </label>
								<input type="text" name="usernameemail" id = "usernameemail" required value="" placeholder="Email veya Kullanıcı Adı" class="form-control"> <br>
							</div>
							<div>
						  <label for="password"> Şifreniz </label>
						  <input type="password" name="password" id = "password" required value="" placeholder="Şifre" class="form-control"> <br>
							</div>
							<div>
						  <button class="btn btn-default submit" type="submit" name="submit">Login</button>
							</div>
									<br>
									<p class="change_link">Hesabın Yok Mu?
									<br>
									  <a href="login2.php" class="to_register">>> Bir Hesap Oluştur <<</a>
									  <br>
									  <a href="login3.php" class="to_register">>> Admin <<</a>
									</p>
										<div class="clearfix"></div>
								<div class="separator">
										<br>									
									<div>
										<div class="clearfix"></div>
									  <h1><i class="fa fa-glass"></i> Lezzetli Ekip!</h1>
									  <p>©2022 İnternet Programcılığı Ödevi</p>
									</div>
								</div>
						</form>
						
				
					
					
		</section>
		
	</div>
	
  </body>

</html>
