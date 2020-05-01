<html>
<head>
<title>Cart</title>
</head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #32CD32;
}

.navbar a {
  float: left;
  font-size: 18px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 18px;
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: right;
  width: 30%;
  background: #f1f1f1;
}

form.example button {
  float: right;
  width: 5%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}



table {
border-collapse: collapse;
width: 70%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Item</th>
<th>Quantity  </th>
<th>Price  </th>
<th>Weight</th>
</tr>


</style>
<body style="background-color:Cornsilk;">


    <a href="homepage.php">
      <img src="logo.png" alt="Logo" width="350" height="350">
    </a>


<form class="example" action="/action_page.php">
  <button type="submit">Search<i class="fa fa-search"></i></button>
  <input type="text" placeholder="Search products.." name="search">

</form>
<a class="cart" href="cart.php">

<img align="right" border="0" alt="cart" src="cart-logo.png" width="50" height="50">
</a>


<div class="dropdown" style="float:right;">
  <img src="login logo.png" alt="Log" width="50" height="50" align="left">
  <button class="dropbtn">Log In/ Sign Up</button>

  <div class="dropdown-content">
  <a href="login.php">Sign In</a>
  <a href="create-account.php">Create Account</a>

  </div>
</div>
<div class="navbar" style:"float:middle;">
<a href="homepage.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Shop
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="fruits.php">Fruits</a>
      <a href="Vegetable.php">Vegetables</a>

    </div>
  </div>


  <a href="delivery.php">Delivery</a>
  <a href="about_us.php">About Us</a>
</div>



<?php
$product_id = "Item";
$product_weight = "Quantity";
$product_price = "Price";
$product_weight = "Weight";
//$mysqli = new mysqli("localhost", "root", "", "users" $product_id, $product_price, $product_weight);
$conn = mysqli_connect("localhost", "root", "", "users");
//$sql = "SELECT 'product_id', 'product_stock', 'product_price' FROM cart";
$sql = "SELECT * FROM cart";
//$result = $conn->query($sql);
$records = mysqli_query($conn, $sql);

//if ($result = $conn->query($sql)) {
  //  while ($row = $result->fetch_assoc()) {
  while($row = mysqli_fetch_array($records)){
//        $field1name = $row["product_id"];
//        $field2name = $row["product_price"];
//        $field3name = $row["product_stock"];

echo "<tr>";
echo "<td>".$row['product_id']."</td>";
echo "<td>".$row['product_stock']."</td>";
echo "<td>$".$row['product_price']."</td>";
echo "<td>".$row['product_weight']." lb</td>";
//echo '<tr>
//          <td>'.$field1name.'</td>
//          <td>'.$field2name.'</td>
//          <td>'.$field3name.'</td>
//      </tr>';

  //  $result->free();
}
?>
</body>
</html>
