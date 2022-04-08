<?php 

include 'auth.php';

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <title><?php echo "Order List : Admin View" ?></title>
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
       body{width: 1260px;
       border: 2px solid #fff;}
   </style>
</head>
<body>
<h1>Order List</h1>
<ul class="menu">
  <li><a href="brandlist.php">Manage Brand</a></li>
  <li><a href="categorylist.php">Manage Category</a></li>
  <li><a href="genrelist.php">Manage Genre</a></li>
  <li><a href="productlist.php">Manage Items</a></li>
  <li><a class="active" href="orderlist.php">Manage Orders</a></li>
  <li><a href="newsletterlist.php">Manage Newsletter</a></li>
  <li><a href="reviewlist.php">Manage Reviews</a></li>
  <li><a href="logout.php">Admin Logout</a></li>
</ul>

<script>
    $(document).ready( function () {
      $('#tableid').DataTable();
    } );
</script>

<?php
  include 'config.php';
  $orders = $mysqli->query("SELECT * FROM orders");
?>

<ul class="orders">
  <?php while($order = mysqli_fetch_assoc($orders)): ?>
    <?php if($order['status']): ?>
      <li class="delivered">
    <?php else: ?>
      <li>
    <?php endif; ?>
      <div class="order">
        <b>Name:<?php echo $order['fname'].$order['lname'] ?></b>
        <i>Email Adddress:<?php echo $order['email'] ?></i>
        <span>Phone Number:<?php echo $order['phone'] ?></span>
        <p>
          Delivery Adddress:<?php echo $order['deliveryaddress'] ?>
        </p>

        <?php if($order['status']): ?>
          * <a href="order-status.php?id=<?php echo $order['id'] ?>&status=0">Undo</a>
        <?php else: ?>
          * <a href="order-status.php?id=<?php echo $order['id'] ?>&status=1">Mark as Delivered</a>
        <?php endif; ?>
      </div>
      <div class="items">
        <?php
          $order_id = $order['id'];

            $items = $mysqli->query("SELECT order_items.*, product.*, brand.brandname FROM order_items,product,brand WHERE order_items.productcode = product.productcode AND brand.brandid=product.brandid AND order_items.order_id = $order_id") or die(mysqli_error($mysqli));
            
          while($item = mysqli_fetch_assoc($items)): ?>
          <b>
          <a href="productlist.php">
          <?php echo $item['productname'] ?>&nbsp;( <?php echo $item['items_qty'] ?> )
          </a>
          <br>
          <?php  echo $item['brandname'] ?>
          <br>
          <!-- <?php  echo $item['order_color'] ?> | <?php  echo $item['order_size'] ?> -->
          <?php  echo $item['colordescription'] ?> | <?php  echo $item['sizedescription'] ?>
          <br>
        </b>
        <?php endwhile; ?>
      </div>
    </li>
  <?php endwhile; ?>
</ul>
</body>
</html>

