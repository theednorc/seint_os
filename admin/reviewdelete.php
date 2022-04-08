<?php
  include 'config.php';

  $id = $_GET['id'];
  $sql = "DELETE FROM review WHERE revid = $id";
  $mysqli->query($sql);

  header("location: reviewlist.php");
?>
