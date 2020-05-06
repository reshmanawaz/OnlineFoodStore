<?php
session_start();
?>
<?php
if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["username"]) && isset($_POST["password"])) {
	$username= $_POST["username"];
	$password= $_POST["password"];
	$fname= $_POST["fname"];
	$lname= $_POST["lname"];

// create connection
$conn = mysqli_connect("localhost", "root", "", "users");
// check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// register user
$sql = "INSERT INTO customers (fname, lname, username, password) VALUES ('$fname','$lname','$username', '$password')";
$results = mysqli_query($conn, $sql);
if ($results) {
echo "The user has been added.";
echo" Redirecting to the login page ...";
header("refresh:1;url=login.php");
} else {
echo mysqli_error($conn);
}
mysqli_close($conn); // close connection

} else {

echo "Form was not submitted.";
}
?>
