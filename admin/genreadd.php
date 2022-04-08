
<?php
  include 'config.php';

  $genre = $_POST['genre'];
 
  $sql = "INSERT INTO gen (genre) 
  VALUES ('$genre')";

  $mysqli->query($sql);

  header("location: genrelist.php");
?>

