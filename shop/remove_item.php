<?php

include 'config.php';

session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_GET["action"])) {
if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
}
header("location: view_cart.php");
?>
