<!-- include header section -->
		<?php include('./main/header.php'); ?>
	<body>
		
		<!-- start navigation -->

		<?php include './navigation/navigation.php'; ?>
		<!-- end navigation -->

<!-- start video background -->

<div class="container-fluid remove-mar-vid">
	<div class="vid-parent">
		<video playsinline autoplay muted loop>
			<source src="video/v.mp4">
		</video>
		<div class="vid-overlay"></div>
	</div>
	<div class="vid-content">
		<div class="display-3 mycontent">Welcome to eScho<i class="fab fa-angellist"></i>L</div>
		<small class="vid-small mycontent">Learn and Implement</small><br>
		<!-- modal trigger -->
		<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">Get-Started <i class="fas fa-arrow-right"></i></a>
	</div>
</div>




<!-- end video background -->

<!-- start text banner -->
<div class="container-fluid bg-danger txt-banner">
	<div class="row bottom-banner p-lg-4 p-md-0">
		<div class="col-sm">
			<h5>
				<i class="fas fa-book-open mr-3"></i> 100+ Online Courses
			</h5>
		</div>
		<div class="col-sm">
			<h5>
				<i class="fas fa-users mr-3"></i> Expart Instructors
			</h5>
		</div>
		<div class="col-sm">
			<h5>
				<i class="fas fa-keyboard mr-3"></i> Lifetime Access
			</h5>
		</div>
		<div class="col-sm">
			<h5>
				<i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee
			</h5>
		</div>
	</div>
</div>

<!-- end text banner -->


<!-- start popular course -->
<?php include './popularcourses.php'; ?>

<!-- view all courses -->
	<div class="text-center m-2">
		<a href="courses.php" class="btn btn-danger btn-sm mb-3 mt-3">View All Courses</a>
	</div>

<!-- end popular course -->




<!-- start contact us area -->
<?php include './contactus.php'; ?>
<!-- end contact us area -->




<!-- start student testimonial -->
<div class="container pb-3">
	<h2 class="text-center pt-4 pb-2">Student Feedback</h2>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  	<!-- 1 slide start -->
    <div class="carousel-item active">
      <div class="row">
      	<div class="col-md-6">
      		<!-- 1 card start -->
      <div class="card">
  <div class="card-header">
    Pinaki Chakraborty
  </div>
  <div class="card-body">
  	<img src="image/1.jpg" class="card-title img-fluid" alt="..." style="width: 60px;height: 60px;border-radius: 50%;">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <p class="text-muted">
    	Web Developer
    </p>
  </div>
</div>
<!-- 1 card end -->
      	</div>
      	<div class="col-md-6">
      		<!-- 2 card start -->
      <div class="card">
  <div class="card-header">
    Pinaki Chakraborty
  </div>
  <div class="card-body">
  	<img src="image/1.jpg" class="card-title img-fluid" alt="..." style="width: 60px;height: 60px;border-radius: 50%;">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <p class="text-muted">
    	Web Developer
    </p>
  </div>
</div>
<!-- 2 card end -->
      	</div>
      </div>
      


    </div><!-- 1 slide end -->

    <div class="carousel-item">
      <!-- 2 slide start -->
    <!-- <div class="carousel-item active"> -->
      <div class="row">
      	<div class="col-md-6">
      		<!-- 3 card start -->
      <div class="card">
  <div class="card-header">
    Pinaki Chakraborty
  </div>
  <div class="card-body">
  	<img src="image/2.jpg" class="card-title img-fluid" alt="..." style="width: 60px;height: 60px;border-radius: 50%;">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <p class="text-muted">
    	Web Developer
    </p>
  </div>
</div>
<!-- 3 card end -->
      	</div>
      	<div class="col-md-6">
      		<!-- 4 card start -->
      <div class="card">
  <div class="card-header">
    Pinaki Chakraborty
  </div>
  <div class="card-body">
  	<img src="image/2.jpg" class="card-title img-fluid" alt="..." style="width: 60px;height: 60px;border-radius: 50%;">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <p class="text-muted">
    	Web Developer
    </p>
  </div>
</div>
<!-- 4 card end -->
      	</div>
      <!-- </div> -->
      


    </div><!-- 2 slide end -->
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- end student testimonial -->


<!-- start social media -->

<?php include './sociallinks/links.php'; ?>
<!-- end social media -->

<!-- start aboutus -->
<?php include './aboutus.php'; ?>

<!-- end about us -->






<!-- start student registration trigger modal -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->





<!-- removed Modal section to footer.php -->



<!-- remove admin login modal and replace admin login page -->



		<!-- include footer section -->
		<?php include('./main/footer.php'); ?>