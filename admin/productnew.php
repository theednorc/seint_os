<!DOCTYPE HTML>
<html lang="en-US">
<head>
   <title><?php echo "Item New : Admin View" ?></title>
   <link rel="shortcut icon" href="ico/roselogo.jpg" type="image/x-icon"> 
   <link rel="icon" href="ico/roselogo.jpg" type="image/x-icon">
   <script type="text/javascript" src="../js/jquery-3.1.1.slim.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
   <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
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
<h1>New Item</h1>

<form action="productadd.php" method="post" enctype="multipart/form-data">

  <label for="name">Product Name</label>
  <input type="text" name="productname" id="name">
  
  <label for="brand">Brand</label>
  <select name="brand_id" id="brand">
    <option value="">-- Choose Brand--</option>
    <?php
      include 'config.php';
      $result = $mysqli->query("SELECT brandid, brandname FROM brand");
      while($row = mysqli_fetch_assoc($result)):
    ?>
    <option value="<?php echo $row['brandid'] ?>">
      <?php echo $row['brandname'] ?>
    </option>
    <?php endwhile; ?>
  </select>

  <label for="cate">Category</label>
  <select name="cate_id" id="cate">
    <option value="">-- Choose Category--</option>
    <?php
      include 'config.php';
      $result = $mysqli->query("SELECT cateid, catename FROM category");
      while($row = mysqli_fetch_assoc($result)):
    ?>
    <option value="<?php echo $row['cateid'] ?>">
      <?php echo $row['catename'] ?>
    </option>
    <?php endwhile; ?>
  </select>

  <label for="genre">Genre</label>
  <select name="gen_id" id="gen">
    <option value="">-- Choose Genre--</option>
    <?php
      include 'config.php';
      $result = $mysqli->query("SELECT genid, genre FROM gen");
      while($row = mysqli_fetch_assoc($result)):
    ?>
    <option value="<?php echo $row['genid'] ?>">
      <?php echo $row['genre'] ?>
    </option>
    <?php endwhile; ?>
  </select>

  <label for="code">Product Code</label>
  <input type="text" name="productcode" id="code">

  <label for="color">Color</label>
  <textarea name="colordescription" id="color" rows="1" cols="20"></textarea>

  <label for="size">Size</label>
  <textarea name="sizedescription" id="size" rows="1" cols="20"></textarea>

  <label for="desc">Product Description</label>
  <textarea name="description" id="desc" rows="5" cols="20"></textarea>

  <label for="img">Product Image</label>
  <input type="file" name="proimg" id="img">
  
  <label for="price">Price</label>
  <input type="text" name="price" id="price">

  <br><br><input type="submit" value="Add Product" class="new">

</form>

<ul class="pager"><li><a href="productlist.php">&laquo; Go Back</a></li></ul>

</body>
</html>

