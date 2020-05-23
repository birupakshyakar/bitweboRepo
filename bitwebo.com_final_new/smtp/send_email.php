<?php


require("class.phpmailer.php");


$mail = new PHPMailer();

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "mail.bitwebo.com";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "admin@bitwebo.com";                // SMTP username
$mail->Password = "Lp14112018@";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'support@bitwebo.com';
$mail->FromName = 'Bitwebo Web Inquiry';
$mail->AddAddress('biroyalgroup@gmail.com');  // Add a recipient
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = "Bitwebo Inquiry Mail";
//$msg= 'Test mail';
$name = $_POST['name'];
$mail_id = $_POST['mail_id'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];


$msg = "New Inquiry Details <br> 
        Name : ".$name."<br>
        Mail id : ".$mail_id."<br>
        Mobile Number : ".$mobile."<br>
        Subject: ".$subject."<br>
        Message : ".$msg."<br>";
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
