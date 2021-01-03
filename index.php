<!DOCTYPE html>
<html>
<head>
	<title>Php_MySql_Learning_Dump</title>
	<style type="text/css">
		.dbConn{
			background-color: yellow;		
		}
	</style>
</head>
<body>
<?php
echo "<br>Hello this is my first commit!";

 ?>
 <div class="dbConn">
<?php require 'conn.php'; ?>
</div>
<form action="" method="POST">
	<table>
<!-- 		<tr><td>Id</td><td>
			<input type="text" name="E_id" required>
		</td></tr> -->
		<tr><td>Name</td><td>
			<input type="text" name="E_name" required>
		</td></tr>
		<tr><td>Email</td><td>
			<input type="text" name="E_email" required>
		</td></tr>
		<tr><td>Phone</td><td>
			<input type="text" name="E_phone" required>
		</td></tr>
		<tr><td>Submit</td><td>
			<input type="Submit" name="E_add" required>
		</td></tr>
	</table>
</form>
<?php 
session_start();



if(isset($_POST['E_add'])){
	// $E_id = $_POST['E_id'];
	$E_name = $_POST['E_name'];
	$E_email = $_POST['E_email'];
	$E_phone = $_POST['E_phone'];
	
	$sql ="INSERT INTO test (E_name,E_email,E_phone) VALUES ('$E_name','$E_email','$E_phone')";




if(mysqli_query($conn,$sql)){
	echo "sucess";
}
else{
	echo mysqli_error($conn);
}

header("location: index.php");
exit;
}


  ?>




</body>
</html>