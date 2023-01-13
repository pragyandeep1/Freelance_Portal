
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
	    $mail->addAddress($_POST["userEmail"]);     //Add a recipient

	    //Content                                 //Set email format to HTML
	    $mail->Subject = "Feedback to Freelance Web Portal";
	    $mail->Body    = "<p>We are glad to receive your feedback.<br><br>This is a system generated message. Please don't reply to this email.<br><br></p>";
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