

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

<?php if( isset($_GET['reset']) and $_GET['reset'] == "failed"): ?>
  <div style="color:red;">Reset password failed! New password and Confirm password should be matched.</div>
<?php endif; ?>

    <div class="container" id="log-in-form">
      
    <div class="row" style="margin-top: 50px;">
      <!-- <div class="col-md-3"></div> -->
      <div class="col-md-4">
        <h2 style="color: #c8383c;font-family: verdana;">Seint Online Shop</h2>
        <form method="post" action="resetpassword.php">
            <div class="form-group">
                <label for="">New Password</label>
                <input type="password" class="form-control" name="newpwd" required="required">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="">Retype Password</label>
                <input type="password" class="form-control" name="repwd" required="required">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group form-group-btn">
                <button type="submit" class="shopBtn" value="Submit">Submit</button>
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
