<?php
  include 'config.php';

  $catename = $_POST['catename'];
 
  $sql = "INSERT INTO category (catename) 
  VALUES ('$catename')";

  $mysqli->query($sql);

  header("location: categorylist.php");
?>

