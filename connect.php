<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['user'];
$password = $_POST['password'];

  // create connection
$conn = mysqli_connect("localhost", "root", "", "users");
  // check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
  // register user
$sql = "INSERT INTO customers (fname, lname, username, password) VALUES
   ('$fname', '$lname','$username', '$password')";
$results = mysqli_query($conn, $sql);
if ($results) {
	echo "The user has been added. Redirecting to the home page now...";
	header("refresh:5;url=http://localhost/homepage.php");
} else {
	echo mysqli_error($conn);
}
mysqli_close($conn); // close connection

?>
