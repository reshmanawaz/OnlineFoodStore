<html>
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
<body>
  <p>

    <a href="homepage.php">
      <img src="logo.png" alt="Logo" style="width:16%;">
    </a>
</p>

<form class="example" action="/action_page.php">
  <button type="submit">Search<i class="fa fa-search"></i></button>
  <input type="text" placeholder="Search products.." name="search">

</form>
<a href="cart.php">
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

  <div class="dropdown">
    <button class="dropbtn">Shop
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="fruits.php">Fruits</a>
      <a href="Vegetable.php">Vegetables</a>

    </div>
  </div>

  <a href="#news">Delivery</a>
  <a href="#home">About Us</a>
</div>
<br>
<br>
<h2><p><span class="tab">Vegetables</span></p><h2>
  <div class="card" align="center">
    <img src="lettuce.jpg" alt="lettuce" style="width:30%">
    <h3>Lettuce</h3>
    <p class="price">$1/lb</p>
    <p><button>Add to Cart</button></p>
  </div>
  <br>
  <br>

</body>
</html>
