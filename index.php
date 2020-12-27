<!DOCTYPE html>
<html>
<head>
	<title>Php_MySql_Learning_Dump</title>
</head>
<body>
<?php 
echo "Hello this is my first commit!";

 ?>
<?php 
$serverName="localhost";
$userName="root";
$passWord="";
$Db ="Demo";

$conn =mysqli_connect($serverName,$userName,$passWord,$Db);
if($conn){
	echo "Connected Sucessfully";
}
else{
	die("Not connected");
}

 ?>



</body>
</html>