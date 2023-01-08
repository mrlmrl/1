<?php
require 'sqlmyadmin.php';
$id=$_GET['updateid2'];
$sql="Select * from tb_user where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];
$kullaniciadi=$row['kullaniciadi'];
$kullanicisoyadi=$row['kullanicisoyadi'];
$meslek=$row['meslek'];
$yas=$row['yas'];

if(isset($_POST['submit'])){
		$username=$row['username'];
		$email=$row['email'];
		$password=$row['password'];
		$kullaniciadi=$row['kullaniciadi'];
		$kullanicisoyadi=$row['kullanicisoyadi'];
		$meslek=$row['meslek'];
		$yas=$row['yas'];
	
	$sql="update tb_user set id='$id',username='$username',email='$email',password='$password',kullaniciadi='$kullaniciadi',kullanicisoyadi='$kullanicisoyadi',meslek='$meslek',yas='$yas' where id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		 echo "updated seccessfully";
		// header('location:indexx.php');
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
				<input type="text" class="form-control"  placeholder="enter your name" name="username" autocomplete="off" value=<?php echo $username; ?> >
			</div>
			
			<div class="form-group">
				<label>email</label>
				<input type="email" class="form-control"  placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
			</div>
			
			<div class="form-group">
				<label>password</label>
				<input type="text" class="form-control"  placeholder="enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
			</div>
			
			<div class="form-group">
				<label>kullaniciadi</label>
				<input type="text" class="form-control"  placeholder="enter your kullaniciadi" name="kullaniciadi" autocomplete="off" value=<?php echo $kullaniciadi; ?>>
			</div>
			
			<div class="form-group">
				<label>kullanicisoyadi</label>
				<input type="text" class="form-control"  placeholder="enter your kullanicisoyadi" name="kullanicisoyadi" autocomplete="off" value=<?php echo $kullanicisoyadi; ?>>
			</div>
			
			<div class="form-group">
				<label>meslek</label>
				<input type="text" class="form-control"  placeholder="enter your meslek" name="meslek" autocomplete="off" value=<?php echo $meslek; ?>>
			</div>
			
			<div class="form-group">
				<label>yas</label>
				<input type="text" class="form-control"  placeholder="enter your yas" name="yas" autocomplete="off" value=<?php echo $yas; ?>>
			</div>
			
 
   <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
		</div>
   

	</body>
</html>