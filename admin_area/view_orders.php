<?php
$conn = mysqli_connect("localhost","root","","shopping");

$sql = "select * from customer_orders";
$query = mysqli_query($conn,$sql);



echo "<table class = 'table table-striped'>
<tr>
<th>Order ID</th>
<th>Customer ID</th>
<th>Quantity</th>
<th>Size</th>
<th>Product ID</th>
</tr>";

while($row = mysqli_fetch_assoc($query)){
    echo "<tr><td>".$row['order_id']."</td>";
    echo "<td>".$row['customer_id']."</td>";
    echo "<td>".$row['qty']."</td>";
    echo "<td>".$row['size']."</td>";
    echo "<td>".$row['product_id']."</td></tr>";
  }
  echo"</table>";
?>