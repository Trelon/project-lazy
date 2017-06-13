<?php $page = "contact"; ?>
   <?php include('../includes/header.php')?>


   
    <div id='contact-container' class="main-container" >
       <!-- CoGraphix Code Goes Here -->  
        
        
<div class="container">
    
    <br>
    <br>
  <h2>Have a question? Contact Us today</h2>
  <form action="" method="post" >
      
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
      
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    
    <div class="form-group">
        <label for="message">Enter Message</label>
        <textarea class="form-control" rows="5" id="massage" name="massage" required></textarea>
    </div>
      
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
    
    <?php
    
  
        if(isset($_POST['name']))
           {
               $name=$_POST['name'];
               $email=$_POST['email'];
               $mess=$_POST['massage'];
                $adminEmail="admin@website.com";
            
            
				 $sub="Contact Us Response";
            //message for the admin
				 $body1=" This is an automated email. Please do not reply to this eamil.
				 
				$name has sent you the message: $mess 
                 you can respond to them $email
				 ";
             //message for the client
                $body2="This is an automated email. Please do not reply to this eamil.
                Thank you for contacting Us. We will contact you as soon as possible.
                
                ";
				 
				 $headers = 'To: User <'.$name.'>'."\r\n";
				 $headers .= "From: No-reply@AssignmentDoc.com\r\n";
				$headers .= "Reply-To: No-reply@AssignmentDoc.com\r\n";
				
            mail($adminEmail,$sub,$body1,$headers);
             mail($email,$sub,$body2,$headers);
            
				 
   					echo '<div class="alert alert-success">
  					<strong>Success!</strong> Message was sent.
					</div>';
            
            
           }
        ?>
    
        </div>
         </div>
 



<?php include('../includes/footer.php')?>