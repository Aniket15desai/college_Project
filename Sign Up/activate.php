<?php
    session_start();

    include('server.php');

    if(isset($_GET['token'])){
        $token = $_GET['token'];
        $status = "active";

        $query = "UPDATE `users` SET `status`= '$status' WHERE `token`= '$token'";

        $update = mysqli_query($db, $query);

        if($update){
            if(isset($_SESSION['msg'])){
                $_SESSION['msg'] = "Account updated successfully";
                header('location: login.php');
            }else{
                $_SESSION['msg'] = "You are Logged out.";
                header('location: login.php');
            }
        }else{
            $_SESSION['msg'] = "Account not updated";
            header('location: register.php');
        }
    }
?>