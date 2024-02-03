<?php

require('conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = false;

//Set PHPMailer to use SMTP.
$mail->isSMTP();

//Set SMTP host name                          
$mail->Host = "smtp.office365.com";

//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;

//Provide username and password    

$mail->Username = "webmaster@mpc.gov.my";
$mail->Password = "webmaster*18";

//If SMTP requires TLS encryption then set it

$mail->SMTPSecure = "tls";

//Set TCP port to connect to

$mail->Port = 587;

$mail->From = "webmaster@mpc.gov.my";
$mail->FromName = "WebMaster";

$mail->addAddress("fatihah@mpc.gov.my", "Nur Fatihah");
$mail->isHTML(true);

$mail->Subject = "Reset Password";
$mail->Body = "Hi,

<br><br>

We cannot simply send you your old password. A unique link to reset your password has been generated for you.
<br>
To reset your password, click the following link and follow the instructions

<br><br>

Thank you.";

$mail->AltBody = "This is a plain-text message body";

try {

    $mail->send();

    echo "<div class=\"alert alert-success\" role=\"alert\">Yeah successfully create your new password.</div>";
} catch (Exception $e) {

    echo "Mailer Error: " . $mail->ErrorInfo;
}
