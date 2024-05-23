
<?php
if(isset($_POST['upload']))
{
	$con=mysqli_connect("localhost","root","","admin_db");
	
	
	$cno=$_FILES['image']['name'];
	
	$query="INSERT into verify values('','$cno')";
	
	$c=mysqli_query($con,$query);
	if($c)
	{
		move_uploaded_file($_FILES['image']['tmp_name'],"img/".$cno);
		?>
		<script>
		window.location="index.php";
		alert('Verification in progress');
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



<html>
<body text="green">
<form action="#" method="post" enctype="multipart/form-data">
<div class="form-group">
                                            <h1>Upload  any one Gov ID:</h1>&nbsp;&nbsp;&nbsp;
                                           <input type="file" name="image" class="form-control" placeholder="add here"><br><br>
										  &nbsp;&nbsp;&nbsp; <input type="submit" class="btn btn-primary" name="upload" value="upload">
                                        <button type="reset" class="btn btn-success">Reset</button>
										   </div>
										   </body>
										   </html>