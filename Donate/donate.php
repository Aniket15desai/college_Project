<?php
session_start();

if (isset($_GET['logout'])) {
  unset($_SESSION['username']);
  header("location: donate.php");
}

if (isset($_POST['donate_reg'])) {
  $_SESSION['fname'] = $_POST['fname'];
  $_SESSION['gmail'] = $_POST['gmail'];
  $_SESSION['pnumber'] = $_POST['pnumber'];
  $_SESSION['address'] = $_POST['Address'];
  if ($_POST['onMethod'] == "food") {
    header('location: food.php');
  } else {
    header('location: fund.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery-3.3.1.slim.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link href="../Images/feeding-goa.ico" rel="icon">
</head>

<header class="site-header-wrap">
  <div class="site-header">
    <a href="../index.php"><img src="../Images/g1172.png" width="350px" alt='LOGO'></img></a>
  </div>
</header>

<nav id="myNav">
  <div class="menu-icon"><span class="fa fa-bars"></span></div>
  <div class="logo">अन्न दान</div>
  <div class="nav-items">
    <li><a href="../Menu/menu.php">Menu</a></li>
    <li><a href="#">Donate</a></li>
    <li><a href="../Feedback/feedback.php">Feedback</a></li>
    <div class="nav-sign user">
      <?php if (isset($_SESSION['username'])) : ?>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></button>
      <?php endif ?>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a href="index.php?logout='1'">Logout</a></li>
      </div>
    </div>
    <?php if (!isset($_SESSION['username'])) : ?>
      <li class="login"><a href="../Sign Up/login.php">Login / Register</a></li>
    <?php endif ?>
  </div>
  <div class="search-icon"><span class="fa fa-search"></span></div>
  <div class="cancel-icon"><span class="fa fa-times"></span></div>
  <form action="../Searchbox/details.php" method="post">
    <input type="text" name="search" id="search" class="form-control form-control-sm rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
    <input type="submit" name="submit" value="Search" class="btn btn-info btn-sm rounded-0">
    <div class="col-md-5 display">
      <div class="list-group" id="show-list">

      </div>
    </div>
  </form>
  <?php if (!isset($_SESSION['username'])) : ?>
    <li class="register"><a href="../Sign Up/login.php">Login / Register</a></li>
  <?php endif ?>

  <div class="nav-sign">
    <?php if (isset($_SESSION['username'])) : ?>
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></button>
    <?php endif ?>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li><a href="../index.php?logout='1'">Logout</a></li>
    </div>
  </div>
</nav>

<body>
  <div class="col-md-4 display1" id="myDisplay">
    <div class="list-group" id="view-list">

    </div>
  </div>
  <div class="container">
    <h1>Donate </h1><br><br>
    <form method="post">
      <label>Name</label>
      <input type="text" class="text" name="fname" placeholder="Your name..">
      <label>Gender &nbsp;&nbsp;&nbsp;</label>
      <select name="Gender" id="" style="width: 200px;">
        <option selected="true" disabled="disabled"> Select Gender </option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select><br><br>
      <label>Address</label>
      <input type="text" class="text" name="Address" placeholder="Your Address..">
      <label>Phone Nnmber</label>
      <input name="pnumber" type="tel" required placeholder="Your Number..." /><br>
      <label>Email</label>
      <input name="gmail" type="email" required placeholder="you@domain.com" /><br>
      <label>Donation Method &nbsp;&nbsp;&nbsp;</label>
      <select name="onMethod" id="method" style="width: 200px;">
        <option selected="true" disabled="disabled"> Select Donation Type </option>
        <option value="food">Food</option>
        <option value="fund">Fund</option>
      </select><br><br>

      <label>Message</label>
      <textarea name="Message" placeholder="Write something.." style="height:200px"></textarea>

      <input class="btn btn-primary" type="submit" value="Submit" name="donate_reg">
      <button class="btn btn-danger" type="reset">Reset</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="footer-distributed">

    <div class="footer-left">
      <img src="../Images/feeding-goa.ico">
      <h3>Anna<span>dāna</span></h3>

      <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="Menu/menu.php">Menu</a>
        |
        <a href="Menu/about.php">About</a>
        |
        <a href="Donate/donate.php">Donate</a>
      </p>

      <p class="footer-company-name">© 2021 Anna dāna Pvt. Ltd.</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><a href="https://goo.gl/maps/ZoMsSkANPAFUKtrr9" target="_blank"><span>375 - Neha Enterprices,
              Bldg. No. A - 1, Sector - 1</span>
            New Vaddem, Vasco, Goa - 403802</a></p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="tel:+917020464331">+91 7020464331</a></p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:feedinggoa123@gmail.com">feedinggoa123@gmail.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the company</span>
        “We make a living by what we get, but we make a life by what we give.”
      </p>
      <div class="footer-icons">
        <a href="https://www.facebook.com/profile.php?id=100071043323811" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/danam_anna" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.instagram.com/_feedinggoa_/" target="_blank"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </footer>

</body>

<script src="../js/ajax.js"></script>
<script src="../index.js"></script>

</html>

<script>
  $(document).ready(function() {
    // Send Search Text to the server
    $("#search").keyup(function() {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "../Searchbox/action.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function(response) {
            $("#show-list").html(response);
          },
        });
      } else {
        $("#show-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function() {
      $("#search").val($(this).text());
      $("#show-list").html("");
    });
  });


  $(document).ready(function() {
    // Send Search Text to the server
    $("#search").keyup(function() {
      let searchText = $(this).val();
      if (searchText != "") {
        $.ajax({
          url: "../Searchbox/action.php",
          method: "post",
          data: {
            query: searchText,
          },
          success: function(response) {
            $("#view-list").html(response);
          },
        });
      } else {
        $("#view-list").html("");
      }
    });
    // Set searched text in input field on click of search button
    $(document).on("click", "a", function() {
      $("#search").val($(this).text());
      $("#view-list").html("");
    });
  });
</script>