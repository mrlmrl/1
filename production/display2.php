<?php
require 'header.php';
// require 'sqlmyadmin.php';


?>
<body>
<div class="container">
			<button class="btn btn-primary my-5 "><a href="user.php" class="text-light">Add User</a> </button>

				<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
	  <th scope="col">Kullanıcıadı</th>
	  <th scope="col">Kullanıcısoyadı</th>
	  <th scope="col">Meslek</th>
	  <th scope="col">Yaş</th>
    </tr>
  </thead>
  <tbody>
 <?php

$sql="Select * from tb_user";
$result=mysqli_query($conn,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$username=$row['username'];
		$email=$row['email'];
		$password=$row['password'];
		$kullaniciadi=$row['kullaniciadi'];
		$kullanicisoyadi=$row['kullanicisoyadi'];
		$meslek=$row['meslek'];
		$yas=$row['yas'];
		echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$username.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
	  <td>'.$kullaniciadi.'</td>
	  <td>'.$kullanicisoyadi.'</td>
	  <td>'.$meslek.'</td>
	  <td>'.$yas.'</td>
	  <td>
	<button class="btn btn-primary"><a href="update2.php?updateid2='.$id.'" class="text-light">Update</a></button>
	<button class="btn btn-danger"><a href="delete2.php?deleteid='.$id.'" class="text-light">Delete</a></button>
	</td>
	  
	  
    </tr>';
	}
	
}



?> 
  
	
	
			</tbody>
				</table>

			
					</div>



</body>

</html>