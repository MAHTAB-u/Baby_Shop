<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>
    
   

    <section class="ftco-section ftco-degree-bg">
     <?php 
									if(isset($_SESSION['loggedin']) ){ ?>
      <div class="text-center"><a href="writeBlog.php" class="btn btn-primary py-2 px-3">Write Blog</a></div>
      <?php }?>
      <div class="container">
        <div class="row">
         		<?php
			include_once 'databaseConnection.php';
			$connect = connect();

			$sql = "SELECT * FROM blog WHERE blogApproval='Approved'";
			$output = $connect->query($sql);
			foreach($output AS $row){

			?>
          <div class="col-lg-12 ftco-animate">
						<div class="row">
							<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex" style="
    margin-top: 50px">
		              <a href="blog-single.php?blogid=<?php echo $row['blogId'];?>" class="block-20" style="background-image: url('img/blog/<?=$row['blogImage']?>');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
                            <a href="#"><img src="img/icon/icons8-time-64.png"><b><?=$row['blogTime']?></b></a>
                            <a href="#"><img src="https://img.icons8.com/dusk/64/000000/document-writer.png"><b><?=$row['bloggerName']?></b></a>
		                </div>
		                <h3 class="heading"><a href="#"><?=$row['blogTitle']?></a></h3>
		                <p><?=$row['blogDetails']?></p>
		                <p><a href="blog-single.php?blogid=<?php echo $row['blogId'];?>" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		          </div>
					</div>
                      </div> 
<?php } ?>

        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-section bg-light">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-6">
              <h2 class="ftco-heading-2">Vegefoods</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>


          <div class="col-md">
            <div class="ftco-footer-widget mb-6">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
      </div>
    </footer>
    
  

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