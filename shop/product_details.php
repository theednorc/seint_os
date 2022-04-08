
<?php 

include('header.php');
$product_id=$_GET['product'];

?>

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
<?php include('sidebar-particular.php'); ?>

<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Items</a> <span class="divider">/</span></li>
    <li class="active">Preview Details</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
		
	<?php
	$product_array = $db_handle->runQuery("SELECT * FROM product WHERE Status='InStock' and productid=$product_id OR discount='ON' AND productid=$product_id");

	    if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	
          echo '<form method="post" action="add_to_cart.php?action=add&code='.$product_array[$key]["productcode"].'">
			<div class="span8">
                <div class="item">
                    <a href="#"> 
                    <img src="../admin/imageforadmin/'.$product_array[$key]["image"].'" class="detailimg"></a>
                  </div>
            </div>
            <div class="span4">
				   <h4>'.$product_array[$key]["productname"].'</h4>
				   <hr class="soft"/>
				   <div class="control-group">'; 
                   $relate = ($product_array[$key]["productname"]);  ?>

		<?php

        $sqlbc = $mysqli->query("SELECT brand.brandname,gen.genre FROM product,brand,gen WHERE product.brandid=brand.brandid AND product.genid=gen.genid AND Status='InStock' AND productid=$product_id");
        
            if($sqlbc){
              $bc= mysqli_fetch_assoc($sqlbc); ?>

			<h4><?php echo $bc['brandname'] ?> / For <?php echo $bc['genre'] ?></h4>
			
		<?php } 
        
        echo '<small>Price</small><p style="font-size:16px;font-weight:bold;">'.$product_array[$key]["price"].' '.$currency.'</p>';
	    
        if(!$product_array[$key]["colordescription"]){ }
	    	else{
	    echo   '<small>Color</small>
	    <p style="font-size:13px;font-weight:bold;">'.$product_array[$key]["colordescription"].'</p>'; }
	    if(!$product_array[$key]["sizedescription"]){ }
	    	else{
	    echo '<small>Size</small>
	    <p style="font-size:13px;font-weight:bold;">'.$product_array[$key]["sizedescription"].'</p>'; }
	    if(!$product_array[$key]["description"]){ }
	    	else{
	    echo '<small>Details</small>
	    <p style="font-size:13px;font-weight:bold;">'.$product_array[$key]["description"].'</p>'; } 

	 		   
	echo '</div>
				 <div>
				<input type="text" name="quantity" value="1" class="inputqty" /><br/>
				<input type="submit" value="Add to cart" class="btnAdd" />
			   </div>
			</div>
			</form>
		
		
	</div>';   } }   ?>
	
	<hr class="softn clr"/>


              <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Related Items </a></li>
              
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            		<div class="tab-pane fade active in" id="home">
			<div class="row-fluid">	  
			
	<?php 

          $sql = $mysqli->query("SELECT * FROM product WHERE productname LIKE '%$relate%' and Status ='InStock'");
          if($sql){
              while($obj = $sql->fetch_object()) : 
     
	 echo   '<div class="row-fluid">	
		    <div class="span2">
			<img src="../admin/imageforadmin/'.$obj->image.'" alt="" class="arrangeimg">
		     </div>
		     <div class="span6">
			 <h5>'.$obj->productname.'</h5>';

if(!$product_array[$key]["colordescription"] || !$product_array[$key]["colordescription"]){ }
else{

	echo '<h5>Size&nbsp;-&nbsp;'.$obj->sizedescription.' / '.$obj->colordescription.'</h5>';
}

	echo   '<span>'.$obj->description.'</span>
		    </div>
		    <div class="span4 alignR">
		    <form class="form-horizontal qtyFrm">
		    <h3>'.$obj->price.''.$currency.'</h3>
		
		    <div class="btn-group">
		    <a href="product_details.php?product='.$obj->productid.'" class="shopBtn"><span class="icon-zoom-in"></span> VIEW</a>
		    </div>
			</form>
		 </div>
	</div>
	<hr class="soften" />'; endwhile; 
          
     }?>  
	
</div>			
</div>

</div>
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
