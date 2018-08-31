<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
$webmaster_email = "tpmlp.work@gmail.com";


/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
if(isset($_POST["submit"])){
	$name = $_POST['name'] ;
	$email = $_POST['email'] ;
	$subject = $_POST["subject"] ;
	$mobile = $_POST["mobile"] ;
	$messages = $_POST['messages'] ;
}else{
	echo "Page Error 404" ;
}

$msg = 
"Name: " . $name . "\r\n" . 
"Email: " . $email . "\r\n" .
"Mobile:" . $mobile . "\r\n" .
"Subject: " . $subject . "\r\n" . 
"Messages: " . $messages ;

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}



// If the form fields are empty, redirect to the error page.
if (empty($name) || empty($email) || empty($subject) || empty($messages)) {
	echo "Please ensure you have completed all fields before submitting the form." ;
}

/* 
If email injection is detected, redirect to the error page.
If you add a form field, you should add it here.
*/
elseif ( isInjected($email) || isInjected($name)  || isInjected($messages) ) {
	echo "Please ensure that there is only one email address." ;
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {
	// Always set content-type when sending HTML email
	// $headers = "MIME-Version: 1.0" . "\r\n";
	// $headers .= 'From:www.tpmlp.com' . "\r\n";
	// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// $subject = "This is message send through local host using xampp" ;

	// mail($webmaster_email,$subject,$msg,$headers);
	// echo "ส่งข้อความสำเร็จ" ;





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
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "tpmlp.work@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "tpmlp11027";
//Set who the message is to be sent from
$mail->setFrom('tpmlp.work@gmail.com', 'www.tpmlp.com');
//Set who the message is to be sent to
$mail->addAddress('tpmlp.work@gmail.com', 'tpmlp.work');
//Set the subject line
$mail->Subject = 'www.tpmlp.com test email';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
$mail->msgHTML($msg);
 
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "ส่งข้อความสำเร็จ" ;
}
	
}
?>