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
@import "compass/css3";

.performance-facts {
  border: 1px solid black;
  position: absolute;
  top: 570px;
  left: 120px;
  margin: 12px;
  float: left;
  width: 280px;
  padding: 0.2rem;
  table {
    border-collapse: collapse;
  }
}

.performance-facts__header {
  border-bottom: 10px solid black;
  padding: 0 0 0.25rem 0;
  margin: 0 0 0.5rem 0;
  p {
    margin: 0;
  }
}
.performance-facts__table {
  width: 100%;
  thead tr {
    th, td {
      border: 1;
    }
  }
  th, td {
    font-weight: normal;
    text-align: left;
    padding: 0.25rem 0;
    border-top: 1px solid black;
    white-space: nowrap;
  }
  td {
    &:last-child {
      text-align: right;
    }
  }
  .blank-cell {
    width: 1rem;
    border-top: 0;
  }
  .thick-row {
    th, td {
      border-top-width: 6px;
    }
  }
}
.small-info {
  font-size: 0.9rem;
}

.performance-facts__table--small {
  @extend .performance-facts__table;
  border-bottom: 1px solid #999;
  margin: 0 0 0.5rem 0;
  thead {
    tr {
      border-bottom: 2px solid black;
    }
  }
  td {
    &:last-child {
      text-align: left;
    }
  }
  th, td {
    border: 1;
    padding: 0;
  }
}

.performance-facts__table--grid {
  @extend .performance-facts__table;
  margin: 0 0 0.5rem 0;
  td {
    &:last-child {
      text-align: left;
      &::before {
        content: "•";
        font-weight: bold;
        margin: 0 0.25rem 0 0;
      }
    }
  }
}

.text-center {
  text-align: center;
}
.thick-end {
  border-bottom: 20px solid black;
}
.thin-end {
  border-bottom: 1px solid black;
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
      <img src="logo.png" alt="Logo" width="350" height="350">
    </a>


<form class="example" action="/action_page.php">
  <button type="submit">Search<i class="fa fa-search"></i></button>
  <input type="text" placeholder="Search products.." name="search">

</form>
<a class="cart" href="cart.php">
  <span style="float:right">0</span>
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
<h2><h1><span class="tab">Fruits</span></h1><h2>
  <div class="card" align="center">
    <img src="banana.png" alt="Banana" style="width:30%">
    <h3>Banana</h3>
    <p class="price">$1/lb</p>
    <form action="connect-fcart.php" method="post">
      <p><button>Add to Cart</button></p>
      <input type="hidden" name="id" value="Banana" />
      <input type="hidden" name="price" value="1" />
      <input type="hidden" name="cart" value="1" />
      <input type="hidden" name="weight" value="1" />
    </form>
  </div>
  <br>
  <br>
  <section class="performance-facts">
              <b>Nutrition Facts:</b>
              <tr>
              <p colspan="2" class="small-info">
            Serving Size: 1 Banana (118g)
          </p>
          <p colspan="2" class="small-info">
            Calories per serving: 105
          </p>
          </tr>

    <table class="performance-facts__table--grid">
      <tbody>
        <tr>
          <tr>
            <tr>
              <tr>
          <td colspan="2">
            Vitamin A:
            2%
          </td>
          <td>
            Vitamin C:
            17%
          </td>
        </tr>
        </tr>
      </tr>
    </tr>
        <tr class="thin-end">
          <td colspan="2">
            Calcium:
            1%
          </td>
          <td>
            Iron:
            2%
          </td>
        </tr>
      </tbody>
    </table>

    <table class="performance-facts__table--small small-info">
      <thead>
        <tr>
          <td colspan=1></td>
          <th>Breakdown:</th>
          <th>Amount:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th colspan="2">Total Fat</th>
          <td>0g</td>
        </tr>
        <tr>
          <td class="blank-cell"></td>
          <th>Saturated Fat</th>
          <td>0g</td>
        </tr>
        <td class="blank-cell"></td>
        <th>Trans Fat</th>
        <td>0g</td>
      </tr>
        <tr>
          <th colspan="2">Cholesterol</th>
          <td>0mg</td>
        </tr>
        <tr>
          <th colspan="2">Sodium</th>
          <td>2mg</td>
        </tr>
        <tr>
          <th colspan="2">Total Carbohydrate</th>
          <td>27g</td>
        </tr>
        <tr>
          <th colspan="2">Dietary Fiber</th>
          <td>3g</td>
        </tr>
        <tr>
          <th colspan="2">Sugar</th>
          <td>14g</td>
        </tr>
      </tbody>
    </table>
  <p class="small-info" style = margin: auto;>* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs *</p>
  </section>

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

<div class="Footer">
  <p class="left">Customer Service<br />Call: 408-666-6666</p>
  <p class="right">Location<br />66 North First St San Jose, CA 95114</p>
  <p class="center">Store Hours<br />M-Th: 9am - 9pm | F-Sun: 9am - 12am</p>
  <h4 class="copyright">© 2020 Fresh Food, lnc </h4>
</div>
</html>

</html>
</html>
