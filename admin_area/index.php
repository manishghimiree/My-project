<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        $get_admin = "select * from admins where admin_email='$admin_session'";
        $run_admin = mysqli_query($con,$get_admin);
        $row_admin = mysqli_fetch_array($run_admin);
        $admin_id = $row_admin['admin_id'];
        $admin_name = $row_admin['admin_name'];
        $admin_email = $row_admin['admin_email'];
         $admin_contact = $row_admin['admin_contact'];
        $get_products = "select * from products";
         $run_products = mysqli_query($con,$get_products);
         $count_products = mysqli_num_rows($run_products);
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from pending_orders";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fashion Store Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }
        if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                    }

                   

                    if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                    }
        if(isset($_GET['delete_product'])){
                         
                        include("delete_product.php");
                        
                }
        if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }
        
          }   if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }   if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
    }   if(isset($_GET['delete_p_cat'])){
                        
                        include("delete_p_cat.php");
                        
                }   if(isset($_GET['edit_p_cat'])){
                        
                        include("edit_p_cat.php");
                        
                }
                    if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                } 
                  if(isset($_GET['view_cats'])){
                        
                        include("view_cats.php");
                        
                } 
                     if(isset($_GET['edit_cat'])){
                        
                        include("edit_cat.php");
                        
                }   if(isset($_GET['delete_cat'])){
                        
                        include("delete_cat.php");
                        
                }
                  if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                  }
                       
                      if(isset($_GET['delete_customer'])){
                        
                        include("delete_customer.php");
                        
                
                        
                }  


                if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                } 
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php  ?>