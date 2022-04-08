<?php
  include 'config.php';

  $id = $_GET['id'];
  $sql = "DELETE FROM product WHERE productid=$id";
  $mysqli->query($sql);

  header("location: productlist.php");
?>
