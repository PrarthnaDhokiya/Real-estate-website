<?php

if(isset($_GET["signin"]))
{
	$email=$_GET["Email"];
	$pswd=$_GET["Password"];
	$mpswd=($pswd);
	
	$con=mysqli_connect("localhost","root","","admin_db");
	
	$q="select * from register where Email='$email' AND password='$mpswd'";
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
			$_SESSION['sid']=$row['id'];
			
		}
	
		
		?>
		<script>
			window.location="sf2.php";
			alert('login successfull');
			</script>
	<?php
	}
	}
?>
<div class="footer">

<div class="container">



<div class="row">
            
            
            
            
            

             
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
            <input type="checkbox" required> <a href="privacypolicy.php">Accept privacy policy</a>
          </label>
        </div>
        <button type="submit" class="btn btn-success" name="signin">Sign in</button>
		
      </form>    
         Don't have an account?<a href="register.php">Register</a>      
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.php'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>
</html>



