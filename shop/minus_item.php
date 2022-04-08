
<?php

include 'config.php';

session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_GET["action"])) {
if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
            $_SESSION["cart_item"][$k]["quantity"]--;
          if(empty($_SESSION["cart_item"][$k]["quantity"]))
            unset($_SESSION["cart_item"][$k]);
      }
    }

}


header("location: view_cart.php");

          
?>