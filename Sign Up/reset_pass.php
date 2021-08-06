<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
  <div id="recovery-box">
    <div class="center">
      <h1>Change Password</h1>
      <form method="post" action="" class="lg-form">
        <?php include('errors.php'); ?>
        <p class="bg-danger text-white" style="font-size: 17px;">
          <?php
          if (isset($_SESSION['passMsg'])) {
            echo $_SESSION['passMsg'];
          } else {
            echo $_SESSION['passMsg'] = "";
          }
          ?></p>
        <div>
          <label>New Password</label>
          <input type="password" name="password_1">
        </div>
        <div>
          <label>Confirm Password</label>
          <input type="password" name="password_2">
        </div><br>
        <div>
          <button type="submit" class="btn" name="resetPass">Update Password</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>