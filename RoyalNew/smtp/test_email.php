<?php


require("class.phpmailer.php");


$mail = new PHPMailer();

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "mail.royalinstitute.co";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "admin@royalinstitute.co";                // SMTP username
$mail->Password = "Lp01071967@";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'hello@royalinstitute.co';
$mail->FromName = 'Royal Inquiry';
$mail->AddAddress('royalgroupcdr@gmail.com');  // Add a recipient
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = "test mail";
//$msg= 'Test mail';

$msg = "Welcome to Royal Institute";
$mail->Body    = $msg;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
	print_r($mail);
   echo 'error';
   //echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}


//Reply to Customer

echo 'success';
exit(0);?>
