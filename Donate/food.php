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

if (isset($_POST['food_submit'])) {
  
    $Fname = mysqli_real_escape_string($db, $_POST['Fname']);
    $Email = mysqli_real_escape_string($db, $_POST['Gmail']);
    $Address= mysqli_real_escape_string($db, $_POST['PickUpAddress']);
    $Pnumber = mysqli_real_escape_string($db, $_POST['Mnumber']);
    $Quantity = mysqli_real_escape_string($db, $_POST['quantity']);
    $City = mysqli_real_escape_string($db, $_POST['City']);
    $Surplus = mysqli_real_escape_string($db, $_POST['surplus']);
    
    if(count($errors) == 0){

        $query = "INSERT INTO `items`(`I_id`, `Name`, `Email`, `Number`, `City`, `Address`, `Quantity`, `Surplus Food`) 
                VALUES ('', '$Fname', '$Email', '$Pnumber', '$City', '$Address', '$Quantity', '$Surplus');";

        $SQuery = mysqli_query($db, $query);

        if($SQuery){
            header('location: ../index.php');
        }
        else{
            echo "Not inserted";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food Donation</title>
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
              
              <form action="food.php" method="post">
                <h2 class="sharefood-heading">Is this Surplus Food?</h2>
                  <select class="shareFoodSelector" name="surplus" aria-required="true" required onchange="surplusFoodDropdown(this.value)">
                    <option selected="" disabled="" hidden="" value="">Yes/No*</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                <h3 class="shareFoodSub-heading">Fill in the below form and we will help you connect to the city in the best</h3>
                  <input type="text" value="<?php echo $Name; ?>" class="text" name="Fname" placeholder="Full Name*" required>
                  <input type="tel" value="<?php echo $Number; ?>" name="Mnumber" placeholder="Mobile Number*" required>
                  <input type="email" value="<?php echo $Gmail; ?>" name="Gmail" placeholder="Email Address*" required>
                                
                  <div class="form-group">
                    <select name="City" class="selector" style="width: 47% !important;" required aria-required="true">
                      <option selected="" disabled="" value="">Select City*</option>
                      <option value="Margoa">Margoa</option>
                      <option value="Margoa">Vasco</option>
                      <option value="Margoa">Panjim</option>
                      <option value="Margoa">Mapusa</option>
                      <option value="Siolim">Siolim</option>
                    </select>
                    <input value="<?php echo $DAddress; ?>" name="PickUpAddress" type="text" class="text" style="width: 48% !important;margin-left: -4px;" required placeholder="Food Pick-Up Address*">
                  </div>
                  <select name="quantity" class="selector" required aria-required="true">
                    <option selected="" disabled="" value="">Meal Quantity*</option>
                    <option value="1kg-5kg">1kg-5kg</option>
                    <option value="5kg-10kg">5kg-10kg</option>
                    <option value="10kg-20kg">10kg-20kg</option>
                  </select>
                                
                    <div class="termsbox">
                      <div class="form-group" style="font-size: 11px !important;margin-bottom: 30px;width:90%;display: inline-flex;">
                        <input class="formcheckbox1" type="checkbox" value="By checking this box, I agree to follow the Robin Hood Army's core principles." required>
                        <p class="checkbox-text">By checking this box, I confirm the food quality is safe and fit for consumption.</p>
                      </div>
                  </div>

                  <input value="Submit" type="submit" name="food_submit" class="btn btn-success"/>

                  <p class="shareFood-textbox" id="shareFoodMessage">Thank you for doing your bit - we will try our best to serve, you will be redirected to the local city WhatsApp group where you can coordinate with our Robins.</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>