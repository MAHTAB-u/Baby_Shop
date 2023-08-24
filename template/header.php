		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-2 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">01706331364</span>
					    </div>
					    <div class="col-md pr-2 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">mdrakibulir90@gmail.com</span>
					    </div>
					    <div class="col-md pr-6 d-flex topper align-items-center" >
					   <form action="search.php" method="GET" class="subscribe-form">
              <div class="form-group d-flex" style="border-radius: 26px;">
                <input type="text" name="search" class="form-control" placeholder="...Search">
                <button type="submit" value="Search"  class="btn btn-success py-1 px-2" >Search</button>
              </div>
            </form>  </div>
             
                  <div class="col-md pr-2 d-flex topper align-items-center">
                  <?php if(!isset($_SESSION['loggedin'])){?>										
                  <a class="btn btn-warning py-1 px-2" href="signin.php"> Sign In</a>
                  <?php } ?> 
      
                  </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>