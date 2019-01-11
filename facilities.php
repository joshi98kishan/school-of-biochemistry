<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include 'includes/head.php';?>

<body>

	<!-- Header -->
	<?php include 'includes/header.php';?>

	<!-- Navigation Bar -->
	<?php include 'includes/navbar.php'?>

	<!-- Side Nav -->
	<?php include 'includes/sidenav.php';?>
	<style type="text/css">

	div.gallery {

		border: 1px solid #ccc;
	}

	div.gallery:hover {
		border: 1px solid #777;
	}

	div.gallery img {
		width: 100%;
		height: auto;
	}

	div.desc {
		padding: 15px;
		text-align: center;
	}

	* {
		box-sizing: border-box;
	}

	.responsive {
		padding: 0 6px;
		float: left;
		width: 24.99999%;
	}

	@media only screen and (max-width: 700px) {
		.responsive {
			width: 49.99999%;
			margin: 6px 0;
		}
	}

	@media only screen and (max-width: 500px) {
		.responsive {
			width: 100%;
		}
	}
</style>
<div class="container-fluid">


	<div class="row" id="sub">
		<div class="col-md subhead-line">
			<h1 class="display-4"><strong>Equipments</strong></h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="card col-md-4" >
				<img class="card-img-top" src="images/eq1.jpg" alt="Card image cap" height="270">
				<div class="card-body">
					<h5 class="card-title"> title</h5>
				</div>
			</div>
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/eq2.jpg" alt="Card image cap" height="270">
				<div class="card-body">
					<h5 class="card-title"> title</h5>
				</div>
			</div>
	
			<div class="card col-md-4" >
				<img class="card-img-top" src="images/eq3.jpg" alt="Card image cap" height="270">
				<div class="card-body">
					<h5 class="card-title"> title</h5>
				</div >
			</div>
		</div>
		<div class="row">
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/eq4.jpg" alt="Card image cap" height="270">
				<div class="card-body">
					<h5 class="card-title"> title</h5>
				</div>
			</div>
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/eq5.jpg" alt="Card image cap" height="270">
				<div class="card-body">
					<h5 class="card-title"> title</h5>
				</div>
			</div>
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/eq6.jpg" alt="Card image cap" height="270">
				<div class="card-body">
					<h5 class="card-title">title</h5>
				</div>
			</div>
		</div>

		
		<div class="row" id="sub">
			<div class="col-md-12 subhead-line">
				<h1 class="display-4"><strong>Research Labs</strong></h1>
			</div>
		</div>

		<div class="row">
			<div class="card col-md-4" >
				<img class="card-img-top" src="images/research-lab1.jpeg" alt="Card image cap" height="270">
				<div class="card-body">
					
				</div>
			</div>
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/research-lab2.jpeg" alt="Card image cap" height="270">
				<div class="card-body">
					
				</div>
			</div>
	
			<div class="card col-md-4" >
				<img class="card-img-top" src="images/research-lab3.jpeg" alt="Card image cap" height="270">
				<div class="card-body">
					
				</div >
			</div>
		</div>
		<div class="row">
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/research-lab4.jpeg" alt="Card image cap" height="270">
				<div class="card-body">
					
				</div>
			</div>
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/research-lab5.jpeg" alt="Card image cap" height="270">
				<div class="card-body">
					
				</div>
			</div>
	
			<div class="card col-md-4">
				<img class="card-img-top" src="images/research-lab6.jpeg" alt="Card image cap" height="270">
				<div class="card-body">
					
				</div>
			</div>
		</div>
	</div>

</div>	



<!-- Up Arrow -->
<?php include 'includes/uparrow.php';?>

<!-- footer -->
<?php include 'includes/footer.php';?>

</body>
</html>
