<?php

$id= $_POST["id"];
$price= $_POST["price"];
$stock= $_POST["stock"];
$weight= $_POST["weight"];


$conn = mysqli_connect("localhost", "root", "", "users");
$new = mysqli_connect("localhost", "root", "", "users"); 

if (!$new) {
    die("Connection failed: " . mysqli_connect_error());
    }

$sql_database = "SELECT * from products where product_id = '$id'";
mysqli_select_db($new, "products");
$result2 = mysqli_query($new, $sql_database);
if($result2){
$row = mysqli_fetch_array($result2);
$stock = $row['product_stock'];
$updatedStock = $stock - 1;
$sql_database = "UPDATE products SET product_stock =  $updatedStock  where product_id = '$id'";
$result3 = mysqli_query($new, $sql_database);
echo "Item has been remove from stock.";

}else {
    header("refresh:1.5;url=http://localhost/homepage.php");
    echo "Item could not be remove from stock. ";
    echo mysqli_error($new);
    }

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cart (product_id, product_price, product_stock, product_weight) VALUES ('$id','$price','$stock', '$weight')";
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
