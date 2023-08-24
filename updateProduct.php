<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Add Products</span></p>
            <h1 class="mb-0 bread">Add Products</h1>
          </div>
        </div>
      </div>
    </div>
    
       <?php 

	$proId=$_GET['proId'];

	include_once 'databaseConnection.php';
	$connect=connect();

	$sql = "SELECT * FROM products WHERE productId = $proId";
	$result = $connect->query($sql);

	foreach ($result as $row){
?>

       
       
        <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row block-12">
            <div class="col-md-3 order-md-last d-flex"></div>
          <div class="col-md-6 order-md-last d-flex">
    <form action="actionUpdateProduct.php" method="POST" class="bg-white p-5 contact-form" enctype="multipart/form-data">
             <h3 class="billing-title text-center">Update Product</h3>
            
              <div class="form-group">
                <input type="text" name="title" value="<?=$row['productTitle']?>" class="form-control" placeholder="Product Title">
              </div>
              <div class="form-group">
                <input type="number"  name="price" value="<?=$row['productPrice']?>" class="form-control" placeholder="Product Price">
              </div>
            
           <!-- 	<div class="form-group">
									
										<select name="type" value="" Selected>
											<option >----------Select Type----------</option>
											<option >Baby Diapers</option>
											<option >Baby Food</option>
											<option>Baby Cosmetics</option>
											<option>Baby Accessories</option>
										</select>
									
								</div>
              -->
              
              <div class="form-group">
		            		<div class="select-wrap">
		                  <select name="type"  value="" id="type" class="form-control">

		                    <option value = "Baby Diapers"
		                    
		                    <?php
		                    if($row['productType']=="Baby Diapers"){
                                echo 'selected';
                            } ?>>
                            Baby Diapers </option>
                            
		                    <option value = "Baby Food" 
		                    
		                    <?php
		                    if($row['productType']=="Baby Food"){ echo 'selected';} 
                            ?>>
                            Baby Food</option>
		                    
		                    <option value = "Baby Accessories"
		                    <?php
		                    if($row['productType']=="Baby Accessories"){ echo 'selected';} 
                            ?>
                            >Baby Accessories</option>
		                    
		                    <option value = "Baby Cosmetics"
		                    
		                    <?php
		                    if($row['productType']=="Baby Cosmetics"){ echo 'selected';} 
                            ?>>
                            Baby Cosmetics</option>
		                  </select>
		                </div>
		            	</div>
              
              <div class="form-group">
                <textarea name="details" id="" cols="30" rows="3" class="form-control" placeholder="Product Description"><?=$row['productDetails']?></textarea>
              </div>

               <input type="hidden" name="proId" class="form-control quantity" value="<?=$row['productId']?>"/>
                <div class="form-group">
                    <button type="submit" value="Send Message" class="btn btn-primary py-3 px-4" style="margin-left: 30%">Update Product</button>
              </div>

            </form>
                 </div>
          <div class="col-md-3 order-md-last d-flex"></div>
          	<?php } ?>
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