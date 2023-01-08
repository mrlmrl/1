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
      <th scope="col">Name</th>
	  <th scope="col">Surname</th>
	  <th scope="col">Old</th>
	  <th scope="col">Profession</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
	  <th scope="col">Password</th>
	  <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
 <?php

$sql="Select * from crudoperation";
$result=mysqli_query($conn,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$name=$row['name'];
		$soyad=$row['soyad'];
		$yas=$row['yas'];
		$meslek=$row['meslek'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$password=$row['password'];
		echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
	  <td>'.$soyad.'</td>
	  <td>'.$yas.'</td>
	  <td>'.$meslek.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
	  <td>'.$password.'</td>
	  
	  <td>
	<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
	<button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
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