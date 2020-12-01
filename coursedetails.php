<!-- include header  -->

<?php include './main/header.php'; ?>

<!-- include navigation  -->

<?php include './navigation/navigation.php'; ?>


<!-- stert hero banner area -->

<div class="container-fluid bg-dark">
	<div class="row">
		<img src="./image/couesesbg.jpg" alt="courses bg" class="img-fluid coursebanner" style="height: 300px; width: 100%; object-fit: cover; box-shadow: 10px;">
	</div>
</div>


<!-- end hero banner area -->

<!-- start main content area -->

<div class="container mt-5">
	<div class="row">
		<div class="col-md-4">
			<img src="image/1.jpg" alt="..." class="card-img-top img-fluid">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Course Name: Learn guitar</h5>
				<p class="card-text">
					Description : Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, fugiat.
				</p>
				<p class="card-text">
					Duration 10 Days
				</p>
				<form action="" method="post">
					<p class="card-text d-inline">
						Price: <small><del>&#8377 2000</del></small>
						<span class="font-weight-bolder">&#8377 200</span>
					</p>

					<button type="submit" class="ml-2 btn btn-warning text-dark font-weight-bolder float-right" name="buy">Buy Now</button>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<table class="table table-bordered table-hover mt-4 mb-3">
				<thead>
					<tr>
						<th scope="col">Lesson No.</th>
						<th scope="col">Lesson Name.</th>
					</tr>

				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td scope="row">Introduction</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>



<!-- end main content area -->


<!-- start contact us area -->
 
<!-- end contact us area -->





<!-- include social links  -->

<?php include './sociallinks/links.php'; ?>


<!-- start aboutus -->
<?php include './aboutus.php'; ?>



<!-- include footer  -->

<?php include './main/footer.php'; ?>
