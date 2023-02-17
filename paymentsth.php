<?php
session_start();
include('includes/db.php');
if ($con){
    echo " ";
}
$product_id = $_GET['id'];
$qty = $_GET['var'];
$size = $_GET['size'];
$price = $_GET['price'];
$customer_email = $_SESSION['customer_email'];

$data = mysqli_fetch_assoc(mysqli_query($con,"select * from customers where customer_email= '$customer_email'"));
$customer_id = $data['customer_id'];

$a = "INSERT INTO `customer_orders` (`order_id`, `customer_id`, `qty`, `size`, `product_id`) VALUES (NULL, '$customer_id', '$qty', '$size', '$product_id')
";
$b = mysqli_query($con,$a);

include('index1.php');






