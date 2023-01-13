
<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require '../plugins/Exception.php';
	require '../plugins/PHPMailer.php';
	require '../plugins/SMTP.php';
	// require_once './controllers/authController.php';
	// require_once "../plugins";

	define("PROJECT_NAME", "localhost/Freelancer/home/");

	// list($firstname, $username, $email) = array_values($_POST);
	// $mail = new PHPMailer\PHPMailer\PHPMailer;

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);
	

	try {
		// Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->isHTML(true);
		$mail->Host = "smtp-mail.outlook.com";/*CONFIG['email']['host']*/
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Port = 587;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Username = 'noreply@okcl.org'; /*CONFIG['email']['Username']*/
		$mail->Password = "#kcl#6789";

	    //Recipients
	    $mail->setFrom("noreply@okcl.org","Freelance Portal");
	    $mail->addAddress($_POST["user_email"]);     //Add a recipient

	    //Content                                 //Set email format to HTML
	    $mail->Subject = "Forgot Password Recovery";
	    $mail->Body    = "<p>Click here to recover your password.<br>
	    <a href='".PROJECT_NAME."contact.php?email=".$user[0]["email"]."&token=".$token."'
	    style='
	    	background-color:#28a745!important;
	    	box-sizing:border-box;
	    	color:#fff;
	    	text-decoration:none;
	    	display:inline-block;
	    	font-size:inherit;
	    	font-weight:500;
	    	line-height:1.5;
	    	white-space:nowrap;
	    	vertical-align:middle;
	    	border-radius:.5em;
	    	font-family:-apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Helvetica,Arial,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;!important;
	    	padding:.75em 1.5em;border:1px solid #28a745'>Reset Your Password</a><br><br>If you did not request to reset your password, kindly ignore this email.<br><br></p>";
	    // $mail->AltBody = strip_tags($html);

	    if (!$mail->send()) {
	    	$error_message = "Mailer Error: ".$mail->ErrorInfo;
	    }
	    else{
	    	$success_message = "Message has been sent successfully.";
	    }
		
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>