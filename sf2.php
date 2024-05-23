


<?php include'header4.php';
if(!isset($_SESSION['user']))
{
	?>
	<script>
	alert('You have to login first');
	window.location="sellerlogin.php";
	</script>
	<?php
}?>

	<?php
	
if(isset($_POST['upload']))
{
	$cn=mysqli_connect("localhost","root","","admin_db");
	
	$pt=$_POST['propertyT'];
	
$type=$_POST['cat'];
$br=$_POST['bedroom'];
$bh=$_POST['bathroom'];
$fur=$_POST['furniture'];
$con=$_POST['const'];
$list=$_POST['listedby'];
$carp=$_POST['carp'];
$face=$_POST['facing'];
$pid=$_POST['pid'];
$carpet=$_POST['carpet'];
$main=$_POST['maintenance'];
$florrs=$_POST['florrs'];
$fno=$_POST['fno'];
$pname=$_POST['pname'];
$des=$_POST['description'];
$price=$_POST['price'];
$img1==basename($_FILES['image1']['name']);
$temp_name=$_FILES['image1']['tmp_name'];
$img2=basename($_FILES['image2']['name']);
$temp_name2=$_FILES['image2']['tmp_name2'];
$img3=basename($_FILES['image3']['name']);
$temp_name3=$_FILES['image3']['tmp_name3'];
$img4=basename($_FILES['image4']['name']);
$temp_name4=$_FILES['image4']['tmp_name4'];
$img5=basename($_FILES['image5']['name']);
$temp_name5=$_FILES['image5']['tmp_name5'];

$nara=$_POST['areaa'];
$padd=$_POST['paddress'];
$radio=$_POST['optionsRadios'];
$check=$_POST['check'];
$cp=$_POST['cp'];
$scp=$_POST['scon'];
echo $useruid = $_SESSION['sid'];


	
	
	
	$query="INSERT into propertyy values('','$cid','$pt','$type','$br','$bh','$fur','$con','$list','$carp','$face','$pid','$carpet','$main','$florrs','$fno','$pname','$des','$price','$img1','$img2','$img3','$img4','$img5','$nara','$padd','$radio','$check','$cp','$scp','0','$useruid')";
	
	$c=mysqli_query($cn,$query);
	if($c)
	{
		
		move_uploaded_file($temp_name,"images/$img1");
		move_uploaded_file($temp_name2,"images/$img2");
		move_uploaded_file($temp_name3,"images/$img3");
		move_uploaded_file($temp_name4,"images/$img4");
		move_uploaded_file($temp_name5,"images/$img5");
		
	//move_uploaded_file($temp_name,"admin/property/$aimage");
		
		//move_uploaded_file($_FILES['image2']['name'],"img/".$img2);
		//move_uploaded_file($_FILES['image3']['name'],"img/".$img3);
		//move_uploaded_file($_FILES['image4']['name'],"img/".$img5);
		//move_uploaded_file($_FILES['image5']['name'],"img/".$img5);
		
		?>
		<script>
		alert('record uploaded sucessfully!!');
		window.location="index.php";
		
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

<!-- Form Elements -->
                    <div class="panel panel-default">
					
                        <div class="panel-heading">
                            Post Your Ad
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>propery title</label>
                                            <input type="text" name="propertyT" class="form-control">
                                            <p class="help-block">Example 2 BHK house with swimming pool </p>
                                        </div>
										<div class="form-group">
                                            
											<select name="cat">
	<option>Property type</option>
<?php
		$con=mysqli_connect("localhost","root","","admin_db");
	    $q="select * from category";
	    $c=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($c))
													{
														?>
														<option value="<?php echo $row['id'];?>">
														<?php echo $row['category'];?>
														</option>
														
														<?php
													}
													?>
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            
											<select name="bedroom">
	<option>Bedrooms</option>
	<?php
		$con=mysqli_connect("localhost","root","","admin_db");
	    $q="select * from bedroom";
	    $c=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($c))
													{
														?>
														<option value="<?php echo $row['id'];?>">
														<?php echo $row['num'];?>
														</option>
														
														<?php
													}
													?>
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            
											<select name="bathroom">
	<option>Bathrooms</option>
	<?php
		$con=mysqli_connect("localhost","root","","admin_db");
	    $q="select * from bathroom";
	    $c=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($c))
													{
														?>
														<option value="<?php echo $row['id'];?>">
														<?php echo $row['num'];?>
														</option>
														
														<?php
													}
													?>
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            
											<select name="furniture">
	<option>Furnishing</option>
	<option>Furnished</option>
	<option>semi-furnished</option>
	<option>Unfurnished</option>
	
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            
											<select name="const">
	<option>Construction status</option>
	<option>New Launch</option>
	<option>Ready to Move</option>
	<option>Under Construction</option>
	
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            
											<select name="listedby">
	<option>Listed BY</option>
	<option>Builder</option>
	<option>Dealer</option>
	<option>Qwner</option>
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            
											<select name="carp">
	<option>Car Parking</option>
	<?php
		$con=mysqli_connect("localhost","root","","admin_db");
	    $q="select * from carparking";
	    $c=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($c))
													{
														?>
														<option value="<?php echo $row['id'];?>">
														<?php echo $row['category'];?>
														</option>
														
														<?php
													}
													?>
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            
											<select name="facing">
	<option>Facing</option>
	<option>East</option>
	<option>North</option>
	<option>North-East</option>
	<option>North-West</option>
	<option>South</option>
	<option>South-East</option>
	<option>South-West</option>
	<option>West</option>
	
	
													
	
	</select>
                                            
                                        </div>
										<div class="form-group">
                                            <label>Super Builtup area (ft²)</label>
                                            <input type="text" name="pid" class="form-control">
                                            
                                        </div>
										<div class="form-group">
                                            <label>Carpet Area (ft²)</label>
                                            <input type="text" name="carpet" class="form-control">
                                          
                                        </div>
										<div class="form-group">
                                            <label>Maintenance (Monthly)</label>
                                            <input type="text" name="maintenance" class="form-control">
                                            
                                        </div>
										<div class="form-group">
                                            <label>Total Floors</label>
                                            <input type="text" name="florrs" class="form-control" >
                                            
                                        </div>
										<div class="form-group">
                                            <label>Floor No</label>
                                            <input type="text" name="fno" class="form-control">
                                           
                                        </div>
										<div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" name="pname" class="form-control">
                                            
                                        </div>
										<div class="form-group">
                                            <label>Description </label>
                                            <input type="text" name="description" class="form-control">
                                           
                                        </div>
										<div class="form-group">
                                            <label>Set a Price</label>
                                            <input type="text" name="price" class="form-control">
                                           
                                        </div>
										<div class="form-group">
                                            <label>Upload Up to 5 Photos</label>
                                           <input type="file" name="image1" class="form-control" required>
										   <input type="file" name="image2" class="form-control" required>
										   <input type="file" name="image3" class="form-control">
										   <input type="file" name="image4" class="form-control">
										   <input type="file" name="image5" class="form-control">
                                            
                                        </div>
										
										<div class="form-group">
                                            <label>Neighborhood/Area</label><br>
											<select name="areaa">
                                           <option>Area</option>
                <?php
		$con=mysqli_connect("localhost","root","","admin_db");
	    $q="select * from area";
	    $c=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($c))
													{
														?>
														<option value="<?php echo $row['id'];?>">
														<?php echo $row['area'];?>
														</option>
														
														<?php
													}
													?>
                                            </select>
                                        </div>
										
										<div class="form-group">
                                            <label> Proper address</label>
                                            <input type="text" name="paddress" class="form-control">
                                            <p class="help-block">Example laxmi nagar chock, near chandress vadi rajkot 36004</p>
                                        </div>
                                       
										 <div class="form-group">
                                            <label>property posted for</label>
                                            
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="Sell">Sell
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="Rent">Rent
                                                </label>
                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label>nearly location</label>
                                         
                                            <div class="checkbox">
											
                                                <label>
                                                    <input type="checkbox" name="check" value="at main road side">at main road side
                                                </label>
                                            </div> 
											<div class="checkbox">
											
                                                <label>
                                                    <input type="checkbox" name="check" value="at under society / street">at under society / street
                                                </label>
                                            </div> 
										   <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="check" value="close to market">close to market
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="check" value="close to hospital">close to hospital
                                                </label>
                                            </div>
											<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="check" value="private garden">private garden
                                                </label>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label>what are the possibilities</label>
                                            <div class="checkbox">
											
                                                <label>
                                                    <input type="checkbox" name="cp" value="">good public transformation
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="cp" value="">easy cab/auto avalable
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="cp" value="">safe at night
                                                </label>
                                            </div>
											<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="cp" value="">well-maintained road
                                                </label>
                                            </div>
											<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="cp" value="">alean & hygienic
                                                </label>
                                            </div>
											
										
                                        </div>
                                            
					
                                        
                                        
                                       
                                       
                                      
                                       
                                    
         </div>
                                <div class="col-lg-6">
                                    <h1>Review Your Details</h1>
                                    <div class="form-group">
                                            <label>Name:</label>
                                            <?php 
							echo $_SESSION['name2'];
						?>
                                          
                                        </div>
										
											
											
                                            
                                            
                                       
										<div class="form-group">
                                            <label>seller contect no:</label>
											<input type="text" name="scon"> 
                                            
                                            
                                        </div>
										  <div class="form-group">
                                            <label>ownership</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="or" id="optionsRadios1" value="free holder" checked>free holder
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="or" id="optionsRadios2" value="goverment holder">goverment holder
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="or" id="optionsRadios3" value="unlegelly holder"> unlegelly holder
                                                </label>
                                            </div> <br/>
											
											 <input type="submit" name="upload" class="btn btn-primary" value="upload"> <br/>  <br/> 
                                        <button type="reset" class="btn btn-success">Reset Button</button>
                                        </div>
                                    
                                   
                                </div>
								
                            </div>
                        </div>
                    </div>
					</form>
                     <!-- End Form Elements -->
					 <?php include'footer.php';?>