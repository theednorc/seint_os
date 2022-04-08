<!DOCTYPE HTML>
<html lang="en-US">
<head>
   <title><?php echo "Items List : Admin View" ?></title>
   <link rel="shortcut icon" href="ico/roselogo.jpg" type="image/x-icon"> 
   <link rel="icon" href="ico/roselogo.jpg" type="image/x-icon">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- jQuery library -->
   <script src="jquery/jquery.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/style.css">
   <style type="text/css">
       body{width: 1200px;
       border: 2px solid #fff;}
   </style>
</head>
<body>
<?php

  include 'config.php';

  $id = $_GET['id'];
  $result = $mysqli->query("SELECT * FROM product WHERE productid = $id");
  $row = mysqli_fetch_assoc($result);
?>

<h1>Edit Item Details</h1>

<form action="productupdate.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="product_id" value="<?= $id ?>">
  <label for="name">Product Name</label>
  <input type="text" name="productname" id="name" value="<?php echo $row['productname'] ?>">

  <label for="brand">Brand</label>
  <select name="brand_id" id="brand">
    <option value="">-- Choose Brand--</option>
    <?php
      include 'config.php';
      $result = $mysqli->query("SELECT brandid, brandname FROM brand");
      while($crow = mysqli_fetch_assoc($result)):
    ?>
    <option value="<?php echo $crow['brandid'] ?>">
      <?php echo $crow['brandname'] ?>
    </option>
    <?php endwhile; ?>
  </select>

  <label for="cate">Category</label>
  <select name="cate_id" id="cate">
    <option value="">-- Choose Category--</option>
    <?php
      include 'config.php';
      $result = $mysqli->query("SELECT cateid, catename FROM category");
      while($arow = mysqli_fetch_assoc($result)):
    ?>
    <option value="<?php echo $arow['cateid'] ?>">
      <?php echo $arow['catename'] ?>
    </option>
    <?php endwhile; ?>
  </select>

  <label for="genre">Genre</label>
  <select name="gen_id" id="gen">
    <option value="">-- Choose Genre--</option>
    <?php
      include 'config.php';
      $result = $mysqli->query("SELECT genid, genre FROM gen");
      while($brow = mysqli_fetch_assoc($result)):
    ?>
    <option value="<?php echo $brow['genid'] ?>">
      <?php echo $brow['genre'] ?>
    </option>
    <?php endwhile; ?>
  </select>

  <label for="color">Color</label>
  <textarea name="colordescription" id="color" rows="1" cols="20"><?php echo $row['colordescription'] ?></textarea>

  <label for="size">Size</label>
  <textarea name="sizedescription" id="size" rows="1" cols="20"><?php echo $row['sizedescription'] ?></textarea>
  

  <label for="code">Product Code</label>
  <input type="text" name="productcode" id="code" value="<?php echo $row['productcode'] ?>">
  
  <label for="desc">Description</label>
  <textarea name="description" id="desc" rows="5" cols="20"><?php echo $row['description'] ?></textarea>

  <label for="img">Upload Product Image</label>
  <input type="file" name="proimg" id="img">
  
  
  <label for="price">Product Price</label>
  <input type="text" name="price" id="price" value="<?php echo $row['price'] ?>">

  <br><br>
  <input type="submit" value="Update Product" class="new">
</form>

<ul class="pager"><li><a href="productlist.php">&laquo; Go Back</a></li></ul>

</body>
</html>












