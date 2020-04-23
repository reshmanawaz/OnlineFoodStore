<?php

$id= $_POST["id"];
$price= $_POST["price"];
$stock= $_POST["stock"];
$weight= $_POST["weight"];


$conn = mysqli_connect("localhost", "root", "", "users");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cart (product_id, product_price, product_stock, product_weight) VALUES ('$id','$price','$stock', '$weight')";
$results = mysqli_query($conn, $sql);
if ($results) {
echo "Item has been added to cart.";
header("refresh:1.5;url=http://localhost/Vegetable.php");
} else {
header("refresh:1.5;url=http://localhost/homepage.php");
echo "Item could not be added to cart. ";
echo mysqli_error($conn);
}
mysqli_close($conn); // close connection


 ?>
