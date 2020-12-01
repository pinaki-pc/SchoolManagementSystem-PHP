<?php 
if (!isset($_SESSION)) {
  session_start();
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin | Dashboard</title>


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


		<!-- Bootstrap css -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<!-- fontawesome css -->
		<link rel="stylesheet" href="css/all.min.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

		<!-- custom style -->
		<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<!-- top navbar -->
	<nav class="navbar navbar-dark fixed-top p-0 shadow " style="background-image: linear-gradient(to right, #111 , #00a);">
		<a class="navbar-brand col-sm-12 col-md-12 mr-0" href="./admindashboard.php" >e-Scho<i class="fab fa-angellist"></i>L &nbsp;<small class="">Admin area</small></a>
	</nav>
	<!-- side bar -->
	<div class="container-fluid mb-5 mt-5">
		<div class="row">
			<nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="./admindashboard.php">
								<i class="fas fa-tachometer-alt"></i>
								Dashboard
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./courses.php">
								<i class="fab fa-accessible-icon"></i>
								Courses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fab fa-accessible-icon"></i>
								Lessons
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./students.php">
								<i class="fas fa-users"></i>
								Students
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fas fa-table"></i>
								Sell Report
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fas fa-table"></i>
								Payment Status
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fab fa-accessible-icon"></i>
								Feedback
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./changepass.php">
								<i class="fas fa-key"></i>
								Change Pass
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../stdlogout.php">
								<i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</li>
					</ul>
				</div>
			</nav>