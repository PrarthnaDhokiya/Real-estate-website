<?php
	
	$con=mysqli_connect("localhost","root","","admin_db");
	$query="select * from propertyy where id='$id'";	
	$c=mysqli_query($con,$query);
	while($r=mysqli_fetch_array($c))
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
          <img src="img/<?php echo $row['image1'];?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="img/<?php echo $row['image2'];?>" class="properties" alt="properties" />
         
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
         <div class="item">
          <img src="img/<?php echo $row['image3'];?>" class="properties" alt="properties" />
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item ">
          <img src="img/<?php echo $row['image4'];?>" class="properties" alt="properties" />
          
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

Type:                <?php echo $row['type'];?>        Super Builtup area (ft²):<?php echo $row['pid'];?> 
Badrooms:            <?php echo $row['bdroom'];?>        Carpet Area (ft²):       <?php echo $row['carpet'];?> 
Bathrooms:           <?php echo $row['bathroom'];?>        Total Floors:	       <?php echo $row['florrs'];?> 
Furnishing:          <?php echo $row['furniture'];?>        Car Parking:	       <?php echo $row['carparking'];?> 
Construction Status: <?php echo $row['construcion'];?>        Facing :                 <?php echo $row['facing'];?> 
Listed by:           <?php echo $row['listedby'];?>        Project Name:            <?php echo $row['property_name'];?> 
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
  <span class="glyphicon glyphicon-user"></span> Agent Details
  <p><?php 
							echo $_SESSION['name2'];
						?><br> <li><a href="enc.php"><!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
}


.button4 {border-radius: 12px;}

</style>
</head>
<body>



<button class="button button4">contact with seller</button>


</body>
</html>
</button></a></li>      </p>
  </div>
</div>

    
    <div class="listing-detail">
    

</div>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
  <form role="form">
                <input type="text" class="form-control" placeholder="Full Name"/>
                <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                <input type="text" class="form-control" placeholder="your number"/>
                <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
      <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
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