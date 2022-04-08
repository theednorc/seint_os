<?php
  include 'config.php';
  $id=$_POST['bid'];
  
  $brandname = $_POST['brandname'];

  $sql = "UPDATE brand SET brandname='$brandname' WHERE brandid = $id";
  $mysqli->query($sql);

  header("location: brandlist.php");
?>

