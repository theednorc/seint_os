
<!DOCTYPE HTML>
<html lang="en-US">
<head>
   <title><?php echo "Genre New : Admin View" ?></title>
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

<h1>New Genre</h1>

<form action="genreadd.php" method="post">
  <label for="name">Genre</label>
  <input type="text" name="genre" id="gen">
  
  <br><br>
  <input type="submit" value="Add Genre" class="new">

</form>

<ul class="pager"><li><a href="genrelist.php">&laquo; Go Back</a></li></ul>

<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
$(function() {
	$("form").validate({
		rules: {
			"genre": "required"
		},
		messages: {
			"genre": "*required"
		}
	});
});
</script>

</body>
</html>

