<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'rentalrides';
$con;

try{
	$con = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_connect_errno());
	
}catch(Exception $e){
	echo $e->getMessage();
}
?>