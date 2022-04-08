<?php

include ('header.php');


if(isset($_POST['sub']))
{
$e=$_POST['email'];
$p=$_POST['password'];
include("config.php");

   $sel=mysqli_query("select emailAddress,password from register where   email='$e'");
  $arr=mysqli_fetch_array($sel);
if(($arr['email']==$e) and( $arr['password']==$p))
  {
  	$arr['id']= $id;
  session_start();
   $_SESSION['cid']=$id;
      $r="Welcome!";

echo "<script>alert($r);</script>";
}

else
{


header('location : category.php');
}
}



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

<!-- 
Body Section 
-->
<div class="row">

<?php include('sidebar.php'); ?>

<div class="span9">
	<div class="well np">
			<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item active">
                <img style="width:100%" src="assets/img/19.jpg" alt="">
                <div class="carousel-caption">
                      <h4>Seint Online Shopping </h4>
                      <!-- <p><span>Available for Everyone and Every Ages</span></p> -->
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="assets/img/7.jpg" alt="">
                <div class="carousel-caption">
                      <!-- <h4>Seint Online Shopping</h4> -->
                      <p><span>Reliable and flexible items</span></p>
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="assets/img/19.jpg" alt="">
                <div class="carousel-caption">
                      <!-- <h4>Seint Online Shopping</h4> -->
                      <p><span>Tremendous and high quality items</span></p>
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="assets/img/7.jpg" alt="">
                <div class="carousel-caption">
                      <!-- <h4>Seint Online Shopping</h4> -->
                      <p><span>Confortable and trended brands</span></p>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
    </div>
<!--
New Products
-->
	
        <div class="well well-small">
		<h3><a class="btn btn-mini pull-right" href="new-products.php" title="View more">View More  <span class="icon-plus"></span></a>
		New Items</h3>
		<hr class="soften"/>
		<div class="row-fluid">
			<ul class="thumbnails">
				<?php
          $sql = $mysqli->query("SELECT * FROM product WHERE Status='InStock' ORDER BY productid DESC LIMIT 4");
          if($sql){
              while($obj = $sql->fetch_object()) : 
		echo '
			<li class="span3">
			    <div class="thumbnail">
				 <a class="zoomTool" href="product_details.php?product='.$obj->productid.'"><span class="icon-search"></span> QUICK VIEW</a>
				        <a href="#" class="tag"></a>
				        <a  href="product_details.php?product='.$obj->productid.'">
				        <img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
			        </div>
			    </li>';

             endwhile; 
          }?>
			</ul>	
		</div>
	</div>
		<div class="well well-small">
		<h3>Recommanded Items </h3>
		<hr class="soften"/>
		<div class="row-fluid">
		<div id="reProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">
				<?php
          $sql = $mysqli->query("SELECT * FROM product WHERE Status='InStock' ORDER BY RAND() LIMIT 3");
          if($sql){
              while($obj = $sql->fetch_object()) : 
            
			echo '
			<li class="span4">
			    <div class="thumbnail">
				 <a class="zoomTool" href="product_details.php?product='.$obj->productid.'"><span class="icon-search"></span> QUICK VIEW</a>
				        <a  href="product_details.php?product='.$obj->productid.'">
				        <img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
			        </div>
			    </li>';

             endwhile; 
          }?>
			  </ul>
			</div>
		    <div class="item">
		       <ul class="thumbnails">
			    <?php
          $sql = $mysqli->query("SELECT * FROM product WHERE Status='InStock' LIMIT 3");
          if($sql){
              while($obj = $sql->fetch_object()) : 
            
			echo '
			<li class="span4">
			    <div class="thumbnail">
				 <a class="zoomTool" href="product_details.php?product='.$obj->productid.'"><span class="icon-search"></span> QUICK VIEW</a>
				        <a  href="product_details.php?product='.$obj->productid.'">
				        <img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
			        </div>
			    </li>';

             endwhile; 
          }?>
		      </ul>
		    </div>
		   </div>
		   <a class="left carousel-control" href="#reProductCar" data-slide="prev">&lsaquo;</a>
           <a class="right carousel-control" href="#reProductCar" data-slide="next">&rsaquo;</a>
		</div>
		</div>
	</div>
	<!--
	Featured Products
	-->

	<div class="well well-small">
		<h3><a class="btn btn-mini pull-right" href="list-view.php" title="View more">View More  <span class="icon-plus"></span></a>
		Featured Items</h3>
		<hr class="soften"/>
		<div class="row-fluid">
			<ul class="thumbnails">
				<?php
          $sql = $mysqli->query("SELECT * FROM product WHERE Status='InStock' ORDER BY RAND() LIMIT 3");
          if($sql){
              while($obj = $sql->fetch_object()) : 
				echo'<li class="span4">
					<div class="thumbnail">
						<a  href="product_details.php?product='.$obj->productid.'">
						<img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
						<div class="caption">
							<h5>'.$obj->productname.'</h5>
							<h4>
							<a class="shopBtn" href="product_details.php?product='.$obj->productid.'" title="Click to view"><span class="icon-zoom-in"></span></a>
							<span class="pull-right">'.$obj->price.''.$currency.'</span>
							</h4>
						</div>
					</div>
				</li>';
				 endwhile; 
          }?>
			</ul>	
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