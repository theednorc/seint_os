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
	<p><br><br><a href="tel:+959973600116" style="color: #000;"><span class="icon-phone"></span>&nbsp;+959 973 600 116</a>&nbsp;&nbsp;
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
	<hr class="soften">
	<div class="well well-small">
	<h1>Visit us</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span5">
			
		<div class="well well-small" style="font-family: calibri;font-size: 17px;">
		<p>If you have any questions or feedback, give us a call or send us an email. We'd love to hear from you!</p>

		<h4>Hot Line</h4>
        Tel +959 973 600 116<br/>

        <h4>Opening Days</h4>
        <p>Sunday To Saturday<br/>
        <span style="color:purple;">(We'll announce the closing days <a href="about.php" style="color:salmon;">here</a>.)</span></p>

        <h4>Opening Hours</h4>
        <p>9AM - 9PM</p>
        <?php 
        date_default_timezone_set("Asia/Yangon");
        /*
        if($time == "09:00am" && $time > "09:00am" ) {

           echo '<p style="color: green;font-weight:bold;">(Opening Now)</p>';
       }

        else if(date('h:ia') == "09:00pm") {
        	echo '<p style="color: red;font-weight:bold;">(Closed Now)</p>';
        }*/
         ?>

        <h4>Cool Line</h4>
		<p>
			No(93/B), A Naw Mar 1st Street,<br/>
			Thar Kay Ta, Yangon , Burma.<br/>
			Email:<a href="mailto:choseint123@gmail.com" target="_blank">choseint123@gmail.com</a><br/>
			Facebook Page:<a href="https://www.facebook.com/Seint-Online-Shopping-766719666785048/" target="_blank">https://www.facebook.com/Seint-Online-Shopping</a>
		</p>
		
		</div>
		</div>
		<div class="span7">
		<h4>Email Us</h4>
		<form action="reviewupdate.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>

          <div class="control-group">
           <label class="control-label" for="inputFullname">Fullname<sup>*</sup></label>
           <div class="controls">
              <input type="text" name="revname" class="input-xlarge" required="required" />
           </div>
          </div>
		   <div class="control-group">
           <label class="control-label" for="inputEmail">Email<sup>*</sup></label>
           <div class="controls">
              <input type="text" name="revemail" class="input-xlarge" required="required" />
           </div>
          </div>
          <div class="control-group">
           <label class="control-label" for="inputPhone">Contact Phone Number</label>
           <div class="controls">
              <input type="text" name="revph" class="input-xlarge" required="required" />
           </div>
          </div>
		   <div class="control-group">
           <label class="control-label" for="inputsubject">Reason for enquiry<sup>*</sup></label>
           <div class="controls">
              <input type="text" name="revsubj" class="input-xlarge" required="required" />
          </div>
          </div>
          <div class="control-group">
          	<label class="control-label" for="inputComment">Comment<sup>*</sup></label>
          	<div class="controls">
              <textarea type="text" rows="6" name="revcomment" class="input-xlarge" required="required"></textarea>
              
           </div>
          </div>
          <div class="control-group">
          <div class="controls">
            <input type="submit" value="Submit" name="revSubmit" class="shopBtn">
          </div>
      </div>
        </fieldset>
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
