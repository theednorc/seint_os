<?php

include 'header-up.php';
$id=$_GET['id'];

?>

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
        <!-- <a href="register-login.php" class="active"><span class="icon-user"></span> Register / Login</a>  -->
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
  <p><br><br><a href="#" style="color: #000;"><span class="icon-phone"></span>&nbsp;+959 973 600 116</a>&nbsp;&nbsp;
  <a href="deliveryinfo.php" class="btn btn-mini"><span class="icon-truck"></span>&nbsp;Delivery</a><br><br></p>
    
</div>
</div>
</header>



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
        <li class="active"><a href="index.php">Home</a></li>
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


<div class="row">

<?php include('sidebar.php'); ?>

<div class="span9">
  <div class="well well-small" style="font-family: calibri;">
   
    <span style="text-align: center;">
    <h3>Thank's for order.</h3>
    <h4>Enjoy your shop more.</h4>
  </span>
    <a href="index.php" class="shopBtn btn-large" style="float: right;margin-right: 33px;"><span class="icon-arrow-left"></span> Continue Shopping </a>
    <a class="shopBtn" href="voucher.php?sid=<?php echo $id ?>" target="_blank"><span class="icon-arrow-down"></span>&nbsp;&nbsp;Print Voucher</a>
    
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
  <span>COPYRIGHT &copy; <?php echo date("Y") ?> <br> Seint<sup class="tm">TM</sup> All Rights Reserved Online Shop </span>
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



