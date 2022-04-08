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
				<!-- <a href="register-login.php"><span class="icon-user"></span> Register / Login</a> --> 
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
<div class="well well-small" style="font-family: calibri;font-size: 17px;color: #555;">
	
	<div class="row-fluid">
		<h1>Privacy Policy</h1>
		<hr class="soften"/>	
        <h2>1. What we need</h2>
        <p>Our Personal Data Protection Policy governs the use and storage of 
            your data.</p>
        <ul>
            <li>Personal details such as name, address, email, and phone number</li>
            <li>Your IP address</li>
            <li>Operating system, web browser type and version</li>
            <li>Pages you visit and features you use on our site</li>
        </ul>
        <p>We also use cookies or similar technologies to analyse trends, 
            administer the website, track users’ movements around the website and 
            to gather demographic information about our user base as a whole. You 
            can control the use of cookies at the individual browser level but, 
            if you choose to disable cookies, it may limit your use of certain 
            features or functions on our website or service.</p>
        <p>We partner with third parties to manage our advertising on other sites. 
            Our third-party partner may use technologies such as cookies to gather 
            information about your activities on this website and other sites in 
            order to provide you advertising based on your browsing activities 
            and interests.</p>
        <h2>2. Why we need it</h2>
        <p>We need your personal data in order to provide you with the following 
            services:</p>
        <ul>
            <li>For fulfilling your orders in order to know where to deliver them, 
                and how to communicate with you about that delivery</li>
            <li>To process your payment</li>
            <li>For communicating with you on updates and special offers via email 
                (if you have opted into this)</li>
            <li>For responding to any requests to our customer happiness team</li>
            <li>For business operations and reporting</li>
        </ul>
        <h2>3. What we do with it</h2>
        <p>No third party providers have access to your data, unless specifically 
            required by law.</p>
        <h2>4. How long we keep it</h2>
        <p>We will retain your information for as long as your account is active 
            or as needed to provide you services. We will retain and use your 
            information as necessary to comply with our legal obligations, resolve 
            disputes and enforce our agreements. After this period, your data is 
            irreversibly deleted.</p>
        <p>Data security is very important to us, and to protect your data we have 
            taken suitable measures to safeguard and secure data collected through 
            our site.</p>
        <p>Steps We take to secure and protect your data include:</p>
        <p>Ensuring that your connection to our website is secure; and</p>
        <p>Ensuring that internal access to all personal information we hold is 
            secured by appropriate measures.</p>
        <h2>5. What are your rights?</h2>
        <p>Should you believe that any personal data we hold on you is incorrect 
            or incomplete, you have the ability to request to see this information, 
            rectify it or have it deleted.</p>
        <h2>6. Revisions to this statement</h2>
        <p>We may update this privacy statement to reflect changes to our information 
            practices. If we make any material changes we will notify you by email 
            (sent to the email address specified in your account) or by means of 
            a notice on this Website. We encourage you to review this page periodically 
            for the latest information about our privacy practices.</p>
		
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