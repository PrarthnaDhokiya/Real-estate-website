
<?php include'header.php';?>

	<?php
if(isset($_POST['Submit']))
{
	$con=mysqli_connect("localhost","root","","admin_db");
	
	$name=$_POST['Full_Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$cpwd=$_POST['C_Pwd'];
	$address=$_POST['Address'];
	$doc=$_FILES['document']['name'];
	
	$query="INSERT into register values('','$name','$email','$password','$cpwd','$address','$doc')";
	
	$c=mysqli_query($con,$query);
	if($c)
	{
		move_uploaded_file($_FILES['document']['name'],"img/".$doc);
		?>
		<script>
		window.location="sellerlogin.php";
		alert('record uploded successfully...');
		</script>
		<?php
		}
	else
	{
		?>
		<script>
			alert('something went wrong!!');
			</script>
			<?php
	}
	
	}
?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
	<form action="#"  method="POST">


                <input type="text" class="form-control" placeholder="Full_Name" name="Full_Name" required>
                <input type="email" class="form-control" placeholder="Email" name="Email" required>
                <input type="password" class="form-control" placeholder="Password" name="Password" required>
                <input type="password" class="form-control" placeholder="Confirm Password" name="C_Pwd" required>

                <textarea rows="6" class="form-control" placeholder="Address" name="Address"></textarea>
				"Uplaod the any one GOV ID if you want verified profile"<a href="verificationofuser.php"> click here to Read more About verifid Profile</a>
				<input type="file" class="form-control" name="document">
				     
      <button type="submit" class="btn btn-success" name="Submit">Register</button>
</form>

          


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>