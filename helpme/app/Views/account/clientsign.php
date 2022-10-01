<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="/system_image/logo.jpg" type="image/icon type">
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url()?>/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>/css/main.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
	<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/system_image/logo.jpg" alt="IMG">
				</div>
				<?php if(isset($validation)):?>
					<div class="alert alert-warning">
						<?= $validation->listErrors() ?>
					</div>
				<?php endif;?>

				<form action="SignupController/store" method="post">
					<span class="login100-form-title">
						Register User
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required" >
						<input class="input100" type="text" for="name" name="name" id="name"placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" for="email" name="email" id="email"placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
						<input class="input100" type="text" for="phone_no" name="phone_no" id="phone_no"placeholder="Phone Number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" for="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" for="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Role is required">
						<select name = "role" class="input100" >
							<option value="client">client</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<button type="button" class="wrap-input100 btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
						Terms & Condition
					</button>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Signup
						</button>
					</div>

					<div class="text-center p-t-12">
						<!-- <span class="txt1">
						Forgot
					</span>
					<a class="txt2" href="#">
					Username / Password?
				</a> -->
			</div>

			<div class="text-center p-t-136">
				<!-- <a class="txt2" href="#">
				Create your Account
				<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
			</a> -->
		</div>

		<div class="modal" id="myModal">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Terms & Condition</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<h3>Welcome to helpmetracker!</h3>
						<p>These terms and conditions outline the rules and regulations for the use of HelpMe Tracker System's Website</p>
						<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use helpmetracker if you do not agree to take all of the terms and conditions stated on this page.</p>
						<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.
							<h3>Cookies</h3>
							<p>We employ the use of cookies. By accessing helpmetracker, you agreed to use cookies in agreement with the HelpMe Tracker System's Privacy Policy.</p>
							<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
							<h3>License</h3>
							<p>Unless otherwise stated, HelpMe Tracker System and/or its licensors own the intellectual property rights for all material on helpmetracker. All intellectual property rights are reserved. You may access this from helpmetracker for your own personal use subjected to restrictions set in these terms and conditions.</p>
							<p>You must not:</p>
							<ul>
								<li>Republish material from helpmetracker</li>
								<li>Sell, rent or sub-license material from helpmetracker</li>
								<li>Reproduce, duplicate or copy material from helpmetracker</li>
								<li>Redistribute content from helpmetracker</li>
							</ul>
							<input type="checkbox" name="check" id="GFG"
						   value="1" required>Terms & Condition

						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-bs-dismiss="modal">Okay</button>
						</div>


					</form>
				</div>
			</div>
		</div>




		<!--===============================================================================================-->
		<script src="<?=base_url()?>/vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?=base_url()?>/vendor/bootstrap/js/popper.js"></script>
		<script src="<?=base_url()?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?=base_url()?>/vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="<?=base_url()?>/vendor/tilt/tilt.jquery.min.js"></script>
		<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
		</script>
		<!--===============================================================================================-->
		<script src="<?=base_url()?>/js/main.js"></script>

	</body>
	</html>
