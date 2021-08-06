<?php 
  session_start(); 

  extract($_POST);
  $Name = $_SESSION['fname'];
  $Gmail = $_SESSION['gmail'];
  $Number = $_SESSION['pnumber'];
  $DAddress = $_SESSION['address'];

  $errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'feeding_goa');


// Feedback

if (isset($_POST['Fund_submit'])) {
  
    $Name = mysqli_real_escape_string($db, $_POST['Name']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Address= mysqli_real_escape_string($db, $_POST['Address']);
    $Number = mysqli_real_escape_string($db, $_POST['Number']);
    $Fund = mysqli_real_escape_string($db, $_POST['price']);

    $_SESSION['Price'] = $_POST['price'];
    $_SESSION['Name'] = $_POST['Name'];
    
    $query = "INSERT INTO `money`(`M_id`, `Name`, `Email`, `Number`, `Address`, `Fund`) 
            VALUES ('', '$Name', '$Email', '$Number', '$Address', '$Fund');";

    mysqli_query($db, $query);

    header('location: ../razorpay/pay.php');

}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fund Donation</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="food.css">
        <link href="../Images/feeding-goa.ico" rel="icon">
    </head>
    
    <header class="site-header-wrap">
        <div class="site-header">
            <a href="../index.php"><img src="../Images/g1172.png" width="350px" alt='LOGO'></img></a>
        </div>
    </header>
<body>
    
    <section>
      <div class="container-fluid">
        <div class="row" style="display: flex;">
          <div class="col-md-6 volunterimg-spacing sharefood-img">
        </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="form-spacing">
              
              <form action="fund.php" method="post">
                
                <h3 class="shareFoodSub-heading">Fill in the below form and we will help you connect to the city in the best</h3>
                  <input type="text" value="<?php echo $Name; ?>" class="text" name="Name" placeholder="Full Name*" required>
                  <input type="tel" value="<?php echo $Number; ?>" name="Number" placeholder="Mobile Number*" required>
                  <input type="email" value="<?php echo $Gmail; ?>" name="Email" placeholder="Email Address*" required>
                                
                  <div class="form-group">
                    <input value="<?php echo $DAddress; ?>" name="Address" type="text" class="text" style="width: 100% !important;margin-left: -4px;" required placeholder="Food Pick-Up Address*">
                  </div>
                  <div class="form-group">
                    <input name="price" type="text" class="text" style="width: 100% !important;margin-left: -4px;" required placeholder="Enter Amount &#8377;">
                  </div>
                                
                    <div class="termsbox">
                      <div class="form-group" style="font-size: 11px !important;margin-bottom: 30px;width:90%;display: inline-flex;">
                        <input class="formcheckbox1" type="checkbox" value="By checking this box, I agree to follow the Robin Hood Army's core principles." required>
                        <p class="checkbox-text">By checking this box, I confirm that I am donating this amount for feeding needy people.</p>
                      </div>
                  </div>

                  <input value="Submit" type="submit" name="Fund_submit" class="btn btn-success"/>

                  <p class="shareFood-textbox" id="shareFoodMessage">Thank you for doing your bit - we will try our best to serve, you will be redirected to the local city WhatsApp group where you can coordinate with our Robins.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>