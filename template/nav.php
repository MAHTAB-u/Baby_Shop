<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Baby shop</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Baby Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="diaper.php">Diapers</a>
              	<a class="dropdown-item" href="food.php">foods</a>
                <a class="dropdown-item" href="accessories.php">accessories</a>
                <a class="dropdown-item" href="cosmetics.php">Cosmetics</a>
     
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	           <?php 
									if(isset($_SESSION['loggedin']) ){ 
										
									}else{?>
	          <li class="nav-item"><a href="signup.php" class="nav-link">Registration</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <?php }?>
                        <?php if(isset($_SESSION['loggedin']) && $_SESSION['userRole']!=1){ ?>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['userName']?></a>
              
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="logout.php">logout</a>
            </li>
            
            <?php }?>
	          	          <?php if(isset($_SESSION['loggedin']) && $_SESSION['userRole']==1){ ?>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['userName']?></a>
              
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="memberDetails.php">Members Details</a>
              <a class="dropdown-item" href="addProducts.php">Add Products</a>
              <a class="dropdown-item" href="editProducts.php">Edit Products</a>
              <a class="dropdown-item" href="manageBlogs.php">Manage Blogs</a>
              <a class="dropdown-item" href="manageOrder.php">Manage Order</a>
              <a class="dropdown-item" href="logout.php">logout</a>
            </li>
            <?php }?>
             <?php 
									if(isset($_SESSION['loggedin']) && $_SESSION['userRole']==1){ 
										
									}else{?>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span></a></li>
            <?php }?>
	        </ul>
	      </div>
	    </div>
	  </nav>