<?php
include('includes/headers.php');
$Svariable = $_SESSION['customer_email'];
           

$sql = "select * from customers where customer_email ='$Svariable'";
$asd = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($asd);

echo $data['customer_email'] . "<br />";
echo $data['customer_id'] . "<br />";
echo $data['customer_name'] . "<br />";

?>