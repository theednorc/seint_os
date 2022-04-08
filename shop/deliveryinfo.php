<?php

include 'header.php';

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
	<?php include("sidebar-particular.php") ?>
	<div class="span1"></div>
	<div class="span7">

		<h2 class="door">Delivery System & Charges</h2>
		<h4>*You can pay the charges just after you received the order.*</h4>
		<h4>*No need to prepaid for Yangon Region Only.*</h4>
		<hr class="soften" />
		<table>
		<tbody>
			<tr>
				<td class="style1" style="padding: 5px;">Alone</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Bahan</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Botahtaung</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Dagon</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Hlaing</td>
				<td>........................................</td>
				<td>1500 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Hlaingtharyar</td>
				<td>........................................</td>
				<td>3000 kyats</td>
			</tr>
			<tr>
			<tr>
				<td class="style1" style="padding: 5px;">Insein</td>
				<td>........................................</td>
				<td>1500 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Kamaryut</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Kyauktada</td>
				<td>........................................</td>
				<td>3000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">KyeeMyintDaing</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Lanmadaw</td>
				<td>........................................</td>
				<td>2500 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Latha</td>
				<td>........................................</td>
				<td>2500 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Mayangone</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Mingalartaungnyunt</td>
				<td>........................................</td>
				<td>2000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">NorthSouthDagon</td>
				<td>........................................</td>
				<td>2500 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">NorthSouthOkkala</td>
				<td>........................................</td>
				<td>2500 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Pabedan</td>
				<td>........................................</td>
				<td>3000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Pazundaung</td>
				<td>........................................</td>
				<td>3000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Sanchaung</td>
				<td>........................................</td>
				<td>2500 kyats</td>
			</tr>
				<tr>
				<td class="style1" style="padding: 5px;">Shwepyithar</td>
				<td>........................................</td>
				<td>3000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Tamwe</td>
				<td>........................................</td>
				<td>3000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Thaketa</td>
				<td>........................................</td>
				<td>2500 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Yankin</td>
				<td>........................................</td>
				<td>3000 kyats</td>
			</tr>
			<tr>
				<td class="style1" style="padding: 5px;">Thuwana</td>
				<td>........................................</td>
				<td>2500 kyats</td>
			</tr>

		
		</tbody>
		</table>
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
