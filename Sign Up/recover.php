<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Recover Password</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div id="recovery-box">
		<div class="center">
			<h1>Recover Password</h1>
			<form method="post" action="recover.php" class="lg-form">
				<?php include('errors.php'); ?>
				<div>
					<p class="bg-success text-white px-3" style="font-size: 18px; height:30px;">Please enter the registered email.</p>
				</div>
				<div>
					<label>Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
				<div>
					<button type="submit" class="btn" name="rec_over">Send Mail</button>
				</div><br>
				<p>
					Already a member? <a href="login.php">Sign in</a>
				</p>
			</form>
		</div>
	</div>
</body>

</html>