<?php 

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'feeding_goa');


// Feedback

if (isset($_POST['feed_reg'])) {
  
    $name = mysqli_real_escape_string($db, $_POST['Name']);
    $address = mysqli_real_escape_string($db, $_POST['Address']);
    $gender = mysqli_real_escape_string($db, $_POST['Gender']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);
    $feedback = mysqli_real_escape_string($db, $_POST['Feedback']);
    
  
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if (empty($gender)) { array_push($errors, "Gender is required"); }
    if (empty($feedback)) { array_push($errors, "Feedback is required"); }
  
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
  
        $query = "INSERT INTO feedback(`F_id`, `Name`, `Gender`, `Address`, `Email`, `Feedback`) 
                  VALUES  ('', '$name', '$gender', '$address', '$email', '$feedback');";
        mysqli_query($db, $query);
        $_SESSION['success'] = "You are now logged in";
        header('location: ../index.php');
    }
}

?>