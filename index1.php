<?php

include 'setting.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURCHASE </title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div style="display: flex;">
    <div class="card" style="width:500px">
        <img src="esewa.png" alt="IMS" class ="card-img-top">
        <div class="card-body">
        <div class="card-title">
                
        </div>
        <div class="card-text">  </div>
        
            <form action=<?php echo $epay_url?> method="POST">
            <input value="100" name="tAmt" type="hidden">
            <input value="90" name="amt" type="hidden">
            <input value="5" name="txAmt" type="hidden">
            <input value="2" name="psc" type="hidden">
            <input value="3" name="pdc" type="hidden">
            <input value="epay_payment" name="scd" type="hidden">
            <input value="<?php echo $pid?>" name="pid" type="hidden">
            <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
            <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
            <input value="PAY WITH ESEWA" type="submit" class="btn btn-success">
            </form>
        
        </div>
        
        </div>
        <div class="card" style="width:500px">
            <img src="cash-delivery.png" alt="IMS" class ="card-img-top">
            <div class="card-body">
            <div class="card-title">
                    
            </div>
            <div class="card-text">  </div>
            
                <!-- <form action=<?php echo $epay_url?> method="POST">
                <input value="100" name="tAmt" type="hidden">
                <input value="90" name="amt" type="hidden">
                <input value="5" name="txAmt" type="hidden">
                <input value="2" name="psc" type="hidden">
                <input value="3" name="pdc" type="hidden">
                <input value="epay_payment" name="scd" type="hidden">
                <input value="<?php echo $pid?>" name="pid" type="hidden">
                <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
                <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
                <input value="PAY WITH CASH" type="submit" class="btn btn-success">
                </form> -->

                <button class="alertshow" class="btn btn-primary" >Pay with Cash</button>


    <script>
    const alerts =document.querySelector('.alertshow')
    alerts.addEventListener('click',()=>{
        alert('Thank You for shopping ,Please pay by cash on delivery')
        window.location.href="/shopping/clear.php";
    })
     </script>
            </div>
            
            </div>

</div>


</body>








    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>









