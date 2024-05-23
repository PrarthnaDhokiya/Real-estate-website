<?php

	$id=$_REQUEST['id'];
	$con=mysqli_connect("localhost","root","","admin_db");
	
	
	
	$query="Delete from propertyy where id='$id'";
	
	$c=mysqli_query($con,$query);
	if($c)
	{
		?>
		<script>
		window.location="myads.php";
		alert('deleted');
		
		
		</script>
		<?php
		}
	else
	{
		?>
		<script>
		window.location="myads.php";
			alert('something went wrong!!');
			</script>
			<?php
	}
	
	


?>

