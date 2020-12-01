<!--<//?php if (!isset($_SESSION)) {-->
<!--  session_start();-->
<!--} ?>-->
<!--<//?php -->
	
<!--	if (isset($_SESSION['adminemail'])) {-->
<!--		$sessionemail=$_SESSION['adminemail'];-->

<!--	}else{-->
<!--		 echo '<script>location.href="../index.php"</script>';-->
<!--	}-->

<!-- ?>-->

<?php include '../dbconfig/config.php'; ?>
<?php include './header.php'; ?>



<?php 
	
	$sql = "select * from admin_details where email = '$sessionemail' ";
			$result = $con->query($sql);
			$row = $result->fetch_assoc();


		if (isset($_POST['changePass_btn'])) {
			$email=$_REQUEST['aemail'];
			$eoldpass=$_REQUEST['aoldpass'];
			$enewpass=$_REQUEST['anewpass'];
			$actualOldPass = $row['pass'];

			if ($actualOldPass == $eoldpass) {
				$query1 = "update admin_details set pass='$enewpass' where email='$email' ";
				if ($con -> query($query1) == TRUE) {

				$wrnmsg = '<div class="alert alert-success text-success  mx-auto mt-2">Password Updated succesfully.</div>';
				// echo '<script>alert("Update Succesfull")</script>';
				// echo '<script>location.href="./courses.php"</script>';
			}
			else{
				echo '<script>alert("Unable to Update Password")</script>';
			}
			}
			else{
				$wrnmsg = '<div class="alert alert-danger text-danger  mx-auto mt-2">* Old password not matched.</div>';
			}
		}





	
?>


	<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<!-- <?php// if(isset($wrnmsg)) {echo $wrnmsg;} ?> -->
	<h3 class="text-center">Add New Courses</h3>
	<form action="" method="post" >
		<!-- admin email -->
		<div class="form-group">
			<label for="Course_name" >Admin Email</label>
			<input type="text" name="aemail"  class="form-control" value="<?php echo $row['email']; ?>" readonly="">
		</div>
		
		<!-- admin old pass -->
		<div class="form-group">
			<label for="Course_name" >Old Password</label>
			<input type="password" name="aoldpass"  class="form-control" >
		</div>
		<!-- admin new pass -->
		<div class="form-group">
			<label for="Course_name" >New Password</label>
			<input type="password" name="anewpass" class="form-control" >
		</div>
		
		<!-- buttons -->
		<div class="text-center">
			<button class="btn btn-danger" name="changePass_btn" type="submit">Change Password</button>
			<a href="../admin/admindashboard.php" class="btn btn-secondary">Close</a>
		</div>
		<?php if(isset($wrnmsg)) {echo $wrnmsg;} ?>
	</form>
	
</div>




<?php include './footer.php'; ?>