<html>
<body>

<h2>Create new Account</h2>

<form action="connect.php">
  <p align="center">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"
  </p>
  <p align="center">
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"
  </p>
  <p align="center">
    <label for="user">Username:</label>
    <input type="text" id="user" name="user"
  </p>
  <p align="center">
    <label for="pw">Password:</label>
    <input type="text" id="password" name="password"
  </p>
  <br>
  <br>
  <input type="submit" value="Submit">
</form>



</body>
</html>


<?php

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['user'];
  $password = $_POST['password'];

  //Database connection

    $conn = new mysqli('localhost', 'root', '','customers');
    if($conn->connect_error){
      die('Connection Failed : ', $conn->connect_error)
    } $stmt = $conn->prepare("insert into registration(fname, lname, user, password) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $username, $password);
    $stmt->execute();
    echo"Registration Successful!";
    $stmt->close();
    $conn->close();
 ?>
