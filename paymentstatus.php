<!-- include header  -->

<?php include './main/header.php'; ?>

<!-- include navigation  -->

<?php include './navigation/navigation.php'; ?>


<!-- stert hero banner area -->

<div class="container-fluid bg-dark">
	<div class="row">
		<img src="./image/2.jpg" alt="courses bg" class="img-fluid coursebanner" style="height: 300px; width: 100%; object-fit: cover; box-shadow: 10px; opacity: 0.6">
	</div>
</div>


<!-- end hero banner area -->



<!-- payment status details start -->
<div class="container mt-lg-5 mt-3">
	<div class="row  justify-content-around">
		<div class="col-md-4 text-center">
			<h5 class="text-dark ">
				Payment Status
			</h5>
		</div>
		<div class="col-md-8 text-center">
			<form action="" method="post">
				<div class="input-group mb-3">
			  <input type="text" class="form-control" name="order_id" placeholder="Enter Order Id" aria-label="orderid" aria-describedby="button-addon2">
			  <div class="input-group-append">
			    <button class="btn btn-outline-info" type="submit" id="oeder_view" name="order_view">View</button>
			  </div>
			</div>
			</form>
		</div>
	</div>
</div>



<!-- payment status details start -->



<!-- start contact us area -->
<?php include './contactus.php'; ?>
<!-- end contact us area -->





<!-- include social links  -->

<?php include './sociallinks/links.php'; ?>



<!-- start aboutus -->
<?php include './aboutus.php'; ?>



<!-- include footer  -->

<?php include './main/footer.php'; ?>
