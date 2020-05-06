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

while($row = mysqli_fetch_array($records)) {

    $price = $price + $row['price']*$row['count'];
    $weight = $weight + $row['weight']*$row['count'];

}
if($weight>20){
    $delivery  = 5;
}

?><html>
<head>
<title>Checkout</title>
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
<body >


</style>
<body style="background-color:Cornsilk;">


    <a href="homepage.php">
      <img src="images/logo.png" alt="Logo" width="350" height="350">
    </a>



<a class="cart" href="cart.php">

<img align="right" border="0" alt="cart" src="images/cart-logo.png" width="50" height="50">
</a>


<div class="dropdown" style="float:right;">
<img src="images/login logo.png" alt="Log" width="50" height="50" align="left">
    <?php if (isset($_SESSION['id'])){ ?>
        <button class="dropbtn">Welcome <?php echo $_SESSION['name']; ?></button>
        <div class="dropdown-content">
        <a href="logout.php">Logout</a>

    <?php } else { ?>
        <button class="dropbtn">Log In/ Sign Up</button>
        <div class="dropdown-content">
        <a href="login.php">Sign In</a>
        <a href="create-account.php">Create Account</a>
    <?php } ?>
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
<br>
<br>

<div style="margin:auto;text-align:center">

    <form action="buy.php" method="post">
    <textarea name="add" placeholder="Enter Address" required="required"></textarea>
    <br><br>
    <input type="number" name="card" placeholder="Card Number" required>
    <br><br>
   
    <table style="margin:auto; width:40%">
        <tr> <td>Weight</td><td><?php echo $weight; ?>lb</td></tr>
        <tr> <td>Delivery</td><td>$<?php echo $delivery; ?></td></tr>
        <tr> <td>Price</td><td>$<?php echo $price; ?></td></tr>
        <tr> <td>Total</td><td>$<?php echo $price + $delivery; ?></td></tr>
    </table>
        <br>
   
    <input type="submit" value="Buy Now">
    </form>

</div>

<br>
<br>
<br>

<br>
<br>
<br><br>
<br>
<br>


</body>

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
</html>
