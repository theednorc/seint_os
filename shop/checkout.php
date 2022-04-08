<?php
  include 'config.php';
  session_start();

require_once("dbcontroller.php");
$db_handle = new DBController();

    $item_total = 0;
    $itemsall=0;
    
if(isset($_SESSION["cart_item"])){
    
    foreach ($_SESSION["cart_item"] as $item){
      $item_total += ($item["price"]*$item["quantity"]);
      $itemsall += ($item["quantity"]);
    }

    $pcode=($item["productcode"]);
    $q=($item["quantity"]);
}


   //Insert orders
if(isset($_POST['submitOrder'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $mail = $_POST['mail'];
  $phone = $_POST['phone'];
  $resident = $_POST['residentAddress'];
  $delivery = $_POST['deliveryAddress'];

  //Insert Query
  $sql="INSERT INTO orders (fname, lname, email, phone, residentaddress, deliveryaddress, created_at, modified_at,status)
  VALUES ('$fname', '$lname','$mail','$phone', '$resident', '$delivery', now(), now(), 0)";

   

  if ($result =   $mysqli->query($sql) === TRUE){

      $last_order = "SELECT id FROM orders order by id desc limit 1";
      $last_order_result = $mysqli->query($last_order);
      $row = $last_order_result->fetch_assoc();
       $order_id = $row['id'];
  
      foreach($_SESSION["cart_item"] as $pcode => $item["quantity"]) {
        $mysqli->query("INSERT INTO order_items (order_id, productcode,items_qty) VALUES ('$order_id','$pcode','$q')");
      }

      unset($_SESSION["cart_item"]);
       $re = $mysqli->query("Select orders.* FROM orders,order_items where orders.id=order_items.order_id and orders.id= $order_id ");
      $data= mysqli_fetch_assoc($re);

        $a = $data['id'];
      header("location: order-confirm.php?id=".$a);
    ?>
     <div class="alert alert-success">
      <strong>Success!</strong>You have done register.
    </div>
    <?php
  }else{
    echo "Error:" . sql . "<br>" . $conn->error;
  }
}


?>