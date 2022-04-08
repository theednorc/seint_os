<?php
  include 'config.php';
  $id = $_GET['id'];
  $status = $_GET['status'];

  $mysqli->query("UPDATE orders SET status=$status, modified_at=now() WHERE id=$id");
  header("location: orderlist.php");
?>