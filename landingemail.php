<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);
$email = $_POST['email'];

//Enable SMTP debugging.
$mail->SMTPDebug = false;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = 'thewherehouseemailtest@gmail.com';               
$mail->Password = "kittensarereallycute";                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "thewherehouseemailtest@gmail.com";
$mail->FromName = "The Where.house";

$mail->addAddress("thewherehouseemailtest@gmail.com");

$mail->isHTML(true);

$mail->Subject = "New Email Signup";
$mail->Body = "<i>$email has signed up</i>";
$mail->AltBody = "$email has signed up";

try {
    $mail->send();
	echo "Email has been sent successfully";

} catch (Exception $e) {
    echo 'Try again - email did not send';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>The Wherehouse</title>
		<link href="./assets/styles/reset.css" rel="stylesheet" type="text/css" />
		<link href="./assets/styles/landing.css" rel="stylesheet" />
		<script src="./assets/js/index.js" defer></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="blank"></div>

			<div class="center">
				<h1 class="title">
					THE <span>W</span><span>H</span><span>E</span><span>R</span
					><span>E</span>HOUSE
				</h1>

				<p class="stayUpdated">
					STAY UPDATED ON EVERYTHING WHEREHOUSE
				</p>
			</div>

			<div class="login">
				<button type="button" id='loginButton'>
					ENTER PASSWORD
				</button>
			</div>
		</div>
	</body>
</html>


