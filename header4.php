

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>online real estate property management system </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>
<marquee><a href = "designning.php"> If Any Loan Agent,Advocate,carpenter,painter,Home Cleaner,Home Designer,Senitization Team want to make profie on our site than contact us</marquee>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
			<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<img src="img\user.jpg">
                        <?php 
							echo $_SESSION['name2'];
						?>
						<i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>edit & view profile</a>
                        </li>
						<li><a href="verificationofuser.php"><i class="fa fa-user fa-fw"></i>verify my profile</a>
                        </li>
                        <li><a href="myads.php"><i class="fa fa-gear fa-fw"></i>my posts</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="slogout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="index.php">Home</a></li>
                
                <li><a href="fagent.php">loanAgents</a></li> 
				<li><a href="fadvocate.php">advocate</a></li> 				
                
				<li><a href="buysalerent.php">Under Construction Properties</a></li>
				<li><li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			
                        other Services
						<i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="furniture.php"><i class="fa fa-user fa-fw"></i>Furniture</a>
                        </li>
						<li><a href="color.php"><i class="fa fa-user fa-fw"></i>color-paint</a>
                        </li>
                        <li><a href="paste.php"><i class="fa fa-gear fa-fw"></i>Paste Control</a>
                        </li>
						<li><a href="sanitization.php"><i class="fa fa-gear fa-fw"></i>Sanitization</a>
                        </li>
						<li><a href="cleaning.php"><i class="fa fa-gear fa-fw"></i>Home cleaning</a>
                        </li>
						<li><a href="designinng.php"><i class="fa fa-gear fa-fw"></i>Home Designing</a>
                        </li>
                        <li class="divider"></li>
                        
                    </ul>
                    <!-- end dropdown-user -->
                </li></li> 
					
                <li><a href="contact.php">Contact US</a></li>
				<li><a href="feedback.php">Feedback</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="images/rrlogo.png" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="buysalerent.php">Sell Your property</a></li>
<li><a href="slogout.php">Logout</a></li>
                
</button></a></li>         

              </ul>
</div>
<!-- #Header Starts -->
</div>