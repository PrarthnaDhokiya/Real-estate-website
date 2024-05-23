<?php include'header.php';?>
<?php
if(isset($_POST['btn']))
{			
				$fn=$_POST['fname'];				
				$sub=$_POST['sub'];
				$mess=$_POST['message'];
				$date=date("d-m-Y");
		$con=mysqli_connect("localhost","root","","admin_db");
		$q="insert into feedback values(null,'$fn','$sub','$mess','$date')";		
		$c=mysqli_query($con,$q);		
		if($c)
		{
			
			?>
			
			<script>
				alert('Successfully Load');
				window.location="index.php";
			</script>
			<?php
		}
		else
		{
			?>
			
			<script>
			alert('Not load sucessfully');
			</script>
		<?php	
		}
	}
	else
	{
?>
<form action="#" method="post">
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Contact Us</span>
    <h2>Feedback</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">


                <input type="text" class="form-control" placeholder="Full Name" name="fname">                
                <input type="text" class="form-control" placeholder="Subject" name="sub">
                <textarea rows="6" class="form-control" placeholder="Message" name="message"></textarea>
				
				<button type="submit" class="btn btn-success" name="btn">Send Message</button>
          


                
        </div>

</div>
</div>
</div>
</form>
<?php
	}
?>
<?php include'footer.php';?>