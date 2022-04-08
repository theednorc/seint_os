<?php
  include 'config.php';

  $id = $_GET['id'];
  $sql = "DELETE FROM brand WHERE brandid = $id";
  $mysqli->query($sql);

  header("location: brandlist.php");
?>
