<?php
  include 'config.php';

  $id = $_GET['id'];
  $sql = "DELETE FROM category WHERE cateid = $id";
  $mysqli->query($sql);

  header("location: categorylist.php");
?>
