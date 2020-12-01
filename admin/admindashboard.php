<!--<//?php// if (!isset($_SESSION)) {-->
<!--  //session_start();-->
<!--} //?>-->
<!--<//?php -->
	
<!--//	if (isset($_SESSION['adminemail'])) {-->
	

<!--/	}else{-->
<!--		 echo '<script>location.href="../index.php"</script>';-->
<!--	}-->

<!-- ?>-->
<?php include './header.php'; ?>


			<!-- creating cards -->
			<div class="col-sm-9 col-md-10  mt-5">
				<div class="row mx-5 text-center">
					<div class="col-sm-4 mt-5">
						<div class="card text-white mb-3 bg-danger text-center" style="max-width: 18rem;">
							<div class="card-header">
								Courses
							</div>
							<div class="card-body">
								<h4 class="card-title">5</h4>
								<a href="#" class="btn text-white">View</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<div class="card text-white mb-3 bg-success text-center" style="max-width: 18rem;">
							<div class="card-header">
								Students
							</div>
							<div class="card-body">
								<h4 class="card-title">15</h4>
								<a href="#" class="btn text-white">View</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<div class="card text-white mb-3 bg-info text-center" style="max-width: 18rem;">
							<div class="card-header">
								Sold
							</div>
							<div class="card-body">
								<h4 class="card-title">4</h4>
								<a href="#" class="btn text-white">View</a>
							</div>
						</div>
					</div>
				</div>
				<div class="mx-5 mt-5 text-center">
					<p class="bg-dark text-center text-white p-2">Course Ordered</p>
					<!-- ctsrt table -->
					<div class="table-responsive-lg">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">Order ID</th>
									<th scope="col">Couesr ID</th>
									<th scope="col">Student Email</th>
									<th scope="col">Order Data</th>
									<th scope="col">Amount</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">22</th>
									<td>100</td>
									<td>pc@gmail.com</td>
									<td>1/11/20</td>
									<td>2000</td>
									<td><button type="submit" class="btn btn-secondary" name="delete" ><i class="far fa-trash-alt"></i></button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>


		</div>
	</div>





<!-- footer -->
	<?php include './footer.php'; ?>