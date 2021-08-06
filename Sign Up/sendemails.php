<?php 
    $to_email = "aniketsardesai54@gmail.com";
    $subject = "Simple Email Test";
    $body = "Hi Aniket Sardesai";
    $headers = "From: aniketsardesai44@gmail.com";

    if(mail($to_email, $subject, $body, $headers)){
        echo "Email successfully sent to $to_email ...";
    }else{
        echo "Email not sent";
    }
?>