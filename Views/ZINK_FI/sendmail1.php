
<?php

error_reporting(E_ALL);
require("PHPMailer-5.2-stable/class.phpmailer.php");
include("PHPMailer-5.2-stable/class.smtp.php");
//require_once('PHPMailerAutoload.php');
//include("class.smtp.php"); // include the class name
$email=$_POST['email'];

//$email='amira.doghri@esprit.tn';
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
//$mail->From="doghriamira@gmail.com";
$mail->FromName="Zink";
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "doghriamira@gmail.com";
$mail->Password = "9601902724761942";

$mail->Subject = "Inscription newsletter zink";
$mail->Body = "consulter notre site pour plus d'information e ";
$mail->AddAddress($email,"");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
   header('Location: Z-news.php');
 }

?>
