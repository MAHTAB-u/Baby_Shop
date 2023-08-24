<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    
    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </div>

    
   
    <section class="ftco-section contact-section bg-light">
      <div class="container">
          			<?php 
			if(isset($_SESSION['msg'])){
				$msg = $_SESSION['msg'];
				unset ($_SESSION['msg']);
			?>
        <section class=" contact-section bg-light" style="margin-bottom:30px">
        <div class="row block-12">
            <div class="col-md-4 order-md-last d-flex"></div>
          <div class="col-md-4 order-md-last d-flex">
          <h4><img src="img/icon/cancel.png" style="height:30px;width:auto;margin:10px;padding:2px;"><b><?php echo $msg; ?></b></h4>
          </div>
          <div class="col-md-4 order-md-last d-flex"></div>
          </div>
            </section>
            <?php }?>
       
        <div class="row block-12">
           
           
           
            <div class="col-md-3 order-md-last d-flex"></div>
          <div class="col-md-6 order-md-last d-flex">
          <form action="actionSignin.php" method="post" class="bg-white p-5 contact-form">
             <h3 class="billing-title text-center">Sign In</h3>
              <div class="form-group">
                <input type="text" name="email"class="form-control" placeholder="Your Email or User Name">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password">
              </div>
              
                <div class="form-group">
                    <button type="submit" value="Send Message" class="btn btn-primary py-3 px-4" style="margin-left: 40%">SIGN IN</button>
              </div>
               <h5> <a href="signup.php" style="margin-left: 70%"> New User?</a></h5>
              
            </form>
            
          </div>
           <div class="col-md-3 order-md-last d-flex"></div>
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