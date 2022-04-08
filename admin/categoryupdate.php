<?php
  include 'config.php';
  $id=$_POST['cid'];
  
  $catename = $_POST['catename'];

  $sql = "UPDATE category SET catename='$catename' WHERE cateid = $id";
  $mysqli->query($sql);

  header("location: categorylist.php");
?>
