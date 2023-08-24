<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>
       
           <section class="ftco-section ftco-no-pb ftco-no-pt bg-light" style="margin-top: 30px;">
			<div class="container">
				<div class="row">

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
            
            
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image:img/product/<?=$row['productFile']?>">
						
					</div>
					<div    class="col-md-6 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4"><?=$row['productTitle']?></h2>
                    <h3 class="mb-4"><span class="lnr lnr-tag"></span> <span class="ml-10">৳<?=$row['productPrice']?></span></h3>
	            </div>
	          </div>
	          <div class="pb-md-5">
	          	<p><?=$row['productDetails']?></p>
						</div>
						  <form action="actionAddToCart.php" method="GET">
									<input type="hidden" name="title" class="form-control quantity" value="<?=$row['productTitle']?>"/>
										<input type="hidden" name="productid" class="form-control quantity" value="<?=$row['productId']?>"/>
										<div class="col-lg-4">
										<input type="text" name="quantity" class="form-control quantity" value="1"/>
										</div>
									<div class="d-flex mt-20">
                                       <button type="submit" name="addtocart" value="addtocart" class="btn btn-primary py-3 px-4" style="margin-top:10px;">Add to Cart</button>
                                        
                                   </div>

								</form>
						
					</div>
				<?php }?>
				<div class="form-group col-md-6" style="margin-top:20px">
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
                <textarea class="form-control" name="review" id="comment" rows="5" placeholder="Write Review" spellcheck="false"></textarea>
                 <input type="hidden" value="<?=$row['productId']?>">
                 <div class="form-group" style="margin-top:20px;">
                    <input type="submit" name="btn_Review" value="Reply" class="btn py-3 px-4 btn-primary">
                  </div>
                  </form>
                  </div>
                 
                </div>
			</div>
	
			
		</section>
        
  <?php include_once 'template/footer.php';?>
   
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