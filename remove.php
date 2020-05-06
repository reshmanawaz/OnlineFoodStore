<?php
session_start();


if(!isset($_GET["id"])){
    echo "Product ID Missing";
    echo" Redirecting to the cart now...";
    header("refresh:1;url=cart.php");
}


$conn = mysqli_connect("localhost", "root", "", "users");
$sql = "SELECT * FROM products where id=".$_GET["id"];
$results = mysqli_query($conn, $sql);

if ($results) {

        $r1 = mysqli_fetch_assoc($results);
        $sql = "SELECT * FROM cart where product_id=".$_GET["id"];
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results)>0) {
        
            $r2 = mysqli_fetch_assoc($results);
            $count = $r1['inventory'] + $r2['count'];
            $sql_database = "UPDATE products SET inventory =  $count where  id=".$_GET["id"];
            $result3 = mysqli_query($conn, $sql_database);
            $sql_database = "Delete from  cart  where product_id=".$_GET["id"];
            $result3 = mysqli_query($conn, $sql_database);

            echo "Removed Successfully";
            header("refresh:1;url=cart.php");
        }
        else{
            echo "Nothing Added to Remove";
            header("refresh:1;url=cart.php");
        }
    
}
else{
    echo "Product ID Missing";
    echo" Redirecting to the cart now...";
    header("refresh:1;url=cart.php");
}


mysqli_close($conn); // close connection


 ?>
