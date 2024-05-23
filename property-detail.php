
<?php include'header3.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Buy</span>
    <h2>Buy</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<h4>Properties</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/4.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹10000000</p> </div>
              </div>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹20000000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/3.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹30000000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/2.jpg" class="img-responsive img-circle" alt="properties"/></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹15000000</p> </div>
              </div>

</div>



<div class="advertisement">
  <h4>Advertisements</h4>
  <img src="images/advertisements.jpg" class="img-responsive" alt="advertisement">

</div>

</div>

<div class="col-lg-9 col-sm-8 ">
<?php
	$id=$_REQUEST['id'];
	
		
			$con=mysqli_connect("localhost","root","","admin_db");
			$q="select * from propertyy where id='$id'";
			$c=mysqli_query($con,$q);
			
			while($row=mysqli_fetch_array($c))
			{
				?>

<h2><?php echo $row['property_title'];?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/<?php echo $row['image1'];?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="images/<?php echo $row['image2'];?>" class="properties" alt="properties" />
         
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <div class="item">
          <img src="images/<?php echo $row['image3'];?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item ">
          <img src="images/<?php echo $row['image4'];?>" class="properties" alt="properties" />
          
        </div>
        <!-- # Item 4 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->

  </div>
  



  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
 <pre>

Type:                <?php echo $row['type'];?>            Super Builtup area (ft²):<?php echo $row['pid'];?> 
Badrooms:            <?php echo $row['bdroom'];?>                Carpet Area (ft²):       <?php echo $row['carpet'];?> 
Bathrooms:           <?php echo $row['bathroom'];?>                	Total Floors:	       <?php echo $row['florrs'];?> 
Furnishing:          <?php echo $row['furniture'];?>     Car Parking:	       <?php echo $row['carparking'];?> 
Construction Status: <?php echo $row['construcion'];?>      Facing :                 <?php echo $row['facing'];?> 
Listed by:           <?php echo $row['listedby'];?>            Project Name:            <?php echo $row['property_name'];?> 
<b>
Description</b>
 <?php echo $row['description'];?> 


</pre>
  
  
  
  
  
  
  
  

  </div>
  

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<p class="price">Price:₹<?php echo $row['price'];?></p>
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span><?php echo $row['proper_address'];?>  </p>
  
  <div class="profile">
  <span class="glyphicon glyphicon-user"></span> Seller Details
  <p>
	<?php 
	$ctmid=$row['id'];
	$con=mysqli_connect("localhost","root","","admin_db");
	$qq="select * from register where id='$ctmid'";
	$cc=mysqli_query($con,$qq);
	while($row=mysqli_fetch_array($cc))
	{
		echo $row['name'];
	
	}
	?>
  </p>
  </div>
</div>
<div class="enquiry">
<?php
if(isset($_POST['Submit']))
{
	$con=mysqli_connect("localhost","root","","admin_db");
	
	$namee=$_POST['Full_Name'];
	$emaill=$_POST['Email'];
	$passwordd=$_POST['Contact_Number'];
	$cpwdd=$_POST['Message'];
	
	
	$query="INSERT into enquiry values('','$namee','$emaill','$passwordd','$cpwdd')";
	
	$c=mysqli_query($con,$query);
	if($c)
	{
		
		?>
		<script>
		window.location="index.php";
		alert('We will Response you soon!!!!');
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
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry to Connect with seller</h6>
  <form role="form" action="#" method="post">
                <input type="text" class="form-control" placeholder="Full Name" name="Full_Name"/>
                <input type="email" class="form-control" placeholder="Email" name="Email"/>
                <input type="text" class="form-control" placeholder="your number" name="Contact_Number"/>
                <textarea rows="6" class="form-control" placeholder="Whats on your mind?" name="Message"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit" name="Submit">Send Message</button>
      </form>
 </div>         
</div>
  </div>
</div>
<?php
			}
		?>
</div>
</div>
</div>
</div>

<?php include'footer.php';?>