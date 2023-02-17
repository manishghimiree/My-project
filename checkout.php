<?php 

    $active='Account';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/slidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
        
           
           <?php          
           
           if(!isset($_SESSION['customer_email'])){


               
               include("customer/customer_login.php");
               
           }else{
               
               include("payment_options.php");
               
               
                              
                           
           


            // yaha beautifying garne



           $Svariable = $_SESSION['customer_email'];
           
           $sql = "select * from customers where customer_email ='$Svariable'";
           $asd = mysqli_query($con, $sql);
           $data = mysqli_fetch_assoc($asd);
        

           
echo "<table class = 'table table-striped'>
<tr>
<th>Name</th>
<th>Customer ID</th>
<th>email</th>
<th>contact</th>
<th>address</th>
</tr>";

    echo "<tr><td>".$data['customer_name']."</td>";
    echo "<td>".$data['customer_id']."</td>";
    echo "<td>".$data['customer_email']."</td>";
    echo "<td>".$data['customer_contact']."</td>";
    echo "<td>".$data['customer_address']."</td></tr>";
  echo"</table>";
               
           }
           
           ?>
           
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>