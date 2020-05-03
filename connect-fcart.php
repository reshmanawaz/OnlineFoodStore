<?php

$id= $_POST["id"];
$price= $_POST["price"];
$stock= $_POST["stock"];
$weight= $_POST["weight"];
$cart = 1;

$conn = mysqli_connect("localhost", "root", "", "users");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_database = "SELECT * from inventory where product_id = '$id'";
$result2 = mysqli_query($conn, $sql_database);
if($result2){
$row = mysqli_fetch_array($result2);
$stock = $row['product_stock'];
$updatedStock = $stock - 1;
$sql_database = "UPDATE inventory SET product_stock =  $updatedStock  where product_id = '$id'";
$result3 = mysqli_query($conn, $sql_database);
echo "Item has been remove from stock. ";
} else {
    header("refresh:1.5;url=http://localhost/homepage.php");
    echo "Item could not be remove from stock. ";
    echo mysqli_error($new);
    }

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$product_cart = $cart;
$sql = "INSERT INTO cart (product_id, product_price, product_cart, product_weight) VALUES ('$id','$price','$cart', '$weight')";
$results = mysqli_query($conn, $sql);
if ($results) {
echo "Item has been added to cart.";
header("refresh:1.5;url=http://localhost/fruits.php");
} else {
header("refresh:1.5;url=http://localhost/homepage.php");
echo "Item could not be added to cart. ";
echo mysqli_error($conn);
}

mysqli_close($conn); // close connection


 ?>


 <style>
 .footer {
   position: fixed;
   left: 0;
   right: -1;
   bottom: 0;
   width: 100%;
   overflow: auto;
   background-color: burlywood;
   color: white;
   margin: 0;
 }
 .left{
   position: fixed;
   text-align: left;
   float: left;
   width: 34%;
   left: 10;
   bottom: 19;
   length: 10%;
   margin: -2;
 }
 .right{
   position: fixed;
   left: 0;
   right: -3;
   bottom: 25;
   width: 99%;
   length: 10%;
   text-align: right;
   margin: -2;
 }
 .center{
   text-align: center;
   bottom: 25;
   margin: 16;
   width: 94%;
 }
 .copyright{
   position: fixed;
   left: 0;
   right: -3;
   bottom: 5;
   width: 99%;
   length: 10%;
   text-align: right;
   margin: -2;
   color: grey;
 }
 </style>
 <div class="Footer">
   <p class="left">Customer Service<br />Call: 408-666-6666</p>
   <p class="right">Location<br />66 North First St San Jose, CA 95114</p>
   <p class="center">Store Hours<br />M-Th: 9am - 9pm | F-Sun: 9am - 12am</p>
   <h4 class="copyright">© 2020 Fresh Food, lnc </h4>
 </div>
 </html>

 </html>
