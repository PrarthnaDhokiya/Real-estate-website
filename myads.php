<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();

if(!isset($_SESSION['name2']))
{
	header("location:sellerlogin.php");
}								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Listed Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">User Listed Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		<!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container"><!-- FOR MORE PROJECTS visit: codeastro.com -->
                    <div class="row mb-5">
						<div class="col-lg-12">
							<h2 class="text-secondary double-down-line text-center">User Listed Property</h2>
							
                        </div>
					</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
					<table class="table table-hover"> 
							<thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Type</th>
											<th>property name</th>
											<th>construcion</th>
											<th>facing</th>
											<th>Listed By</th>
											<th>Image</th>
											
                                            <th>Action</th>
											<th>Verified</th> 
                                        </tr>
                                    </thead>
                                    
										<?php
										
										echo $id =$_SESSION['sid'];
			$con=mysqli_connect("localhost","root","","admin_db");
			$q="select * from propertyy where user_id='$id'";
			$c=mysqli_query($con,$q);
			
			while($row=mysqli_fetch_array($c))
			{
				?>
					<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['type'];?></td>
					<td><?php echo $row['property_name'];?></td>
					<td><?php echo $row['construcion'];?></td>
					<td><?php echo $row['facing'];?></td>
					<td><?php echo $row['listedby'];?></td>
					
					<td><?php echo $row['image1'];?>
					<img src="img/<?php echo $row['image2'];?>" height=50 width=50/></td>
					
					
					<td><a class="btn btn-info" href="submitpropertyupdate.php?id=<?php echo $row['id'];?>">Update</a>
								<a class="btn btn-danger" href="submitpropertydelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
								
					
					
					<td>
									<?php 
									if($row['is_verifid']=="0")
									{
										?>
										<a href="verifyp.php?id=<?php echo $row['id'];?>">Not</a>
									<?php 
									}
									else
									{
										echo "Yes";
									}
									?>
									</td>
					</tr>
					
					</tr>
				<?php
			}
		?>
		
                                  
							 </tbody>
							
						</table>
            </div>
        </div>
	<!--	Submit property   -->
        
        
        <!--	Footer   start-->
		
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>