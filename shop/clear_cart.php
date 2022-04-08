<?php

include 'config.php';

session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_GET["action"])) {
unset($_SESSION["cart_item"]);
}
header("location: view_cart.php");

?>