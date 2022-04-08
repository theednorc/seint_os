<?php

 include 'config.php';

  $id = $_GET['id'];
  $sql = "Update product Set Status = 'InStock' WHERE productid=$id";
  $mysqli->query($sql);

  header("location: productlist.php");

?>