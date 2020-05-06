<?php
session_start();
?><html>
<head>
<title>Home</title>
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
.tab {position:absolute;left:150px; }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
  text-align: center;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 10%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
<body style="background-color:Cornsilk;">

    <a href="homepage.php">
      <img src="images/logo.png" alt="Logo" width="350" height="350">
    </a>
<form class="example" action="/action_page.php">
  <button type="submit">Search<i class="fa fa-search"></i></button>
  <input type="text" placeholder="Search products.." name="search">

</form>
<a href="cart.php">
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
<h2><p><span class="tab">Fruits</span></p><h2>


<?php

$conn = mysqli_connect("localhost", "root", "", "users");
$sql = "SELECT * FROM products where fruit=1";
$records = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($records)) {
?>

<div class="card" align="center">
  <a href="show.php?id=<?php echo $row['id']; ?>">
    <img src="images/<?php echo strtolower($row['name']); ?>.png" alt="<?php echo $row['name']; ?>" style="width:20%">
    <h3><?php echo $row['name']; ?></h3>
    <p class="price">$<?php echo $row['price']; ?></p></a>
    <?php if($row['inventory'] > 0) {?>
    <a href="add.php?id=<?php echo $row['id']; ?>"><p><button>Add to Cart</button></p></a>
    <?php } else { ?> <p> OUT OF STOCK </p>
    <?php } ?><br><br>
</div>

<?php } ?>

  
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
  font-size: 16px;
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
  font-size: 16px;
  font-weight: 10;
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
  font-size: 16px;
  font-weight: 10;
}
.center{
  text-align: center;
  bottom: 25;
  margin: 16;
  width: 94%;
  font-weight: 10;
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
  font-size: 16px;
}


</style>
<br>
<br>

<div class="Footer">
  <p class="left">Customer Service<br />Call: 408-666-6666</p>
  <p class="right">Location<br />66 North First St San Jose, CA 95114</p>
  <p class="center">Store Hours<br />M-Th: 9am - 9pm | F-Sun: 9am - 12am</p>
  <h4 class="copyright">© 2020 Fresh Food, lnc </h4>
</div>
</html>

</html>
</html>
