<?php
session_start();
if(isset($_POST["Login"]))
{
	$email=$_POST["email"];
	$pswd=$_POST["password"];
	$mpswd=($pswd);
	
	$con=mysqli_connect("localhost","root","","admin_db");
	
	$q="select * from admin_login_tbl where usename='$email' AND pass='$mpswd'";
	$c=mysqli_query($con,$q);
	$r=mysqli_num_rows($c);
	if($r==0)
	{
		?>
		<script>
			alert('Invalid username password');
			</script>
			<?php
	}
	else{
		$_SESSION['admin']=$email;
		while($row=mysqli_fetch_array($c))
		{
			$_SESSION['name']=$row['name'];
		}
		
		?>
		<script>
			window.location="indexx.php";
			alert('login successfull');
			</script>
	<?php
	}
	
	
	
	
	
	
	/*if($email=="prarthnadhokiya07@gmail.com" && $pswd="prathna2021")
	{
		?>
		<script>
			window.location="indexx.php";
			</script>
	<?php
	}
	else
	{
		?>
		<script>
			alert('Invalid username password');
			</script>
			<?php
	}*/
	}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Login</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <h2>Seller Login</h2>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        
						<form action="#" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail" name="email"  autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="Password" class="form-control" placeholder="Password" name="password"  value="password">
                                </div>
								<div class="form-group">
                                    <input  type="submit" class="btn btn-lg btn-success btn-block" name="Login" value="Login"/>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
