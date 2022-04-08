<?php
  include('config.php'); 

  $result = $mysqli->query('SELECT adminname,password FROM admin');

  if($result){
  while($obj = $result->fetch_object()){
  
  $username = $obj->adminname;
  $password = $obj->password;

}
  session_start();
  if(!isset($_SESSION['auth'])) {
    header("location: index.php");
    exit();
  }
?>