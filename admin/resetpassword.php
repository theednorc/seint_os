<?php
 
  include('config.php'); 

  session_start();

  $newpassword = $_POST['newpwd'];
  $repassword = $_POST['repwd'];
  
  if($newpassword == $repassword){
    $sql = "Update admin SET password='$repassword' WHERE adminname = 'admin'";  
    $mysqli->query($sql);
    header("location:index.php?success=ok");
  }
  else{
    header("location:resetform.php?reset=failed");
  }
  
?>