
<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <title><?php echo "Brand List : Admin View" ?></title>
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
<h1>Edit Category</h1>


<?php

  include 'config.php';

  $sid = $_GET['id'];
  $result = $mysqli->query("SELECT * FROM category WHERE cateid = $sid");
  $row = mysqli_fetch_assoc($result);
?>

<form action="categoryupdate.php" method="post">

<label for="ctname">Category Name</label>
  <input type="hidden" name="cid" value="<?php echo $sid ?>">

  <input type="text" name="catename" id="ctname" value="<?php echo $row['catename'] ?>">
  
  <br><br>
  <input type="submit" value="Update Category" class="new">

</form>

<ul class="pager"><li><a href="categorylist.php">&laquo; Go Back</a></li></ul>

<script src="../js/jquery.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script>
$(function() {
	$("form").validate({
		rules: {
			"catename": "required"
		},
		messages: {
			"catename": "*Please provide category name"
		}
	});
});
</script>
</body>
</html>

