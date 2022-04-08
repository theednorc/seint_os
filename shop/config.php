<?php
$currency = 'Ks';
$db_username = 'root';
$db_password = '';
$db_name = 'seint';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

//Create connection
$conn=new mysqli($db_host,$db_username,$db_password,$db_name);
//Check connection
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

?>
