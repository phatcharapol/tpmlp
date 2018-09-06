<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/

	$name = $_POST['name'] ;
	$email = $_POST['email'] ;
	$subject = $_POST["subject"] ;
	$mobile = $_POST["mobile"] ;
	$messages = $_POST['messages'] ;
	$captcha=$_POST['g-recaptcha-response'];

    if(!$captcha){
          echo '***Please check the the captcha form.***';
          exit;
     }

$msg = 
"Name: " . $name . "<br>" . 
"Email: " . $email . "<br>" .
"Mobile:" . $mobile . "<br>" .
"Subject: " . $subject . "<br>" . 
"Messages: " . $messages ;


/**
 * This example shows making an SMTP connection with authentication.
 */
 
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Bangkok');
 

 
//Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host =  "smtp.gmail.com"; 
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port =587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth =true;
//Username to use for SMTP authentication
$mail->Username = "tpmlp.services@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "tpmlp11027";
//Set who the message is to be sent from
$mail->setFrom('tpmlp.service@gmail.com',$email);
//Set who the message is to be sent to
$mail->addAddress('tpmlp.work@gmail.com','Inbox Job TPMLP');
//Set the subject line
$mail->Subject = 'www.tpm-machinery.com';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->isHTML(true);   
$mail->msgHTML($msg);
 
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Success" ;
}
	

?>