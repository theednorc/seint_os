<?php include('header.php'); ?>

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
<!-- 
Our Items all show
-->

      <ul class="thumbnails">
      <?php
          $sql = mysqli_num_rows($product);
        if(!$sql)
        { ?>
        <div class="well well-small" style="margin-left: 20px;">
          <hr class="soften"/>
        <p class="sno">No Result Found for your search like <?php echo  "\"$in\"" ?>!</p>
        <hr class="soften"/>
        </div>
        
        <?php } else { ?>
        <div class="well well-small"  style="margin-left: 20px;">
          <hr class="soften"/>
        <h3 style="color: navy;">We gather related items searched by you .. <?php echo  "\"$in\"" ?></h3>
        <hr class="soften"/>
        </div> 
        <?php
    while($obj = $product->fetch_object()) {
    echo'<li class="span3">
        <div class="thumbnail">
        <a href="product_details.php?product='.$obj->productid.'" class="overlay"></a>
        <a class="zoomTool" href="product_details.php?product='.$obj->productid.'"><span class="icon-search"></span> QUICK VIEW</a>
        <a href="product_details.php?product='.$obj->productid.'"><img src="../admin/imageforadmin/'.$obj->image.'" alt=""></a>
        <div class="caption cntr">
            <p><strong>'.$obj->price.''.$currency.'</strong></p>';
            if(!$obj->sizedescription){ }
            else{
        echo  '<h6>Size - '.$obj->sizedescription.'</h6>'; 
        }
    echo    '</div>
        </div>
        </li>';
        }  }?>
      </ul>
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
