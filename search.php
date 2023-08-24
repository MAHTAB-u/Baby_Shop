<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Baby Products</span></p>
            <h1 class="mb-0 bread">Diaper</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    
    		<div class="row">
    			<?php 
		if(isset($_GET)){
						$search = $_GET['search'];
						include_once 'databaseConnection.php';
						$conect = connect();
						
						$sql = "SELECT * FROM products WHERE productTitle LIKE '%$search%' OR 	productType LIKE '%$search%'";
						
						$result = $conect->query($sql);
            
					if($result->num_rows>0){
			
			foreach($result AS $row){?>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    			
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="img/product/<?=$row['productFile']?>" alt="products">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><?php echo $row['productTitle'];?></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span>৳<?php echo $row['productPrice'];?></span></p>
		    					</div>
	    					</div>
    						<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="product-single.php?productid=<?=$row['productId']?>" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    						
	    							
    							</div>
    							
    						</div>
    						
    					</div>
    					
    				</div>
    				
    				
    			</div>
    			
    		
    					<?php } 
			} else{ ?>
                                       
	<div class="container">
        <section class=" contact-section bg-light" style="margin-bottom:30px">
        <div class="row block-12">
            <div class="col-md-4 order-md-last d-flex"></div>
          <div class="col-md-4 order-md-last d-flex">
          <h4><img src="img/icon/warning.png" style="height:30px;width:auto;margin:10px;padding:2px;"><b><?php echo "No result found";?></b></h4>
          </div>
          <div class="col-md-4 order-md-last d-flex"></div>
          </div>
            </section>
            </div>
					 
		<?php } } ?>
    	
    		</div>
    
        
    	</div>
    	
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