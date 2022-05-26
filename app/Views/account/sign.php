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
                    <option value=""></option>
                    <option value="admin">admin</option>
                    <option value="staff">staff</option>
                    <option value="staff2">staff2</option>
                    <option value="admin2">admin2</option>
                    </select>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-id-card" aria-hidden="true"></i>
                    </span>
                  </div>

                  <div class="container-login100-form-btn">
                    <button type="submit" name="submit"class="login100-form-btn">
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
                  						<a class="txt2" href="login">

                  							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
																	Already Have a Account
                  						</a>
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
