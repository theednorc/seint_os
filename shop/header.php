<?php

include 'config.php';


session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();


#define items from cart
    $item_total = 0;
    $itemsall=0;
    
if(isset($_SESSION["cart_item"])){
    
    foreach ($_SESSION["cart_item"] as $item){
    	$item_total += ($item["price"]*$item["quantity"]);
    	$itemsall += ($item["quantity"]);
    }
}

 #Insert Query newsletter
if(isset($_POST['submit'])) {

  $Email = $_POST['email'];

$sql=$mysqli->query("INSERT INTO newsletter (email)
  VALUES ('$Email')");

}


if(isset($_GET['s'])) {
  $in = $_GET['s'];
  $product = $mysqli->query(
  	"SELECT DISTINCT p.*  FROM  product p, brand b,category c,gen g 
     WHERE p.Status='InStock' AND
     p.brandid = b.brandid AND b.brandname LIKE '%$in%' OR 
     p.cateid=c.cateid AND c.catename LIKE '%$in%' OR
     p.genid=g.genid AND g.genre LIKE '%$in%' OR
     p.productcode LIKE '%$in%' OR
     p.productname LIKE '%$in%' OR
     p.colordescription LIKE '%$in%' OR
     p.sizedescription LIKE '%$in%' OR
     p.price LIKE '%$in%' OR
     p.image LIKE '%$in%'");
 }



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo "SEINT Online Shopping" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet"/>-->
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <link href="liststyle.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/ico/roselogo.jpg" type="image/x-icon"> 
	<link rel="icon" href="assets/ico/roselogo.jpg" type="image/x-icon">
    
    <link href="css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="https://www.twitter.com/" target="_blank"><span class="icon-twitter"></span></a>
					<a href="https://www.facebook.com/Seint-Online-Shopping-766719666785048/" target="_blank"><span class="icon-facebook"></span></a>
					<a href="https://www.youtube.com/" target="_blank"><span class="icon-youtube"></span></a>
					<a href="https://www.tumblr.com/" target="_blank"><span class="icon-tumblr"></span></a>
				</div>
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				<!-- <a href="register-login.php"><span class="icon-user"></span> Register / Login</a>  -->
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="view_cart.php" class="add-to-cart">
					<span class="icon-shopping-cart"></span>
					 <?php echo $itemsall.' Item(s) ';
						if($item_total == 0 ){ }
						 else{ 
                              echo ' <strong>-</strong> <span class="badge badge-warning">'.$item_total.''.$currency.'</span>'; 
                        }  ?>
				</a>
				
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->

<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span7">
	<h2 style="color: #c8383c;font-family: verdana;">Seint Online Shop</h2>
	</div>
	<div class="span5 alignR">
	<p><br><br><a href="tel:+959973600116" style="color: #000;"><span class="icon-phone"></span>&nbsp;+959 973 600 116</a>&nbsp;&nbsp;
	<a href="deliveryinfo.php" class="btn btn-mini"><span class="icon-truck"></span>&nbsp;Delivery</a><br><br></p>
    
</div>
</div>
</header>


