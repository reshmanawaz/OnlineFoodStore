<?php
session_start();


if(!isset($_GET["id"])){
    echo "Product ID Missing";
    echo" Redirecting to the home page now...";
    header("refresh:1;url=homepage.php");
}


$conn = mysqli_connect("localhost", "root", "", "users");
$sql = "SELECT * FROM products where id=".$_GET["id"];
$results = mysqli_query($conn, $sql);

if ($results) {
    $r1 = mysqli_fetch_assoc($results);
    if($r1['inventory'] < 1){
        echo "Out Of Stock";
        echo"  Redirecting to the home page now...";
        header("refresh:1;url=homepage.php");

    }
    else{
        $sql = "SELECT * FROM cart where product_id=".$_GET["id"];
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results)>0) {
            
            $r2 = mysqli_fetch_assoc($results);
            $count = $r2['count'] + 1;
            $sql_database = "UPDATE cart SET count =  $count where  product_id=".$_GET["id"];
            $result3 = mysqli_query($conn, $sql_database);
        }
        else{
            $id = $_GET["id"];
            $sql = "INSERT INTO cart (product_id, count) VALUES ('$id',1)";
            $results = mysqli_query($conn, $sql);
        }



        $updatedStock = $r1['inventory'] - 1;
        $sql_database = "UPDATE products SET inventory =  $updatedStock  where id=".$_GET["id"];
        $result3 = mysqli_query($conn, $sql_database);


        echo "Added Successfully";
        echo" Redirecting to the cart now...";
        header("refresh:1;url=cart.php");
    }
    
}
else{
    echo "Product ID Missing";
    echo" Redirecting to the home page now...";
    header("refresh:1;url=homepage.php");
}


mysqli_close($conn); // close connection


 ?>
