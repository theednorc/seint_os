<?php 

include('header-up.php'); 

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
  <div class="well">

<form action="checkout.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id='validate'>
  <a href="index.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
  <hr class="soften" />
    <h4>Confirm Your Order</h4>
    <h6>Fields with Asterik mark (*) are required.</h6>

      <div class="control-group">
        <label class="control-label" for="inputFname">First Name <sup>*</sup></label>
        <div class="controls">
              <input type="text" name="fname" id="first" required="required" />
              <br/><span id="wrongfirst" class="error">*Firstname should be characters.(No Special characters, numbers and space are allowed!)*</span>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="inputLname">Last Name <sup>*</sup></label>
        <div class="controls">
              <input type="text" name="lname" id="last" required="required"/>
              <br/><span id="wronglast" class="error">*Lastname should be characters.(No pecial characters, numbers and space are allowed!)*</span>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
        <div class="controls">
          <input type="text" name="mail" id="email" required="required"/>
          <br/><span id="wrongemail" class="error">*Email address should in format (e.g.,example@mail.com )*</span>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="phone">Your Phone Number <sup>*</sup></label>
        <div class="controls">
        <input type="text" name="phone" id="ph" required="required" />
        <br/><span id="wrongph" class="error">*Your phone number must be 9 to 11 length.(No special characters and invalid numbers are allowed!)*</span>
        </div>
        </div>

       <div class="control-group">
        <label class="control-label" for="residentAddress">Resident Adddress <sup>*</sup></label>
        <div class="controls">
        <textarea rows="3" id="residentAddress" name="residentAddress" value="" required="required"></textarea>
        </div>
        </div>

       <div class="control-group">
        <label class="control-label" for="deliveryAddress">Delivery Adddress <sup>*</sup></label>
        <div class="controls">
        <textarea rows="3" id="deliveryAddress" name="deliveryAddress" value="" required="required"></textarea>
        </div>
        </div>
        
        <div class="control-group">
          <input class="exclusive shopBtn" type="submit" name="submitOrder" value="Order" style="float: left;margin-right: 33px;" />
          <input class="defaultBtn" type="reset" name="resetButton" id="resetButton" value="Reset" />
          
        </div>
    </form>

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
    <script src="assets/js/validate.js"></script>
    <style>
  .error {
    display:none;
    color:brown;
    font-size: 15px;
    font-weight: bold;
}
  </body>
</html>

