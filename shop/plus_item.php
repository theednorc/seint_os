
<?php

include 'config.php';

session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_GET["action"])) {
if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k){
             /*if($_SESSION["cart_item"][$k]["quantity"]+1 <= $item["productqty"])*/
                $_SESSION["cart_item"][$k]["quantity"]++;
        }
    }
}
}


header("location: view_cart.php");

          
?>