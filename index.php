<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SalesKPISystem</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<!--===============================================================================================-->
</head>

<style type="text/css">

form i1 {
    margin-left: 75px;
    cursor: pointer;
}

</style>

<body>
	
	<div class="limiter">
		<div class="container-login100">
		        <?php if (isset($_SESSION['login_error_msg'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['login_error_msg']; ?></b>
        </div>
        <?php } unset($_SESSION['login_error_msg']); ?>
			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-02.gif" alt="IMG">
					<img src="images/img-03.png" alt="IMG">
					

				</div>

				<form  name='form1' id='form1' action="welcome.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Manager Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Email format not valid!">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">

						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						
						<span class="focus-input100"></span>

						<span class="symbol-input100">
							
							<i class="fa fa-lock"></i>

						
						</span>
						

					</div>
					<i1 class="bi bi-eye-slash" id="togglePassword"> Show Password</i1>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" formaction="welcome.php">
							Login
						</button>
					</div>



					<div class="text-center p-t-136">
						<a class="txt2" href="#">
						&copy; Copyright 2021 Fouad & Mya

						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})

	</script>

<script >
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});

</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>