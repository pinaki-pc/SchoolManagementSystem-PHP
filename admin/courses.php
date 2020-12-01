<!--<//?php if (!isset($_SESSION)) {-->
<!--  session_start();-->
<!--} ?>-->
<!--<//?php -->
	
<!--	if (isset($_SESSION['dminemail'])) {-->
		

<!--	}else{-->
<!--		 echo '<script>location.href="../index.php"</script>';-->
<!--	}-->

<!-- ?>-->
<?php include '../dbconfig/config.php'; ?>
<?php include './header.php'; ?>



<div class="col-sm-9 mt-5">
	<p class="bg-dark p-2 text-white text-center">List of Courses</p>
	<div class="table-responsive-lg">
		<?php 
			$sql = "select * from course";
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				
			
		 ?>

						<table class="table table-striped table-hover">
							<thead>
								<tr>
									
									<th scope="col">Couesr ID</th>
									<th scope="col">Name</th>
									
									<th scope="col">Author</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($row = $result->fetch_assoc()) {	 ?>
								<tr>
									<th scope="row"><?php echo $row['course_id'] ;?></th>
									<td><?php echo $row['course_name'] ;?></td>
									<td><?php echo $row['course_author'] ;?></td>
									
									<td class="">
										<form action="editcourse.php" method="POST" class="d-inline">
											<input type="hidden" name="did" value="<?php echo $row['course_id']; ?>">
										<button type="submit" class="btn btn-info mr-3 mb-1" name="view" ><i class="fas fa-pen"></i></button>
										</form>

									<form action="" method="POST" class="d-inline">
										<input type="hidden" name="did" value="<?php echo $row['course_id']; ?>">
									<button type="submit" class="btn btn-danger mb-1" name="delete" ><i class="far fa-trash-alt"></i></button>
									</form>
								</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php }else{echo '<div class="alert alert-warning p=3">[NULL_VALUE] No course presents. Add Courses</div>';} ?>
					</div>
</div>
<!-- <div class="col-md-1"> -->
	<a href="./addcourse.php" class="btn btn-success box m-4 "><i class="fas fa-plus fa-1x"></i></a>

<!-- </div> -->

<?php 
	if (isset($_REQUEST['delete'])) {
		$del_qur = "delete from course where course_id = {$_REQUEST['did']}";

		if ($con->query($del_qur) == TRUE) {
			echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
		}else{
			echo "Unable to delete";
		}
	}


 ?>


<?php include './footer.php'; ?>