<?php
require "../backend/connection.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/icons/logo-blue.png" />

	<title>Sign Up | SMDC JQB</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100" style="background: linear-gradient(rgba(0, 48, 255, .15), rgba(0, 48, 255, .15)), url(&quot;../img/bg/bg.jpg&quot;);
		background-size: cover;
		background-position: center;">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-8 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="card">
							<div class="card-header py-0" style="background-color: #0030FF;">
								<div class="row">
									<div class="col-4">
										<img src="../img/icons/logo.png" alt="logo" class="img-fluid">
									</div>
									<div class="col-8 text-white d-flex align-items-center">
										<div class="row">
											<h1 class="h2 text-white mb-0">Create New Account</h1>
											<p class="lead fs-6 mb-0">
												Lets get started by registering your informations.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="m-sm-3 px-xl-3">
									<form action="../backend/signup.php" method="post" class="needs-validation" novalidate>
										<div class="row g-4 my-3">
											<div class="col">
												<label class="form-label">First Name</label>
												<input type="text" class="form-control form-control-lg" name="firstname" placeholder="Enter your First name" aria-label="First name" required>
												<div id="validationFirstName" class="invalid-feedback">
													Please provide first name.
												</div>
											</div>
											<div class="col">
												<label class="form-label">Last Name</label>
												<input type="text" class="form-control form-control-lg" name="lastname" placeholder="Enter your Last name" aria-label="Last name" required>
												<div id="validationLastName" class="invalid-feedback">
													Please provide last name.
												</div>
											</div>
										</div>

										<div class="row g-4 mb-3">
											<div class="col">
												<label class="form-label">Email</label>
												<input type="email" class="form-control form-control-lg" name="email" placeholder="Enter your Email Address" aria-label="email" required>
												<div id="validationEmail" class="invalid-feedback">
													Please provide email address.
												</div>
											</div>
											<div class="col">
												<label class="form-label">Contact No.</label>
												<input type="tel" class="form-control form-control-lg" name="contact-number" placeholder="Enter your Contact Number" aria-label="Contact Number" required>
												<div id="validationFContact" class="invalid-feedback">
													Please provide contact number.
												</div>
											</div>
										</div>

										<div class="row g-4 mb-3">
											<div class="col">
												<label class="form-label">Password</label>
												<input type="password" class="form-control form-control-lg" name="password" placeholder="Enter your Password" aria-label="password" required>
												<div id="validationPass" class="invalid-feedback">
													Please provide password.
												</div>
											</div>
											<div class="col">
												<label class="form-label">Confirm Password</label>
												<input type="password" class="form-control form-control-lg" name="confirm-password" placeholder="Confirm Password" aria-label="Confirm Password" required>
												<div id="validationCPass" class="invalid-feedback">
													Please confirm your password.
												</div>
											</div>
										</div>

										<div class="row d-flex justify-content-between px-3">
											<div class="form-check col-xl-12 col-sm-12 col-md-12">
												<input id="invalidCheck" type="checkbox" class="form-check-input" value="" name="terms-and-condition" required checked>
												<label class="form-check-label text-small d-flex justify-content-start" for="customControlInline">Creating an account means you agree you agree with our<a href="" class="ms-1"> Terms and Condition</a></label>
											</div>
										</div>

										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Register</button>
										</div>

										<div class="row d-flex justify-content-start mt-4">
											<div class="col-auto d-flex justify-content-start">
												<p class="me-2">Already have account?</p>
												<a class="text-decoration-underline" href="pages-sign-in.php">
													Sign in
												</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="../js/app.js"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(() => {
			'use strict'

			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			const forms = document.querySelectorAll('.needs-validation')

			// Loop over them and prevent submission
			Array.from(forms).forEach(form => {
				form.addEventListener('submit', event => {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
		})()
	</script>

</body>

</html>