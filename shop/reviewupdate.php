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


if(isset($_POST['revSubmit'])) {

  $revname = $_POST['revname'];
  $revemail = $_POST['revemail'];
  $revph = $_POST['revph'];
  $revsubj = $_POST['revsubj'];
  $revcomment = $_POST['revcomment'];


  //Insert Query
  $sql=$mysqli->query("INSERT INTO review (revname,revemail,revph,revsubj,revcomment)
  VALUES ('$revname','$revemail','$revph','$revsubj','$revcomment')");

  
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
    <!--<link href="assets/css/bootstrap.css" rel="stylesheet"/>-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet"/>-->
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <link href="liststyle.css" rel="stylesheet"/>
    <!-- font awesome styles -->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
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
          <a href="https://www.twitter.com/login" target="_blank"><span class="icon-twitter"></span></a>
          <a href="https://www.facebook.com/Seint-Online-Shopping-766719666785048/" target="_blank"><span class="icon-facebook"></span></a>
          <a href="https://www.youtube.com/" target="_blank"><span class="icon-youtube"></span></a>
          <a href="https://www.tumblr.com/login" target="_blank"><span class="icon-tumblr"></span></a>
        </div>
        <a href="index.php"> <span class="icon-home"></span> Home</a> 
        <!-- <a href="register-login.php"><span class="icon-user"></span> Register / Login</a>  -->
        <a href="contact.php" class="active"><span class="icon-envelope"></span> Contact us</a>
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
  <p><br><br><a href="#" style="color: #000;"><span class="icon-phone"></span>&nbsp;+959 973 600 116</a>&nbsp;&nbsp;
  <a href="deliveryinfo.php" class="btn btn-mini"><span class="icon-truck"></span>&nbsp;Delivery</a><br><br></p>  
</div>
</div>
</header>


<!--
Navigation Bar Section 
-->
<div class="navbar">
    <div class="navbar-inner">
    <div class="container">
      <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse">
      <ul class="nav">
        <li class=""><a href="index.php">Home</a></li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
        <li class=""><a href="new-products.php">What's New</a></li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
        <li class=""><a href="list-view.php">List View</a></li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
        <li class=""><a href="top-sellers.php">Best selling</a></li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
        <li class=""><a href="specials.php">Special Events</a></li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
      </ul>
      <form action="result.php" method="get" class="navbar-search pull-left">
                <input type="search" name="s" placeholder="Search" class="search-query span2">
            </form>
      <ul class="nav pull-right">

        <li class=""><a href="feedback.php"><span class="icon-comments"></span>&nbsp;Feedbacks</a></li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
        <li class="">&nbsp;&nbsp;&nbsp;</li>
      </ul>
      </div>
    </div>
    </div>
</div>
<!-- 
Body Section 
-->
  <div class="row">
  <div class="span12">
  <hr class="soft"/>
  <div class="well">
  <h2>Review received!</h2>
  <hr class="soft"/>
    <p style="font-size: 20px;">We've approved your interesting messages.</p><br>
    <p style="font-size: 20px;">Thanks for your message.</p><br>
    <p style="font-size: 16px;">Seint Online Shop</p>
    <p style="font-size: 16px;">No(93/B), A Naw Mar 1st Street,</p>
    <p style="font-size: 16px;">Thar Kay Ta, Yangon , Burma.</p>
  <hr class="soft"/>
    <p style="font-size: 15px;">We will look forward doing the best of services.</p>
</div>
</div>
</div>
<!-- 
Clients 
-->

<?php include('section.php'); ?>

<!--
Footer
-->
<?php include('footer.php'); ?>

</div><!-- /container -->

<div class="copyright">
<div class="container">
  <span>Copyright &copy; <?php echo date("Y") ?> <br> Seint Online Shopping</span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>

