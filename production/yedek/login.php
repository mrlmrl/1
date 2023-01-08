<?php 
require 'sqlmyadmin.php';

if(isset($_POST["submit"])){
  $kullanici_adi = $_POST["kullanici_adi"];
  $kullanici_email = $_POST["kullanici_email"];
  $kullanici_sifre = $_POST["kullanici_sifre"];
  $duplicate = mysqli_query($conn, "SELECT * FROM veri_tabani WHERE $kullanici_adi = '$kullanici_adi' OR $kullanici_email = '$kullanici_email'");
  
      $query = "INSERT INTO tb_user VALUES('','$kullanici_adi','$kullanici_email','$kullanici_sifre')";
      mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

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
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.php">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" name="kullanici_adi" id="kullanici_adi" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" name="kullanici_email" id="kullanici_email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="kullanici_sifre" id="kullanici_sifre class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" type="submit" name="submit" href="index.php">Submit</a>
              </div>

<h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="kullanici_adi">kullanici_adi : </label>
      <input type="kullanici_adi" name="kullanici_adi" id = "kullanici_adi" required value=""> <br>
      
      <label for="kullanici_email">kullanici_email : </label>
      <input type="kullanici_email" name="kullanici_email" id = "kullanici_email" required value=""> <br>
	  
      <label for="kullanici_sifre">kullanici_sifre : </label>
      <input type="kullanici_sifre name="kullanici_sifre" id = "kullanici_sifre" required value=""> <br>
	  
      
      <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Login</a>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>