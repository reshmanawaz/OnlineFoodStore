<?php
session_start();
?>

<?php
if (isset($_SESSION['id'])){
  echo "Already Logged In";
  echo" Redirecting to the home page now...";
  header("refresh:1;url=homepage.php");
}

$logged_in = false;
if (isset($_POST["username"]) && isset($_POST["password"])) {
if ($_POST["username"] && $_POST["password"]) {
$username = $_POST["username"];
$password = $_POST["password"];
// create connection
$conn = mysqli_connect("localhost", "root", "", "users");
// check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// register user
$sql = "SELECT password,id,fname FROM customers WHERE username = '$username'";
$results = mysqli_query($conn, $sql);
if ($results) {
$row = mysqli_fetch_assoc($results);
if ($row["password"] === $password) {
$logged_in = true;
$_SESSION["name"] = $row["fname"];
$_SESSION["id"] = $row["id"];
 echo "Welcome " . $_POST["username"];
 echo "\nRedirecting to the home page now...";
$sql = "SELECT * FROM customers";
$results = mysqli_query($conn, $sql);
header("refresh:5;url=homepage.php");

} else {
echo "user name or password incorrect;";
}
} else {
echo mysqli_error($conn);
}
mysqli_close($conn); // close connection
} else {
echo "Nothing was submitted.";
}
}
?>

<html>
<head>
<title> Login</title>
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
form {
  text-align: center;
}
.tab {position:absolute;left:150px; }
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
<div class="navbar">
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
<br>
<h3 style="text-align:center" ><p>Please input username and password </span></p></h3>
<br>

<form action="login.php" method="post">
  <input type="text" name="username">
  <br><br>
  <input type="password" name="password">
  <br><br>
  <input type="submit">
</form>

<br>
<br>
<br>
<br>
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
