<?php

 include 'config.php';

  $id = $_GET['id'];
  $sql = "Update product  Set discount = '10' WHERE productid=$id";
  $mysqli->query($sql);

  header("location: productlist.php");

?>