
<?php include'header3.php';
if(!isset($_SESSION['buyer']))
{
	?>
	<script>
	alert('You have to login first');
	window.location="buyerlogin.php";
	</script>
	<?php
}?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Buy, Sale & Rent</span>
    <h2>Buy, Sale & Rent</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for properties</h4>
   <form method="GET" action="#">
	

    <div class="row">
            <div class="col-lg-6">
              <select class="form-control" name="optionsRadios">
                
	
	<?php
		$con=mysqli_connect("localhost","root","","admin_db");
	    $q="select * from p_s_f";
	    $c=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($c))
													{
														?>
														<option value="<?php echo $row['id'];?>">
														<?php echo $row['s_cat'];?>
														</option>
														
														<?php
													}
													?>
	
													
	

              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Price</option>
                <?php
		$con=mysqli_connect("localhost","root","","admin_db");
	    $q="select * from price";
	    $c=mysqli_query($con,$q);
		while($row=mysqli_fetch_array($c))
													{
														?>
														<option value="<?php echo $row['id'];?>">
														<?php echo $row['price'];?>
														</option>
														
														<?php
													}
													?>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
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
          </div>
		   <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
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
          </div>
          <button class="btn btn-primary">Find Now</button>

  </div>



<div class="hot-properties hidden-xs">
<h4> Properties</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹1,0000000</p> </div>
              </div>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹30000000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹150000000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">₹20000000</p> </div>
              </div>

</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: 12 of 100 </div>
  
</div>
<div class="row">

     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
	  <?php
			$con=mysqli_connect("localhost","root","","admin_db");
			$q="select * from propertyy";
			$c=mysqli_query($con,$q);
			
			while($row=mysqli_fetch_array($c))
			{
				?>
      <div class="properties">
        <div class="image-holder"><img src="images/<?php echo $row['image1'];?>" height=150 width=150/>
          
        </div>
        <h4><a href="#"><?php echo $row['property_title'];?></a></h4>
        <p class="price">Price:₹<?php echo $row['price'];?></p>
		<p class="price"><span class="glyphicon glyphicon-map-marker"></span><?php echo $row['proper_address'];?></p>
        
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $row['id'];?>">View Details</a>
		
      </div>
	  <?php
			}
		?>
      </div>
      <!-- properties -->


      
      <div class="center">
<ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
</div>

</div>
</div>
</div>
</div>
</div>

<?php include'bfooter1.php';?>