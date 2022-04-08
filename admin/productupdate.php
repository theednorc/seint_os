<?php
  include 'config.php';

  $product_id = $_POST['product_id'];
  $brand_id=$_POST['brand_id'];
  $cate_id=$_POST['cate_id'];
  $gen_id=$_POST['gen_id'];
  $productcode=$_POST['productcode'];
  $productname=$_POST['productname'];
  $colordescription=$_POST['colordescription'];
  $sizedescription=$_POST['sizedescription'];
  $description=$_POST['description'];
  
  $proimg1 = $_FILES['proimg']['name'];
  $tmp = $_FILES['proimg']['tmp_name'];
  $price=$_POST['price'];

  if($proimg1) {
    move_uploaded_file($tmp, "imageforadmin/$proimg1");
    
    $sql = "UPDATE product SET brandid='$brand_id', cateid='$cate_id', genid='$gen_id',
       productname='$productname',colordescription='$colordescription', sizedescription='$sizedescription', productcode='$productcode',description='$description',price='$price',image='$proimg1'  WHERE productid = $product_id";

  } else {
    $sql = "UPDATE product SET brandid='$brand_id', cateid='$cate_id', genid='$gen_id',
       productname='$productname',colordescription='$colordescription', sizedescription='$sizedescription', productcode='$productcode',description='$description',price='$price'  WHERE productid = $product_id";
  }

  $mysqli->query($sql);

  header("location: productlist.php");
?>
