<?php 
$serverName="localhost";
$userName="root";
$passWord="";
$Db ="Demo";

$conn =mysqli_connect($serverName,$userName,$passWord,$Db);
if($conn){
	echo "<br>Connected Sucessfully";
}
else{
	die("Not connected");
}

 ?>