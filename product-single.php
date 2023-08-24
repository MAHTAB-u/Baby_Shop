<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Product Single</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ">
    	<div class="container">
                     
       	<?php 
			if(isset($_SESSION['msg1'])){
				$msg1 = $_SESSION['msg1'];
				unset ($_SESSION['msg1']);
			?>
        <section class=" contact-section bg-light" style="margin-bottom:30px">
        <div class="row block-12">
            <div class="col-md-4 order-md-last d-flex"></div>
          <div class="col-md-4 order-md-last d-flex">
          <h4><img src="img/icon/warning.png" style="height:30px;width:auto;margin:10px;padding:2px;"><b><?php echo $msg1; ?></b></h4>
          </div>
          <div class="col-md-4 order-md-last d-flex"></div>
          </div>
            </section>
            <?php }?>
                     
    	              <?php 
	if(isset($_GET['productid'])){
		$productid=$_GET['productid'];
	}
	
	include_once 'databaseConnection.php';
	$connect=connect();
	$sql = "SELECT * FROM products WHERE productId=$productid";
	$result = $connect->query($sql);
		foreach ($result as $row){
			$_SESSION['productId'] = $row['productId'];?>
    		<div class="row">
    			<div class="col-lg-6 mb-5 ">
    				<a href="img/product/<?=$row['productFile']?>" class="image-popup"><img src="img/product/<?=$row['productFile']?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ">
    				<h3><b><?=$row['productTitle']?></b></h3>
    				
    				<p class="price"><span>৳<?=$row['productPrice']?></span></p>
    				<p><?=$row['productDetails']?>
    				<form action="actionAddtoCart.php" method="GET">
    				<input type="hidden" name="title" class="form-control quantity" value="<?=$row['productTitle']?>"/>
    				<input type="hidden" name="productid" class="form-control quantity" value="<?=$row['productId']?>"/>
						<div class="row mt-4">
							<div class="col-md-6">
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
	          	<div class="w-100"></div>
	          
          	</div>
          
                                   <input type="Submit" value="Add to Cart" name="addtocart" class="btn btn-primary py-3 px-4" style="margin-top:20px;" >
          	</form>
          
    			</div>
                      
     
                      
                      
    			   	<div>
    		<div class="form-group col-md-12" style="margin-top:20px">
				<h5><b>Reviews</b></h5>
                    <?php
						$activeProdId = $_SESSION['productId'];
						$sql = "SELECT * FROM `review` WHERE `productId`= '$activeProdId'";
						$reviewResult = $connect->query($sql);	
						foreach($reviewResult as $rev){?>
						<b><?=$rev['userName']?></b>
						<p><?=$rev['review']?></p>
                 <?php }?>
                <h5>Leave a review</h5>
                	<?php 
						if(isset($_SESSION['msg'])){
							$msg = $_SESSION['msg'];
							unset ($_SESSION['msg']);
						?>
               <?php echo $msg; ?> 
               <?php }?>
               <form action="actionReview.php" method="POST">
                <textarea class="form-control" name="review" id="comment" rows="5" columns="30" style="width:150%"placeholder="Write Review" spellcheck="false"></textarea>
                 <input type="hidden" value="<?=$row['productId']?>">
                 <div class="form-group" style="margin-top:20px;">
                    <input type="submit" name="btn_Review" value="Reply" class="btn py-3 px-4 btn-primary">
                  </div>
                  </form>
                  </div>
</div>

    		</div>
    		<?php } ?>
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

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
    
  </body>
</html>