
<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    
<!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/comb.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">We deliver your baby's happiness to your door</h1>
	              <h2 class="subheading mb-4">We deliver baby products</h2>
	              
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/honest.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">100% Reliable &amp; Trustworthy</h1>
	              <h2 class="subheading mb-4">We deliver  baby products</h2>
	              
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
        
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		<div class="text text-center" style="color:#82ae46;">
										<h2>Baby Products</h2>
            <b><i>Our products</i></b>
										
									</div>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(images/boy.jpg);">
									
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/diaper.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="cart.php">Diapers</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/food.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Food</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(images/cot.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Accessories</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(images/cosmetics.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Cosmetics</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			    		<?php 
					if(!isset($_SESSION['files'])){
						include_once 'databaseConnection.php';
						$conect = connect();
						
						$sql = "SELECT * FROM products WHERE productType = 'Baby Diapers' LIMIT 2";
						
						$result = $conect->query($sql);

					}	
						foreach($result AS $row){
						?>
	<div class="col-md-6 col-lg-3 ftco-animate">
    			
    				<div class="product">
    					<a href="product-single.php?productid=<?=$row['productId']?>" class="img-prod"><img class="img-fluid" src="img/product/<?=$row['productFile']?>" alt="products">
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
    			<?php } ?>
    			
    			    			    		<?php 
					if(!isset($_SESSION['files'])){
						include_once 'databaseConnection.php';
						$conect = connect();
						
						$sql = "SELECT * FROM products WHERE productType = 'Baby Food' LIMIT 2";
						
						$result = $conect->query($sql);

					}	
						foreach($result AS $row){
						?>
	<div class="col-md-6 col-lg-3 ftco-animate">
    			
    				<div class="product">
    					<a href="product-single.php?productid=<?=$row['productId']?>" class="img-prod"><img class="img-fluid" src="img/product/<?=$row['productFile']?>" alt="products">
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
    			<?php } ?>
    			
    			    			    		<?php 
					if(!isset($_SESSION['files'])){
						include_once 'databaseConnection.php';
						$conect = connect();
						
						$sql = "SELECT * FROM products WHERE productType = 'Baby Cosmetics' LIMIT 2";
						
						$result = $conect->query($sql);

					}	
						foreach($result AS $row){
						?>
	<div class="col-md-6 col-lg-3 ftco-animate">
    			
    				<div class="product">
    					<a href="product-single.php?productid=<?=$row['productId']?>" class="img-prod"><img class="img-fluid" src="img/product/<?=$row['productFile']?>" alt="products">
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
    			<?php } ?>
    			
    			    			    		<?php 
					if(!isset($_SESSION['files'])){
						include_once 'databaseConnection.php';
						$conect = connect();
						
						$sql = "SELECT * FROM products WHERE productType = 'Baby Accessories' LIMIT 2";
						
						$result = $conect->query($sql);

					}	
						foreach($result AS $row){
						?>
	<div class="col-md-6 col-lg-3 ftco-animate">
    			
    				<div class="product">
    					<a href="product-single.php?productid=<?=$row['productId']?>" class="img-prod"><img class="img-fluid" src="img/product/<?=$row['productFile']?>" alt="products">
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
    			<?php } ?>
    	</div>
    	
    </section>
		


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

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