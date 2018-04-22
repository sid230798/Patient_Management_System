<?php
include('connection.php');
require 'PHPMailerAutoload.php';

$query1 = "SELECT * FROM patient where email = '" . $_POST["email"] . "'";
$result = mysqli_query($conn,$query1);
$count = mysqli_num_rows($result);
//echo "num row executed".$count."\n";
if($count==0)
{
	
	$query = "INSERT INTO patient (first_name, last_name, email, gender,address,phone) VALUES('" . $_POST["first_name"] . "', '" . $_POST["last_name"] . "', '" . $_POST["email"] . "', '" . $_POST["gender"] . "', '" . $_POST["address"] . "', " . $_POST["mobile_no"] . ")";
$current_id = mysqli_query($conn,$query);
//echo $query."\n";

 if(!empty($current_id))
	{
	$mail = new PHPMailer;

	$mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'shubhamsinghmehta727@gmail.com';                 // SMTP username
	$mail->Password = 'kukku123';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('shubhamsinghmehta727@gmail.com', 'Mail test');
	$add = $_POST["email"];
	$mail->AddAddress($add);     // Add a recipient

	$mail->addReplyTo('shubhamsinghmehta727@gmail.com');



	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Registration';
	$mail->Body    = '<div>This is the HTML message body <b>in bold!</b></div>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send())
		{
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	else 
		{
		echo 'Message has been sent';
		}
	}
	
} 
else 
{
	$message = "User Email is already in use.";	
	echo $message;
	
}

?>

$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'shubhamsinghmehta727@gmail.com';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('shubhamsinghmehta727@gmail.com', 'Mail test');
$mail->addAddress('sanurag616@gmail.com');     // Add a recipient

$mail->addReplyTo('shubhamsinghmehta727@gmail.com');



//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<div>This is the HTML message body <b>in bold!</b></div>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}