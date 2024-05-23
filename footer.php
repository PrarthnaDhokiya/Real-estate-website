<?php

if(isset($_GET["signin"]))
{
	$email=$_GET["Email"];
	$pswd=$_GET["Password"];
	$mpswd=($pswd);
	
	$con=mysqli_connect("localhost","root","","admin_db");
	
	$q="select * from b_register where email='$email' AND password='$mpswd'";
	$c=mysqli_query($con,$q);
	$r=mysqli_num_rows($c);
	if($r==0)
	{
		?>
		<script>
			alert('Invalid username password');
			</script>
			<?php
	}
	else{
		$_SESSION['user']=$email;
		while($row=mysqli_fetch_array($c))
		{
			$_SESSION['name2']=$row['name'];
			
			
			
		}
	
		
		?>
		<script>
			window.location="index.php";
			alert('login successfull');
			</script>
	<?php
	}
	}
?>
<div class="footer">

<div class="container">



<div class="row">
 <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="feedback.php">Feedback</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="agents.php">Agents</a></li>         
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="blog.php">Help Center</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Enter Your email address" class="form-control">
                                <button class="btn btn-success" type="button">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>
<div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Bootstrap Realestate Inc.</b><br>
<span class="glyphicon glyphicon-map-marker"></span> Rajkot <br>
<span class="glyphicon glyphicon-envelope"></span> pkh7@googlegroups.com<br>
<span class="glyphicon glyphicon-earphone"></span> 9662684475</p>
            </div>
        </div>
<p class="copyright">Copyright 2013. All rights reserved.	</p>
            
            
            
            
            

             
        </div>



</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form action="#" method="GET">
		
        <div class="form-group">
		
	
          <label class="sr-only" for="Email">Email address</label>
           <input type="email" class="form-control" placeholder="Enter Email" name="Email" required>
		   
        </div>
        <div class="form-group">
		
          <label class="sr-only" for="Password">Password</label>
          <input type="password" class="form-control" placeholder="password" name="Password" required>
		  
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" required> I Accept terms & conditios.
          </label>
        </div>
        <button type="submit" class="btn btn-success" name="signin">Sign in</button>
		
      </form>    
         Don't have an account?<a href="buyerregister.php">Register</a>      
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='buyerregister.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>



