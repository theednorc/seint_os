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
				<!-- <a href="register-login.php"><span class="icon-user"></span> Register / Login </a> --> 
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
	<hr class="soften">
	<div class="well well-small" style="font-family: calibri;font-size: 19px;">
	<p>Discount time!!!</p>
	<p>Quantities are at limit. Hurry up and make it yours, guys.</p>
	<strong class="blink">Until SEPTEMBER 30 </strong>
</div>
<hr class="soften"/>		
		  <ul class="thumbnails">
			<?php
          $sql = $mysqli->query("SELECT * FROM product WHERE Status='InStock' and discount='50' 
                         OR Status='InStock' AND discount='40' 
                         OR Status='InStock' AND discount='30' 
                         OR Status='InStock' AND discount='20' 
                         OR Status='InStock' AND discount='10'");
          if($sql){
          	 
              while($obj = $sql->fetch_object()) : 
            if($obj->discount == '50'){
             $disp=$obj->price*0.5;
             $disprice=$obj->price-$disp;
             

             echo '<li class="span3">
			  <div class="thumbnail">
			  <div class="caption">
				<p><strong>'.$obj->discount.'% OFF Item</strong></p>
				</div>
			  <a href="#.php?product='.$obj->productid.'" class="overlay"></a>
				<a href="#.php?product='.$obj->productid.'"><img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
				<div class="caption">
				<p><strong>'.$obj->productname.'</strong></p>
				  <h4><span class="dis">'.$obj->price.''.$currency.'</span>
				   <span class="pull-right">'.$disprice.''.$currency.'</span></h4>
				</div>
			  </div>
			</li>'; }
			if($obj->discount == '40'){
             $disp=$obj->price*0.4;
             $disprice=$obj->price-$disp;
             

             echo '<li class="span3">
			  <div class="thumbnail">
			  <div class="caption">
				<p><strong>'.$obj->discount.'% OFF Item</strong></p>
				</div>
			  <a href="#.php?product='.$obj->productid.'" class="overlay"></a>
				<a href="#.php?product='.$obj->productid.'"><img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
				<div class="caption">
				<p><strong>'.$obj->productname.'</strong></p>
				  <h4><span class="dis">'.$obj->price.''.$currency.'</span>
				   <span class="pull-right">'.$disprice.''.$currency.'</span></h4>
				</div>
			  </div>
			</li>'; }
			if($obj->discount == '30'){
             $disp=$obj->price*0.3;
             $disprice=$obj->price-$disp;
             

             echo '<li class="span3">
			  <div class="thumbnail">
			  <div class="caption">
				<p><strong>'.$obj->discount.'% OFF Item</strong></p>
				</div>
			  <a href="#.php?product='.$obj->productid.'" class="overlay"></a>
				<a href="#.php?product='.$obj->productid.'"><img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
				<div class="caption">
				<p><strong>'.$obj->productname.'</strong></p>
				  <h4><span class="dis">'.$obj->price.''.$currency.'</span>
				   <span class="pull-right">'.$disprice.''.$currency.'</span></h4>
				</div>
			  </div>
			</li>'; }
			if($obj->discount == '20'){
             $disp=$obj->price*0.2;
             $disprice=$obj->price-$disp;

             echo '<li class="span3">
			  <div class="thumbnail">
			  <div class="caption">
				<p><strong>'.$obj->discount.'% OFF Item</strong></p>
				</div>
			  <a href="#.php?product='.$obj->productid.'" class="overlay"></a>
				<a href="#.php?product='.$obj->productid.'"><img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
				<div class="caption">
				<p><strong>'.$obj->productname.'</strong></p>
				  <h4><span class="dis">'.$obj->price.''.$currency.'</span>
				   <span class="pull-right">'.$disprice.''.$currency.'</span></h4>
				</div>
			  </div>
			</li>'; }
			if($obj->discount == '10'){
             $disp=$obj->price*0.1;
             $disprice=$obj->price-$disp;
             

             echo '<li class="span3">
			  <div class="thumbnail">
			  <div class="caption">
				<p><strong>'.$obj->discount.'% OFF Item</strong></p>
				</div>
			  <a href="#.php?product='.$obj->productid.'" class="overlay"></a>
				<a href="#.php?product='.$obj->productid.'"><img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
				<div class="caption">
				<p><strong>'.$obj->productname.'</strong></p>
				  <h4><span class="dis">'.$obj->price.''.$currency.'</span>
				   <span class="pull-right">'.$disprice.''.$currency.'</span></h4>
				</div>
			  </div>
			</li>'; }
         endwhile; 
          } ?>
		  </ul>
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