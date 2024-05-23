<?php include'header.php';

if(!isset($_SESSION['buyer']))
{
	?>
	<script>
	alert('You have to login first');
	window.location="buyerlogin.php";
	</script>
	<?php
}
?>



<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / color-paint</span>
    <h2>Carpenters</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer agents">

<div class="row">
  <div class="col-lg-8  col-lg-offset-2 col-sm-12">
      <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="https://static.poshukach.com/imgpreview?key=456e64ef048b915c&mb=imgdb_preview_1295" class="img-responsive"  alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4> om coloring</h4><p><br></p></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:kinjal@realestate.com">dabhipradip@gmail.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (91) 9714790875</div>
      </div>
      <!-- agents -->
      
       <!-- agents -->
      <div class="row">
        <div class="col-lg-2 col-sm-2 "><a href="#"><img src="https://images.ctfassets.net/trrkflkwvafb/5cdna6l1PNc6PFY0pWQmtM/8d294cba07c8b3ca6cbf0e401ece1851/Customer_3_square.jpg" class="img-responsive" alt="agent name"></a></div>
        <div class="col-lg-7 col-sm-7 "><h4>aakansha Painting</h4></div>
        <div class="col-lg-3 col-sm-3 "><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:abc@realestate.com">rajshreekaurgmail.com</a><br>
        <span class="glyphicon glyphicon-earphone"></span> (91) 9265089038</div>
      </div>
      <!-- agents -->
      

      

       
      
     
  </div>
</div>


</div>
</div>

<?php include'footer.php';?>