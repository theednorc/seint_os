<?php
  
  include 'config.php';



  $result = $mysqli->query("SELECT p.*, b.*, c.*,g.*
                         FROM product p, brand b, category c,gen g
                         Where p.brandid=b.brandid
                         AND   p.cateid=c.cateid
                         AND   p.genid=g.genid
                         order by p.productid");
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
   <title><?php echo "Item List : Admin View" ?></title>
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
       body{width: 1455px;
       border: 2px solid #fff;}
   </style>
</head>
<body>

  
    <h1>Items List</h1>
<ul class="menu">
  <li><a href="brandlist.php">Manage Brand</a></li>
  <li><a href="categorylist.php">Manage Category</a></li>
  <li><a href="genrelist.php">Manage Genre</a></li>
  <li><a class="active" href="productlist.php">Manage Items</a></li>
  <li><a href="orderlist.php">Manage Orders</a></li>
  <li><a href="newsletterlist.php">Manage Newsletter</a></li>
  <li><a href="reviewlist.php">Manage Reviews</a></li>
  <li><a href="logout.php">Admin Logout</a></li>
</ul>
<script>
    $(document).ready( function () {
      $('#tableid').DataTable();
    } );
</script>

<ul class="list">
<table id="tableid" class="display">
    <thead>
        <tr>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Item Image</th>
            <th>StockAction</th>
            <th>Stock</th>
            <th>DiscountAction</th>
            <th>Discount</th>
            <th>Item Code</th>
            <th>Price</th>
            <th>Brand Name</th>
            <th>Category</th>
            <th>Genre</th>
            <th>Color</th>
            <th>Size</th>
            <th>Description</th>
            <th>Action</th>
            </tr>
    </thead>
    <tbody>
      <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $row['productid'] ?></td>
          <td><?= $row['productname'] ?></td>
          <td><img src="imageforadmin/<?php echo $row["image"] ?>" height="100px"></td>
          <td style="width:100px;">[<a href="productoutofstock.php?id=<?php echo $row['productid'] ?>">Out of Stock</a>] | [<a href="productinstock.php?id=<?php echo $row['productid'] ?>">InStock</a>]
          </td>
          
          <td><?= $row['Status'] ?></td>
          <td style="width:100px;">
            [<a href="productdiscount10.php?id=<?php echo $row['productid'] ?>">Discount10</a>]
            [<a href="productdiscount20.php?id=<?php echo $row['productid'] ?>">Discount20</a>] 
            [<a href="productdiscount30.php?id=<?php echo $row['productid'] ?>">Discount30</a>] 
            [<a href="productdiscount40.php?id=<?php echo $row['productid'] ?>">Discount40</a>] 
            [<a href="productdiscount50.php?id=<?php echo $row['productid'] ?>">Discount50</a>] 
            [<a href="productdiscountoff.php?id=<?php echo $row['productid'] ?>">DiscountOFF</a>]
          </td>
          <td><?= $row['discount'] ?></td>
          <td><?= $row['productcode'] ?></td>
          <td><?= $row['price'] ?></td>
          <td><?= $row['brandname'] ?></td>
          <td><?= $row['catename'] ?></td>
          <td><?= $row['genre'] ?></td>
          <td><?= $row['colordescription'] ?></td>
          <td><?= $row['sizedescription'] ?></td>
          <td><?= $row['description'] ?></td>
          <td style="width:100px;">[<a href="productdelete.php?id=<?php echo $row['productid'] ?>" class="del" onClick="return confirm('Are you sure?')">Delete</a>] | [<a href="productedit.php?id=<?php echo $row['productid'] ?>">Edit</a>]  
          </td>
        </tr>
      <?php endwhile; ?>
  </tbody>
</table>
</ul>

<a href="productnew.php" class="new">Add New Product</a>


<br style="clear:both">


</body>
</html>

