<?php

 include 'config.php';

  $id = $_GET['id'];
  $sql = "Update product  Set Status = 'OutofStock' WHERE productid=$id";
  $mysqli->query($sql);

  header("location: productlist.php");

?>