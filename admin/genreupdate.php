<?php
  include 'config.php';
  $id=$_POST['genre_id'];
  
  $genre = $_POST['genre'];

  $sql = "UPDATE gen SET genre='$genre' WHERE genid = $id";
  $mysqli->query($sql);

  header("location: genrelist.php");
?>

