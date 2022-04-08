<?php

require('config.php');
require('invoice.php');
 $id = $_GET['sid'];
 
 $total =0;
 $t=0;


  $items = $mysqli->query("SELECT product.*, brand.brandname , order_items.* ,product.price,orders.deliveryaddress,orders.fname,orders.lname FROM order_items,product,brand,orders WHERE order_items.productcode = product.productcode AND brand.brandid=product.brandid AND order_items.order_id = orders.id and order_items.order_id = $id AND product.Status='InStock'");

  $customer =$mysqli->query("SELECT orders.deliveryaddress,orders.fname,orders.lname FROM order_items,product,orders WHERE order_items.productcode = product.productcode AND order_items.order_id = orders.id and order_items.order_id = $id");

  
$pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
$pdf->AddPage();

$pdf->temporaire( "Seint Online Shop" );
date_default_timezone_set("Asia/Yangon");
      $d=date("d");
      $m=date("m");
      $y=date("Y");
$pdf->addDate($d."/".$m."/".$y);

//Customer Info
$data = mysqli_fetch_assoc($customer);

$pdf->addPageNumber($data['fname'].$data['lname']);
$pdf->addClientAdresse($data['deliveryaddress']);

$pdf->addReglement("Orders will be arrived in 4 days");

if($d>=30){$m+1;$d=1;}
if($m>12){$y+1;$m=1;}
$dd=$d+3;
$pdf->addEcheance($dd."/".$m."/".$y);

$pdf->addReference("Thank You For Shopping Our Site ......");


$cols=array( "Brand"    => 23,
             "Item Name"  => 47,
             "Color"  => 20,
             "Size"  => 20,
             "Quantity"     => 22,
             "Price"      => 26,
             "Amount" => 32);
$pdf->addCols( $cols);

$cols=array( "Brand"    => "L",
             "Item Name"  => "L",
             "Color"  => "L",
             "Size"  => "L",
             "Quantity"     => "L",
             "Price"      => "L",
             "Amount" => "R");
$pdf->addLineFormat( $cols);



$y    = 109;

 
 while($obj = $items->fetch_object() ) {

 if($obj->discount == '50'){
  $dp=$obj->price*0.5;
  $obj->price=$obj->price-$dp;
  $obj->TOTAL=$obj->price*$obj->items_qty;
 }
 else if($obj->discount == '40'){
  $dp=$obj->price*0.4;
  $obj->price=$obj->price-$dp;
  $obj->TOTAL=$obj->price*$obj->items_qty;
 }
 else if($obj->discount == '30'){
  $dp=$obj->price*0.3;
  $obj->price=$obj->price-$dp;
  $obj->TOTAL=$obj->price*$obj->items_qty;
 }
 else if($obj->discount == '20'){
  $dp=$obj->price*0.2;
  $obj->price=$obj->price-$dp;
  $obj->TOTAL=$obj->price*$obj->items_qty;
 }
 else if($obj->discount == '10'){
  $dp=$obj->price*0.1;
  $obj->price=$obj->price-$dp;
  $obj->TOTAL=$obj->price*$obj->items_qty;
 }


  $obj->TOTAL=$obj->price*$obj->items_qty;
  $total =  $obj->TOTAL;
   $t += $total;


$line = array( "Brand"    => $obj->brandname,
               "Item Name"  => $obj->productname ,
               "Color"  => $obj->colordescription,
               "Size"  => $obj->sizedescription,
               "Quantity"     => $obj->items_qty,
               "Price"      =>  $obj->price ,
               "Amount" =>  $obj->TOTAL);
  
$size = $pdf->addLine( $y, $line );
$y   += $size + 2;

};

$pdf->addTotalCost($t);

  
$pdf->Output();


?>
