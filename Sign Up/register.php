<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div id="register-box">
		<div class="left">
		<h1>Register</h1>
			<form method="post" action="register.php" class="lg-form">
				<?php include('errors.php'); ?>
				<div>
					<label>Name</label>
					<input type="text" name="name">
				</div>
				<div>
					<label>Phone Number</label>
					<input type="tel" name="number">
				</div>
				<div>
					<label>Username</label>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div>
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password_1">
				</div>
				<div>
					<label>Confirm password</label>
					<input type="password" name="password_2">
				</div>
				<div>
					<button type="submit" class="btn" name="reg_user">Register</button>
				</div><br>
				<p>
					Already a member? <a href="login.php">Sign in</a>
				</p>
			</form>
		</div>
		<div class="right">
			<span class="loginwith">Sign in with<br />social network</span>

			<a href="https://en-gb.facebook.com/?lang=en">
				<button class="social-signin facebook">Log in with facebook</button>
			</a>
			<a href="https://twitter.com/?lang=en">
				<button class="social-signin twitter">Log in with Twitter</button>
			</a>
			<a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin">
				<button class="social-signin google">Log in with Google+</button>
			</a>
		</div>
		<div class="or">OR</div>
	</div>
</body>

</html>