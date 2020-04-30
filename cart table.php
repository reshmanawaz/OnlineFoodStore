<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<style>
table {
border-collapse: collapse;
width: 50%;
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
<body>
<table>
<tr>
<th>Item</th>
<th>Quantity</th>
<th>Price</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "users");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT , product_id, product_stock, product_price FROM inventory";
$result = $conn->query($sql);
if($result -> num_row > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["product_id"]. "</td><td>" . $row["product_stock"] . "</td><td>"
. $row["product_price"]. "</td></tr>";
}
echo "</table>";
}
else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
