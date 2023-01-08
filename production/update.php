<?php
require 'sqlmyadmin.php';
$id=$_GET['updateid'];
$sql="Select * from crudoperation where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$soyad=$row['soyad'];
$yas=$row['yas'];
$meslek=$row['meslek'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$soyad=$_POST['soyad'];
	$yas=$_POST['yas'];
	$meslek=$_POST['meslek'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	
	$sql="update crudoperation set id='$id',name='$name',soyad='$soyad',yas='$yas',meslek='$meslek',email='$email',mobile='$mobile',password='$password' where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		// echo "updated seccessfully";
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
				<input type="text" class="form-control"  placeholder="enter your name" name="name" autocomplete="off" value=<?php echo $name; ?> >
			</div>
			<div class="form-group">
				<label>surname</label>
				<input type="text" class="form-control"  placeholder="enter your surname" name="soyad" autocomplete="off" value=<?php echo $soyad; ?> >
			</div>
			<div class="form-group">
				<label>Old</label>
				<input type="text" class="form-control"  placeholder="enter your old" name="yas" autocomplete="off" value=<?php echo $yas; ?> >
			</div>
			<div class="form-group">
				<label>Profession</label>
				<input type="text" class="form-control"  placeholder="enter your profession" name="meslek" autocomplete="off" value=<?php echo $meslek; ?> >
			</div>
			<div class="form-group">
				<label>email</label>
				<input type="email" class="form-control"  placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
			</div>
			<div class="form-group">
				<label>mobile</label>
				<input type="text" class="form-control"  placeholder="enter your mobile" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
			</div>
			<div class="form-group">
				<label>password</label>
				<input type="text" class="form-control"  placeholder="enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
			</div>
 
   <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
		</div>
   

	</body>
</html>