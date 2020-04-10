<html>
<body>
<h3> Please input user name and password<h3>
<form action="/login.php" method="post">

 <input type="text" name="username">
 <input type="password" name="password">
 <input type="submit">
</form>


<?php
 if (isset($_POST["username"]) && isset($_POST["password"])) {
 echo "Username from registration: " . $_POST["username"];
 echo "<br>";
 echo "Password from registration: " . $_POST["password"];
 } else {
 echo "Form was not submitted.";
 }
?>
</body>
</html>
