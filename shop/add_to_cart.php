<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();

if(!empty($_GET["action"])) {


if(!empty($_POST["quantity"])) {
 $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE productcode='" . $_GET["code"] . "'");

 $itemArray = array($productByCode[0]["productcode"]=>
 	          array('productname'=>$productByCode[0]["productname"],
 	                'productcode'=>$productByCode[0]["productcode"],
 	                'colordescription'=>$productByCode[0]["colordescription"],
 	                'sizedescription'=>$productByCode[0]["sizedescription"],
 	                'image'=>$productByCode[0]["image"],
 	                'quantity'=>$_POST["quantity"],
 	                'Status' => $productByCode[0]["Status"],
 	                'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["productcode"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["productcode"] == $k) {
							$_SESSION["cart_item"][$k]["colordescription"]+=$_POST["color"];
							$_SESSION["cart_item"][$k]["sizedescription"]+=$_POST["size"];
							
							if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
						}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
header("location: index.php");

?>