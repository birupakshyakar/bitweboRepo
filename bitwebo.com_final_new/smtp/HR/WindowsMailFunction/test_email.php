<?php


require("class.phpmailer.php");


$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "mail.modokaan.in";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "support@modokaan.in";                // SMTP username
$mail->Password = "Nigam@2019";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'support@modokaan.in';
$mail->FromName = 'From name';
$mail->AddAddress('ovihosting@gmail.com');  // Add a recipient

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
	print_r($mail);
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
exit(0);?>
