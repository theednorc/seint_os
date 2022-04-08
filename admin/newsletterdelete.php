<?php
  include 'config.php';

  $id = $_GET['id'];
  $sql = "DELETE FROM newsletter WHERE newsid = $id";
  $mysqli->query($sql);

  header("location: newsletterslist.php");
?>
