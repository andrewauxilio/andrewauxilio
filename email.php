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
//Create a new PHPMailer instance
$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 0;
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
$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
// if (!$mail->send()) {
//     echo "<script>alert('Fail');</script>";
// } else {
//     echo  "<script>alert('Success');</script>";
// }

?>

<!-- [curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
curl.cainfo="C:\xampp\perl\vendor\lib\Mozilla\CA\cacert.pem"

[openssl]
; The location of a Certificate Authority (CA) file on the local filesystem
; to use when verifying the identity of SSL/TLS peers. Most users should
; not specify a value for this directive as PHP will attempt to use the
; OS-managed cert stores in its absence. If specified, this value may still
; be overridden on a per-stream basis via the "cafile" SSL stream context
; option.
;openssl.cafile="C:\xampp\apache\bin\curl-ca-bundle.crt"
openssl.cafile="C:\xampp\perl\vendor\lib\Mozilla\CA\cacert.pem" -->