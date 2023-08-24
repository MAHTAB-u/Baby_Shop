<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
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
          <h4><img src="img/icon/tick.png" style="height:30px;width:auto;margin:10px;padding:2px;"><b><?php echo $msg1; ?></b></h4>
          </div>
          <div class="col-md-4 order-md-last d-flex"></div>
          </div>
            </section>
            <?php }?>
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						         <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
                            	<?php				
						include_once 'databaseConnection.php';
							$connect = connect();
							$total = 0;
							$session_id = session_id();
							$sql = "SELECT cart.*, products.*
							
							FROM cart 
							INNER JOIN products ON cart.productId = products.productId	
							WHERE  cart.session_Id = '$session_id'";
							$result = $connect->query($sql);
							if ($result  !=false){
								foreach($result AS $row){	
					?>
						        <td class="product-remove"><a href="actionAddtoCart.php?action=delete&id=<?=$row["productId"];?>"><span class="ion-ios-close"></span></a></td>
						        <td class="product-name">
						        	<h3><?=$row['productTitle']?></h3>
						        </td>
						        
						        <td class="price"><?=$row['productPrice']?></td>
						        
						        <td class="quantity">
						        	
					             	<?=$row['productQuantity']?>
					          	
					          </td>
						        
						        <td class="total">৳<?=$row['productQuantity']*$row['productPrice']?></td>
						        </tr>
						        <?php	
					$total = $total + ($row['productQuantity']*$row['productPrice']);
				
					} 
				}
				?>
						      <!-- END TR-->

						   <!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    	
    	
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>৳<?php echo number_format($total, 2); ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$0.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>৳<?php echo number_format($total, 2); ?></span>
    					</p>
    				</div>
    				<p><a href="checkout.php?totalamount=<?php echo $total?>" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
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