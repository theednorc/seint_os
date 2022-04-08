<?php
  include 'config.php';

  $brandname = $_POST['brandname'];
 
  $sql = "INSERT INTO brand (brandname) 
  VALUES ('$brandname')";

  $mysqli->query($sql);

  header("location: brandlist.php");
?>

