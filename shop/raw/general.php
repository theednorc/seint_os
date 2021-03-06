<?php

include 'config.php';

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
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <link href="liststyle.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

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
					<a href="https://www.facebook.com/login" target="_blank"><span class="icon-facebook"></span></a>				</div>
				<a href="index.php"> <span class="icon-home"></span> Home</a> 
				
				<a href="register.php"><span class="icon-edit"></span> Free Register </a> 
				<a href="contact.php"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart.php"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
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
			  <li class=""><a href="index.php">Home	</a></li>
			  <li class=""><a href="list-view.php">List View</a></li>
			  <li class=""><a href="grid-view.php">Grid View</a></li>
			  <li class=""><a href="three-col.php">Three Column</a></li>
			  <li class=""><a href="four-col.php">Four Column</a></li>
			  <li class="active"><a href="general.php">General Content</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
		<div id="sidebar" class="span3">
		<div class="well well-small">
	<div class="left-sidebar">
		                    <div class="brands_products"><!--brand_products-->
							<h2>Brands</h2>
							<div class="brands-name">

								<ul class="nav nav-pills nav-stacked">

                               <?php $result = $mysqli->query("SELECT * FROM brand");
								while($row = mysqli_fetch_assoc($result)): ?>
								<li>
								<a href="leftsideproduct.php?brand=<?php echo $row['brandid'] ?>"><?php echo $row['brandname'] ?></a>
							</li>
							<?php endwhile; ?>

								</ul>
							</div>
						</div><!--/brand-products-->
						<hr>

							<div class="category_products"><!--category_products-->
							<h2>Category</h2>
							<div class="category-name">

								<ul class="nav nav-pills nav-stacked">

                               <?php $result = $mysqli->query("SELECT * FROM category");
								while($row = mysqli_fetch_assoc($result)): ?>
								<li>
								<a href="leftsideproduct.php?cate=<?php echo $row['cateid'] ?>"><?php echo $row['catename'] ?></a>
							</li>
							<?php endwhile; ?>

								</ul>
							</div>
						</div><!--/category-products-->
						
					    <hr>
						<div class="genre_products"><!--genre_products-->
							<h2>Genre</h2>
							<div class="genre-name">

								<ul class="nav nav-pills nav-stacked">

                               <?php $result = $mysqli->query("SELECT * FROM gen");
								while($row = mysqli_fetch_assoc($result)): ?>
								<li>
								<a href="leftsideproduct.php?gen=<?php echo $row['genid'] ?>"><?php echo $row['genre'] ?></a>
							</li>
							<?php endwhile; ?>

								</ul>
							</div>
						</div><!--/genre_products-->
					
					</div>

</div>  
		  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Page Title</li>
    </ul>
<div class="well well-small">
	<h1> Title of the page</h1>	
	<h2> Title of the page</h2>	
	<h3> Title of the page</h3>	
	<h4> Title of the page</h4>	
	<h5> Title of the page</h5>	
	<h6> Title of the page</h6>	
	<hr class="soft"/>
	<h2>List of the text</h2>
	
	<h3>Unordered List</h3><br/>
	<ul>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. </li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit </li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta.</li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis .</li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin.</li>
	</ul>
	<h3>Ordered List</h3><br/>
	<ol>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. </li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit </li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta.</li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis .</li>
		<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin.</li>
	</ol>
	<hr class="soft"/>
	<h2>Paragraph</h2>
<p>
	 Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt.
</p>

<h5>Lorem ipsum dolor sit amet</h5><br/>
<p>
Nullam a vulputate leo. Nulla tristique metus eros. Curabitur ultrices commodo mauris, sit amet faucibus lectus fermentum in.
 Nulla eleifend, augue hendrerit tempus faucibus, diam lacus aliquet urna, eget facilisis turpis risus quis arcu. 
 Cras placerat suscipit sem, ac consequat dui iaculis eu. Cras elit enim, adipiscing lobortis rutrum ac, vehicula nec massa.
 Praesent pharetra ligula ac erat venenatis feugiat. Quisque id nulla mi. Mauris at orci nec nisi eleifend auctor. 
 </p>

<hr class="soft"/>
	<h2>Table</h2>
	<table class="table table-condensed">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
		<br>
		<br>
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@TwBootstrap</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
	<hr/>
	<h2>Form with validation states</h2><br/>
	
	<form class="bs-docs-example form-horizontal">
            <div class="control-group warning">
              <label class="control-label" for="inputWarning">Input with warning</label>
              <div class="controls">
                <input type="text" id="inputWarning">
                <span class="help-inline">Something may have gone wrong</span>
              </div>
            </div>
            <div class="control-group error">
              <label class="control-label" for="inputError">Input with error</label>
              <div class="controls">
                <input type="text" id="inputError">
                <span class="help-inline">Please correct the error</span>
              </div>
            </div>
            <div class="control-group info">
              <label class="control-label" for="inputInfo">Input with info</label>
              <div class="controls">
                <input type="text" id="inputInfo">
                <span class="help-inline">Username is taken</span>
              </div>
            </div>
            <div class="control-group success">
              <label class="control-label" for="inputSuccess">Input with success</label>
              <div class="controls">
                <input type="text" id="inputSuccess">
                <span class="help-inline">Woohoo!</span>
              </div>
            </div>
          </form>

	<h5>Lorem ipsum dolor sit amet</h5><br/>
	<p>
	Aliquam interdum, ipsum a posuere dictum, tellus risus blandit dolor, at tristique sapien urna vel purus. Pellentesque in dictum urna. Sed feugiat libero sit amet arcu malesuada eu convallis dui convallis. Donec facilisis massa a ipsum aliquam lobortis. Praesent ac lectus sed leo aliquam egestas. Sed ante neque, volutpat ac tempor et, bibendum at ligula. Nunc porta vestibulum sodales.
	</p>
</div>
</div>
</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/6.png"></a>
		</div>
	</div>
</section>

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Information</h5>
<a href="about_us.php">ABOUT US</a><br>
<a href="contact.php">CONTACT US</a><br>
<a href="newsletter.php">NEWSLETTER</a><br>
<a href="policy.php">PRIVATE POLICY</a><br>
<a href="terms.php">TERMS AND CONDITIONS</a><br>
 </div>
<div class="span2">
<h5>Our Offers</h5>
<a href="new-products.php">NEW PRODUCTS</a> <br>
<a href="top-sellers.php">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
 Malorum" by Cicero are also reproduced in their exact original form, 
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>

</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
	</p>
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
