<?php
  include 'config.php';

  $id = $_GET['id'];
  $sql = "DELETE FROM gen WHERE genid = $id";
  $mysqli->query($sql);

  header("location: genrelist.php");
?>
