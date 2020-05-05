<html>
<head>
<title>About Us</title>
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

</style>
<body style="background-color:Cornsilk;">
  <p>
<div style="position: relative; left: 0; top: 0;">
    <a href="homepage.php">
      <img src="logo.png" alt="Logo" width="350" height="350">


    </a>
</p>

<form class="example" action="/action_page.php">
  <button type="submit">Search<i class="fa fa-search"></i></button>
  <input type="text" placeholder="Search products.." name="search">

</form>
<a class ="cart" href="cart.php">

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
<br>
<br>
<p>
<h1 style="text-align:center">About Us</h1>
  <br>
  <h3 style="text-align:center">About Fresh Food</h3>
  <p style="text-align:center">Welcome to the Fresh Food, newly opened organic market in San Jose, CA.</p>
  <p style="text-align:center">We bring the food from local farms to provide products as fresh as possible.</p>
  <br>
  <h3 style="text-align:center">Store Info</h3>
  <p style="text-align:center">Address: 1 Washington Sq, San Jose, CA 95192</p>
  <p style="text-align:center">Store Number: 111-111-1111</p>
  <p style="text-align:center">Email: freshfood@sjsu.edu</p>
  <br>
  <h3 style="text-align:center">Career</h3>
  <p style="text-align:center">Please contact via email or phone number</p>
  <br>
  <br>
</p>
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
