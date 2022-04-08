


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
<h1>Edit Brand</h1>

<?php

  include 'config.php';

  $sid = $_GET['id'];
  $result = $mysqli->query("SELECT * FROM gen WHERE genid = $sid");
  $row = mysqli_fetch_assoc($result);
?>

<form action="genreupdate.php" method="post">

<label for="genre">Genre </label>
  <input type="hidden" name="genre_id" value="<?php echo $sid ?>">

  <input type="text" name="genre" id="gen" value="<?php echo $row['genre'] ?>">
  
  <br><br>
  <input type="submit" value="Update Genre" class="new">

  
</form>

<ul class="pager"><li><a href="genrelist.php">&laquo; Go Back</a></li></ul>

<script src="../js/jquery.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script>
$(function() {
	$("form").validate({
		rules: {
			"genre": "required"
		},
		messages: {
			"genre": "*Please provide career type name"
		}
	});
});
</script>
</body>
</html>