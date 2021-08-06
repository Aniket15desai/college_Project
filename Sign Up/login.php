<?php

if (isset($_SESSION['username'])) {
	header('location: index.php');
}
?>

<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Sign In</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div id="login-box">
		<div>
			<p class="bg-success text-white px-4" style="font-size: 15px">
				<?php
				include('errors.php');
				if (isset($_SESSION['msg'])) {
					echo $_SESSION['msg'];
				} else {
					echo $_SESSION['msg'] = "You are logged out. Plese login again.";
				}
				?></p>
		</div>
		<div class="left">
			<h1>Login</h1>
			<form method="post" action="login.php" class="lg-form">
				<div>
					<label>Username</label>
					<input type="text" name="username" placeholder="Username" value="<?php if (isset($_COOKIE['emailcookie'])) {
																							echo $_COOKIE['emailcookie'];
																						} ?>">
				</div>
				<div>
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" value="<?php if (isset($_COOKIE['passwordcookie'])) {
																								echo $_COOKIE['passwordcookie'];
																							} ?>">
				</div>

				<div>
					<button type="submit" class="btn" name="login_user">Login</button>
				</div><br>
				<p style="font-size: 15px">
					Forget Your Password No Worry? <a href="recover.php">Click Here</a>
				</p>
				<p style="font-size: 17px">
					Not yet a member? <a href="register.php">Sign up</a>
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