

<!DOCTYPE HTML>
<html lang="en-US">
<head>
   <title><?php echo "Login Section : Admin View" ?></title>
   <link rel="shortcut icon" href="ico/roselogo.jpg" type="image/x-icon"> 
   <link rel="icon" href="ico/roselogo.jpg" type="image/x-icon">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet"  type="text/css" href="css/fontawesome.css">
   <link rel="stylesheet"  type="text/css" href="css/fontawesome.min.css">
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/style.css">  
   <style type="text/css">
       body{width: 1200px;
       border: 2px solid #fff;}
   </style>
   
</head>
<body>

<?php if( isset($_GET['login']) and $_GET['login'] == "failed"): ?>
  <div style="color:red;">Login failed! User name or password incorrect.</div>
<?php endif; ?>
<?php if( isset($_GET['success']) and $_GET['success'] == "ok"): ?>
  <div style="color:red;">Your new password is successfully reset.</div>
<?php endif; ?>

    <div class="container" id="log-in-form">
      
    <div class="row" style="margin-top: 50px;">
      <!-- <div class="col-md-3"></div> -->
      <div class="col-md-4">
        <h2 style="color: #c8383c;font-family: verdana;">Seint Online Shop</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="">Admin </label>
                <input type="text" class="form-control" name="username" required="required">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="">Passcode </label>
                <input type="password" class="form-control" name="pwd" required="required">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group form-group-btn">
                <button type="submit" class="shopBtn" value="Login">Log In</button>
                <a href="resetform.php" class="defaultBtn">Forgot Your Password?</a>
            </div>
        </form>
      </div>
      <!-- <div class="col-md-3"></div> -->
       <div class="clearfix visible-lg"></div>
    </div>
    </div>
  </body>
</html>
    
</body>

</html>
