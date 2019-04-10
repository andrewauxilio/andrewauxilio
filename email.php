<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if(isset($_POST['submit'])){

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->SMTPDebug = 3;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "andrew.auxilio@gmail.com";
    $mail->Password = "Na\$areth";

    //Set who the message is to be sent from
    $mail->setFrom('andrew.auxilio@gmail.com', 'Andrew\'s Website');

    //Set who the message is to be sent to
    $mail->addAddress('andrew.auxilio@gmail.com', 'Andrew Auxilio');

    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = '$_POST["name"] + $_POST["subject"]';
        // $_POST["name"] + " has sent you a message. <br>" + 
        // $_POST["subject"] + "<br>" +
        // $_POST["message"] + "<br>" + "Mobile/Phone: " + 
        // $_POST["phone"] + "E-mail: " + 
        // $_POST["email"];

    if (!$mail->send()) {
        echo "<script>alert('Fail');</script>";
    } else {
        echo  "<script>alert('Success');</script>";
    }
}

?>
