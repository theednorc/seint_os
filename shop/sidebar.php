<div id="sidebar" class="span3">

<div class="well well-small">
	<div class="panel-group category-products" id="accordian">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordian" href="#brand"><span class="icon-chevron-right"></span>Brand</a>
			</h4>
		</div>
	    <div id="brand" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
				    <?php 
				    $result = $mysqli->query("SELECT * FROM brand");
				    while($row = mysqli_fetch_assoc($result)): ?>
				    <li>
				        <a href="brand.php?brand=<?php echo $row['brandid'] ?>"><span class="icon-chevron-right"></span> <?php echo $row['brandname'] ?></a>
				    </li>
				    <?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div><!--brand products-->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordian" href="#cate"><span class="icon-chevron-right"></span>Category</a>
			</h4>
		</div>
	    <div id="cate" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
				    <?php 
				    $result = $mysqli->query("SELECT * FROM category");
				    while($row = mysqli_fetch_assoc($result)): ?>
				    <li>
				        <a href="category.php?cate=<?php echo $row['cateid'] ?>"><span class="icon-chevron-right"></span> <?php echo $row['catename'] ?></a>
				    </li>
				    <?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div><!--category product-->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordian" href="#genre"><span class="icon-chevron-right"></span>Genre</a>
			</h4>
		</div>
	    <div id="genre" class="panel-collapse collapse">
			<div class="panel-body">
				<ul>
				    <?php 
				    $result = $mysqli->query("SELECT * FROM gen");
				    while($row = mysqli_fetch_assoc($result)): ?>
				    <li>
				        <a href="genre.php?gen=<?php echo $row['genid'] ?>"><span class="icon-chevron-right"></span> <?php echo $row['genre'] ?></a>
				    </li>
				    <?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div><!--genre products-->
</div>
</div>

<div class="well well-small alert alert-warning cntr">
	<h2><strong>% OFF</strong> Discount</h2>
	<p>first come first serve. <br><br><a class="defaultBtn" href="discount.php">Click here </a></p>
</div>

<a class="shopBtn btn-block" href="upcoming.php">Upcoming Items<br><small>Click to view</small></a>
<br><br>
<!--items view-->
<ul class="nav nav-list promowrapper">
	<?php
          $sql = $mysqli->query("SELECT * FROM product WHERE Status='InStock' order by RAND() LIMIT 3");
          if($sql){
              while($obj = $sql->fetch_object()) : 
            
			echo '<li>
			  <div class="thumbnail">
				<img src="../admin/imageforadmin/'.$obj->image.'" alt="">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php?product='.$obj->productid.'">VIEW</a> <span class="pull-right">'.$obj->price.''.$currency.'</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>';
         endwhile; 
      }?>
</ul>
</div>