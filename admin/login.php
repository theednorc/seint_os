<?php
 
  include('config.php'); 

  session_start();

  $username = $_POST['username'];
  $password = $_POST['pwd'];

  $result = $mysqli->query("SELECT adminname,password FROM admin");

  if($result){
  while($obj = $result->fetch_object()){

    if($obj->adminname == $username && $obj->password == $password) {
    $_SESSION['auth'] = true;
    header("location: productlist.php");
  } else {
    header("location: index.php?login=failed");
  }
}
}

?>