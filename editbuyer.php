
<?php include'header.php';?>

	<?php
if(isset($_POST['Submit']))
{
	$con=mysqli_connect("localhost","root","","admin_db");
	
	$name=$_POST['Full_Name'];
	$email=$_POST['Email'];
	
	$dob=$_POST['dob'];
	$gender=$_POST['optionsRadios'];
	$password=$_POST['Password'];
	$cpwd=$_POST['C_Pwd'];
	$address=$_POST['Address'];
	$id=$_REQUEST['id'];
	echo $id;
	
	$query="UPDATE b_regiser set name='$name',email='$email',dob='$dob',gender='$gender',password='$password',C_Password='$cpwd',Address='$address' where id='$id')";
	
	$c=mysqli_query($con,$query);
	if($c)
	{
		
		?>
		<script>
		window.location="buyerlogin.php";
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
				Enter date of Birth<br>
				<input type="date" class="form-control" placeholder="Date-Of-Birth" name="dob" required>
                
				
				 <div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male" checked>Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female">Female
                                                </label>
                                            </div>
                                            
                                        </div>
										 <input type="password" class="form-control" placeholder="Password" name="Password" required>
                <input type="password" class="form-control" placeholder="Confirm Password" name="C_Pwd" required>
										

                <textarea rows="6" class="form-control" placeholder="Address" name="Address"></textarea>
      <button type="submit" class="btn btn-success" name="Submit">Register</button>
</form>

          


                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>