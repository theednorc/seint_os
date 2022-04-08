<!DOCTYPE HTML>
<html lang="en-US">
<head>
   <title><?php echo "Category New : Admin View" ?></title>
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
<h1>New Category</h1>

<form action="categoryadd.php" method="post">
  <label for="ctname">Category Name</label>
  <input type="text" name="catename" id="ctname">
  
  <br><br>
  <input type="submit" value="Add Category" class="new">

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
			"catename": "*required"
		}
	});
});
</script>

</body>
</html>

