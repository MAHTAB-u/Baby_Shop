<?php include_once 'template/head.php';?>
  <body class="goto-here">
<?php include_once 'template/header.php';?>
    <?php include_once 'template/nav.php';?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/toys.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Admin</span></p>
            <h1 class="mb-0 bread">Single Blog</h1>
          </div>
        </div>
      </div>
    </div>
    
       <?php 
	if(isset($_GET['blogid'])){
		$blogid=$_GET['blogid'];
	}
	
	include_once 'databaseConnection.php';
	$connect=connect();
	$sql = "SELECT * FROM blog WHERE blogId=$blogid";
	$singleBlog = $connect->query($sql);
		foreach ($singleBlog as $blog){
			$_SESSION['blogId'] = $blog['blogId'];
?>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<div class="meta mb-3">
                     <img src="img/blog/<?=$blog['blogImage']?>" alt="" class="img-fluid">
                      <h2 class="mb-3"><?=$blog['blogTitle']?></h2>
		                  <div><img src="img/icon/icons8-time-64.png"><b><?=$blog['blogTime']?></b></div>
		                  <div><img src="https://img.icons8.com/dusk/64/000000/document-writer.png"><b><?=$blog['bloggerName']?></b></div>>
		                </div>
            </p>
            <p><?=$blog['blogDetails']?></p>
<?php }?>


<div class="text-center"><a class="btn btn-success py-3 px-4" href="ActionBlogApprove.php?blogid=<?=$blog['blogId']?>"> <span>Approve</span></a></div>
         
         
         
          </div> <!-- .col-md-8 -->
          
        </div>
      </div>
    </section> <!-- .section -->

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