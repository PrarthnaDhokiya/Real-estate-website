<?php

	$id=$_REQUEST['id'];
	$con=mysqli_connect("localhost","root","","user_pannel");
	
	
	
	$query="Delete from seller where f_id='$id'";
	
	$c=mysqli_query($con,$query);
	if($c)
	{
		?>
		<script>
		window.location="buysalerent.php";
		
		
		</script>
		<?php
		}
	else
	{
		?>
		<script>
		window.location="buysalerent.php";
			alert('something went wrong!!');
			</script>
			<?php
	}
	
	


?>

