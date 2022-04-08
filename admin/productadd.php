<?php
  include 'config.php';
  
  $brand_id=$_POST['brand_id'];
  $cate_id=$_POST['cate_id'];
  $gen_id=$_POST['gen_id'];
  $productcode=$_POST['productcode'];
  $productname=$_POST['productname'];
  $colordescription=$_POST['colordescription'];
  $sizedescription=$_POST['sizedescription'];
  $description=$_POST['description'];

  $proimg = $_FILES['proimg']['name'];
  $tmp = $_FILES['proimg']['tmp_name'];
  $price=$_POST['price'];
  
if ($proimg) {
    move_uploaded_file($tmp, "imageforadmin/$proimg");
}

$sql = "INSERT INTO product (
    brandid,cateid,genid,productcode,productname,colordescription,sizedescription,description,image,price) 
    VALUES (
    '$brand_id','$cate_id','$gen_id','$productcode','$productname','$colordescription','$sizedescription','$description',
    '$proimg','$price')";

     $mysqli->query($sql);

  header("location: productlist.php");
?>
