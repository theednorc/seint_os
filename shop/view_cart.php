<?php

include 'header-up.php';

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
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="view_cart.php" class="active">
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
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">View Cart</li>
		<li style="float: right;">
			<a class="empty" href="clear_cart.php?action=empty"><span class="badge badge-warning">Empty Cart</span></a>
		</li>
    </ul>
	<div class="well well-small">
		<?php
		if(empty($_SESSION["cart_item"])){
    	echo '<div style="line-height:30px;text-align:center;">
    	      <h3>Shopping Cart is Empty</h3>
              <p>You have no items in your shopping cart.<br/>Click <a href="index.php">here</a> to continue shopping.</p>
              </div>'; } ?>

        <?php 

   if(isset($_SESSION["cart_item"]) && $item_total > 0){

   	    
    ?>	
        
        <hr class="soften"/>
        <h4><a href="order-form.php" class="shopBtn">GO TO CHECKOUT</a>
          <small class="pull-right"> [<?php echo $itemsall ?>] Item(s) are in the cart </small>
        </h4>
		

	<?php 

	    $item_total = 0;
        $itemsall=0;
        
    ?>    
    
	<table class="table table-bordered table-condensed">
        <thead>
            <tr>
            	<th>Item Image</th>
                <th>Item Name</th>
                <th>Item Code</th>
                <th>Color</th>
                <th>Size</th>
                <th>Unit price</th>
                <th>Qty </th>
                <th>Total</th>
                <th>Remove</th>
	        </tr>
        </thead>
        <tbody>
        <?php   foreach ($_SESSION["cart_item"] as $item){  
        $item_unitotal = ($item["price"]*$item["quantity"]);
        $item_total += ($item["price"]*$item["quantity"]);
        $itemsall += ($item["quantity"]); 
        $pcode=($item["productcode"]);  ?>

        <tr>
        <td>
        <?php echo '<img src="../admin/imageforadmin/'.$item["image"].'" width="200">' ?>
        </td>	
        <td><?php echo $item["productname"]; ?></td>
        <td><?php echo $item["productcode"]; ?></td>
        <td><?php echo $item["colordescription"]; ?></td>
        <td><?php echo $item["sizedescription"]; ?></td>
        <td><?php echo $item["price"]."Ks"; ?></td>
        <td>

        <a href="minus_item.php?action=minus&code=<?php echo $item["productcode"]; ?>" class="btn btn-mini">-</a>
        	<?php echo $item["quantity"]; ?>
        	<a href="plus_item.php?action=plus&code=<?php echo $item["productcode"]; ?>" class="btn btn-mini">+</a>
		
	    </td>

        <td><?php echo $item_unitotal."Ks"; ?></td>
        <td>
			<a href="remove_item.php?action=remove&code=<?php echo $item["productcode"]; ?>" class="btnRemoveAction"><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button></a>
		</td>
        </tr>
		<tr>
   	    <td colspan="9"><?php echo 'Items are '.$item["Status"]; ?></td>
        </tr>
   <?php }?>
   
   <tr>
            <td colspan="8">SubTotal :</td>
            <td><?php echo $item_total."Ks"; ?></td>
          </tr>
          <tr style="font-size: 20px;font-weight: bold;margin:30px;text-indent: 300px;">
            <td colspan="9">Order Total (Kyats)&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<?php echo $item_total."Ks"; ?></td>

        </tr>
       
		</tbody>
        </table>
    <?php }  ?>
    
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