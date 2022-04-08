<?php


include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo "Genre List : Admin View" ?></title>
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
	<h1>Genre List</h1>
<ul class="menu">
  <li><a href="brandlist.php">Manage Brand</a></li>
  <li><a href="categorylist.php">Manage Category</a></li>
  <li><a class="active" href="genrelist.php">Manage Genre</a></li>
  <li><a href="productlist.php">Manage Items</a></li>
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
			<th>Name</th>
      <th>Action</th>
			
		</tr>
	</thead>
	<tbody>

		 <?php
          $sql = $mysqli->query("SELECT * FROM gen");
        
          if($sql){
              while($obj = $sql->fetch_object()) { ?>
<tr>
              <td><?= $obj->genre ?></td>
              
              <td>
                [<a href="genredelete.php?id=<?php echo $obj->genid ?>" class="del" onClick="return confirm('Are you sure')">Delete</a>] |
                [<a href="genreedit.php?id=<?php echo $obj->genid ?>">Edit</a>]
              </td>
</tr>
<?php } } ?>
 	</tbody>
	</table>
</ul>

<a href="genrenew.php" class="new">Add New Genre</a>

<br style="clear:both">
</body>
</html>
