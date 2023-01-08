<?php
require 'sqlmyadmin.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$soyad=$_POST['soyad'];
	$yas=$_POST['yas'];
	$meslek=$_POST['meslek'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	
	$sql="insert into crudoperation (name,soyad,yas,meslek,email,mobile,password) values('$name','$soyad','$yas','$meslek','$email','$mobile','$password')";
	$result=mysqli_query($conn,$sql);
	if($result){
	//	echo "Data inserted seccessfully";
		header('location:indexx.php');
	}else{
		die(mysqli_error($conn));
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Operation!</title>
  </head>
  
	<body>
    
		<div class="container my-5">
		<form method="post">
			<div class="form-group">
				<label>name</label>
				<input type="text" class="form-control"  placeholder="enter your name" name="name" autocomplete="off">
			</div>
			<div class="form-group">
				<label>soyad</label>
				<input type="text" class="form-control"  placeholder="enter your surname" name="soyad" autocomplete="off">
			</div>
			<div class="form-group">
				<label>Birth Day Year</label>
				<input type="text" class="form-control"  placeholder="enter your birth day" name="yas" autocomplete="off">
			</div>
			<div class="form-group">
				<label>Profession</label>
				<input type="text" class="form-control"  placeholder="enter your profession" name="meslek" autocomplete="off">
			</div>
			<div class="form-group">
				<label>email</label>
				<input type="email" class="form-control"  placeholder="enter your email" name="email" autocomplete="off">
			</div>
			<div class="form-group">
				<label>mobile</label>
				<input type="text" class="form-control"  placeholder="enter your mobile" name="mobile" autocomplete="off">
			</div>
			<div class="form-group">
				<label>password</label>
				<input type="text" class="form-control"  placeholder="enter your password" name="password" autocomplete="off">
			</div>
 
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
		</div>
   

	</body>
</html>