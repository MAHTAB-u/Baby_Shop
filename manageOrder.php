<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Admin</span></p>
            <h1 class="mb-0 bread">Manage Order</h1>
          </div>
        </div>
      </div>
    </div>
        <section class="ftco-section ftco-cart">
    
	    		<table class="table table-striped">
						    <thead class="thead-primary">
						      <tr >
						        
						        <th>Order Id</th>
						        <th>First Name</th>
						        <th>City</th>
						        <th>Post Code</th>
						        <th>Phone</th>
						        <th>Email</th>
						        <th>Operations</th>
						      </tr>
						    </thead>
						    <tbody>
						    
						      	<?php 
			include_once 'databaseConnection.php';
			$connect = connect(); 
				
			$sql = "SELECT * FROM orderdetails";
			
			$result = $connect->query($sql);
		
		foreach($result AS $row){
		?>
		  <tr>
			<td><?=$row['order_id']?></td>
			<td><?=$row['firstName']?></td>
			<td><?=$row['lastName']?></td>
			<td><?=$row['city']?></td>
			<td><?=$row['phone']?></td>
			<td><?=$row['email']?></td>
			<td>
				<a class="btn btn-warning py-3 px-4" href="orderDetails.php?orderId=<?=$row['order_id']?>"> <span>Order Details</span></a>
			</td>
		  </tr>

	<?php } ?> 
						      

	 </tbody>
	 </table>
					 
    			
		
		</section>
       
   
    <?php include_once 'template/footer.php';?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>