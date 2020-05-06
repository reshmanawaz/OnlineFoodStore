<?php
session_start();
if (!isset($_SESSION['id'])){
  echo "Login First";
  echo" Redirecting to the login page now...";
  header("refresh:2;url=login.php");
}

$conn = mysqli_connect("localhost", "root", "", "users");
$sql = "SELECT * FROM cart join products on products.id = cart.product_id";
$records = mysqli_query($conn, $sql);

if (mysqli_num_rows($records)<1) {
  echo "Nothing in cart";
  echo" Redirecting to the cart now...";
  header("refresh:2;url=cart.php");
}

$price = 0;
$delivery = 0;
$weight = 0;
$purchases = "";

while($row = mysqli_fetch_array($records)) {

    $price = $price + $row['price']*$row['count'];
    $weight = $weight + $row['weight']*$row['count'];
    $purchases = $purchases."<br>".$row['count']." <b>".$row['name']."(s)</b>";

}
if($weight>20){
    $delivery  = 5;
}


$address = $_POST["add"];
$card = $_POST["card"];
$sql_database = "Delete from  cart";
$result3 = mysqli_query($conn, $sql_database);
// register user
$sql = "INSERT INTO transaction (price, weight, delivery_fee, address,card,purchases) VALUES ('$price','$weight','$delivery', '$address','$card','$purchases')";
$results = mysqli_query($conn, $sql);

header("refresh:2;url=success.php?id=".mysqli_insert_id($conn));

mysqli_close($conn); // close connection


?>
