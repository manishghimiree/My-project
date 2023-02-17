<?php 
   
   $active='Contact';
   include("includes/header.php");
  
   if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $problems = $_POST['Problems'];

   mysqli_query($con,"INSERT INTO `messege` (`name`, `email`, `problem`, `id`) VALUES ('$name', '$email', '$problems', NULL)");
   echo "<script>alert('messege sent')</script>";

   }

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Contact Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
           
          
   <?php
               include("includes/slidebar.php")
               
               ?>
               
           </div><!-- col-md-3 Finish -->
             <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->           

                   <div class="box-header"><!-- box-header Finish--> 
                       
                        <center><!--center Begin-->                      


                          <h2> Contact Us </h2>
                           
                           <p class="text-muted"><!--text-muted Begin--> 
                               
                               Any query regarding our products, feel free to contact us.WF Store provides 24hr service to our customer.
                        
                           </p><!--text-muted Finish--> 
                            
                            
                        </center><!--center Finish-->
                        
                        <form action="contact.php" method="post"><!--form Begin -->                  

                            <div class="form-group"><!--form-group Begin -->
                               
                               <label>Name</label>
                               <input type="text" class="form-control" name="name" required>
                                
                            </div><!--form-group Finish -->
                            <div class="form-group"><!--form-group Begin -->
                               
                               <label>Email</label>
                               <input type="email" class="form-control" name="email" required>
                                
                            </div><!--form-group Finish -->
                        
                               <div class="form-group"><!--form-group Begin -->
                               
                               <label>Problems</label>
                               <input type="text" class="form-control" name="Problems" required>
                                
                            </div><!--form-group Finish -->
                             
                        
                            
                            <div class="text-center"><!--text-center Begin -->
                                
                                <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-user-md"></i> Send
                                </button>
                                
                            </div><!--text-center Finish -->
                             
                        </form><!--form  Finish-->
                       
                   </div><!-- box-header Begin -->                  
                       

                   
               </div><!--box  Finish -->
               
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