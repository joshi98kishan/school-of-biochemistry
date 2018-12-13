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

	<!-- Team -->

	<div class="team-cover container-fluid">
		<img src="images/team.jpeg" class="img-fluid">
	</div>

	<div class="container-fluid team">
		<div class="container">
			<div class="row">
				<div class="col-md-12 team-head">
					<h2 class="h2"><strong>Meet Our Team</strong></h2>
					<h5 class="h4">Hey guys! This is our Team behind the SOB Website.</h5>
					<h6 class="h6">Want to know who we are...</h6>
					<h6 class="h6">(Hover or click the Monkeys)</h6>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 team-member">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/monkey1.png" alt="Avatar" class="img-fluid">
							</div>
							<div class="flip-card-back">
								<img src="images/deepam.jpeg" class="img-fluid">
								<div class="team-member_detail">
									<h3 class="h3">Deepam Gupta</h3><section>IET-DAVV</section>
									<div class="b social-links">
										<span class="social-link"><a href="https://www.facebook.com/deepam.deepam.gupta" target="_blank"><i class="fab fa-facebook-square"></i></a></span>
										<span class="social-link"><a href="https://www.linkedin.com/in/deepam-gupta-7a1268151" target="_blank"><i class="fab fa-linkedin"></i></a></span>
										<span class="social-link"><a href="https://github.com/deepamgupta" target="_blank"><i class="fab fa-github"></i></a></span>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/monkey2.png" alt="Avatar" class="img-fluid">
							</div>
							<div class="flip-card-back">

								<img src="images/kishan.jpeg" class="img-fluid">
								<div class="team-member_detail">
									<h3 class="h3">Kishan Joshi</h3><section>IET-DAVV</section>
									<div class="b social-links">
										<span class="social-link"><a href="https://www.facebook.com/kishan.joshi.16" target="_blank"><i class="fab fa-facebook-square"></i></a></span>
										<span class="social-link"><a href="https://www.linkedin.com/in/kishan-joshi-86959a14b/" target="_blank"><i class="fab fa-linkedin"></i></a></span>
										<span class="social-link"><a href="https://github.com/joshi98kishan" target="_blank"><i class="fab fa-github"></i></a></span>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/monkey3.png" alt="Avatar" class="img-fluid">
							</div>
							<div class="flip-card-back">

								<img src="images/rajat.jpeg" class="img-fluid">
								<div class="team-member_detail">
									<h3 class="h3">Rajat Karahe</h3><section>IET-DAVV</section>
									<div class="b social-links">
										<span class="social-link"><a href="https://www.facebook.com/rajat.karahe.3" target="_blank"><i class="fab fa-facebook-square"></i></a></span>
										<span class="social-link"><a href="https://www.linkedin.com/in/rajat-karahe-861aa6164/" target="_blank"><i class="fab fa-linkedin"></i></a></span>
										<span class="social-link"><a href="https://github.com/Rajat-Karahe" target="_blank"><i class="fab fa-github"></i></a></span>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 team-member">
					<div class="flip-card">
						<div class="flip-card-inner">
							<div class="flip-card-front">
								<img src="images/monkey4.png" alt="Avatar" class="img-fluid">
							</div>
							<div class="flip-card-back ">

								<img src="images/samyak.jpeg" class="img-fluid">
								<div class="team-member_detail">
									<h3 class="h3">Samyak Jain</h3><section>IET-DAVV</section>
									<div class="b social-links">
										<span class="social-link"><a href="https://www.facebook.com/samyak.jain.5245" target="_blank"><i class="fab fa-facebook-square"></i></a></span>
										<span class="social-link"><a href="https://www.linkedin.com/in/samyak-jain-abaa6716a/" target="_blank"><i class="fab fa-linkedin"></i></a></span>
										<span class="social-link"><a href="https://github.com/Samyak109" target="_blank"><i class="fab fa-github"></i></a></span>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>


		<!-------------------- Team Overlay ------------------>
		<div id="team-overlay" class="text-center" onclick="off()">
			<div id="team-bottom" style="display: block;">
				<img src="images/team-members.jpeg" alt="Biochemistry Website Team DAVV, Indore (M.P.)" class="img-fluid img-thumbnail center-block">
				<div id="special-thanks">
					Special Thanks to<br>Pratik Mehta, Sumit Singh, Niti Mangwani, Rudransh Chaudhary.
				</div>
			</div>
		</div>

		<div class="container text-center">
			<button class="btn btn-info btn-md" onclick="on()">Click here for Full View</button>
		</div>

		<script>
			function on() {
				document.getElementById("team-overlay").style.display = "block";
			}

			function off() {
				document.getElementById("team-overlay").style.display = "none";
			}
		</script>

	</div>





	<div class="container text-center" id="mentors">
		<a href="#mentors-dropdown" class="btn btn-primary" data-toggle="collapse">Mentors</a>
		<div id="mentors-dropdown" class="collapse">
			<p>
				Dr. Vrinda Tokkekar<br>
				Dr. Maya Ingle<br>
				Mr. Sachin Mandwariya<br>(CEO, Workaholics Infocorp.)<br>
				Miss Anshika Jain<br>
			</p>
		</div>
	</div>






	<!-- Up Arrow -->
	<?php include 'includes/uparrow.php';?>

	<!-- footer -->
	<?php include 'includes/footer.php';?>

</body>
</html>