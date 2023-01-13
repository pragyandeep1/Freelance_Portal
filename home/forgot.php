<?php
	require_once('config.php');
	if (!session_id()) {
		session_start();
	}
	
 	// require_once 'controllers/authController.php';
 	if (isset($_POST['forgot_password'])) {
 		if (!empty($_POST["user_email"])) {
 			$email = trim($_POST["user_email"]);
 		}
 		else{
 			$error_message = "<li>Your Email is required</li>";
 		}
 		if (empty($error_message)) {
 			$query = $db->prepare("SELECT * FROM users WHERE email = ?");
 			$query->execute(array($email));
 			$user = $query->fetchAll(PDO::FETCH_ASSOC);
 		}
 		if (!empty($user)) {
 			/*$msg = 'yes';
 			echo "<script type='text/javascript'>alert('$msg');</script>";*/
 			$token = sha1(time().$email.mt_rand(100000,999999));
 			$exp_dt = date('Y-m-d H:i:s', strtotime('+12 hours'));
 			$sql = "INSERT INTO pwdreset(email, token, exp_dt) VALUES (?,?,?);";
			$stmtinsert = $db->prepare($sql);
			$result = $stmtinsert->execute([$email, $token, $exp_dt]);

 			require_once "password-mail.php";
 			// print_r($user[0]['firstname']);
 		}
 		else{
 			$error_message = "No Email Account Found.";
 		}
 	}
 ?>

 		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="../img/favicons/okcl-logo.png">
		<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbars/">

		<!-- Custom styles for this template -->
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
	
	  <link href="../css/navbar.css" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" type="text/css" href="../css/small.css">
	  <link rel="stylesheet" type="text/css" href="../css/style_add_on.css">
	  <link rel="stylesheet" type="text/css" href="../css/style_login.css">
	  <link rel="stylesheet" type="text/css" href="../css/style_forgot.css">

	   <!-- Custom styles for this template -->
	  <link href="../css/carousel.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	    <!-- jquery -->
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			<!-- //jquery -->

			<!-- Slick Carousel -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<script type="text/javascript" src="../js/scripts.js"></script>
	<a href="login.php" class="text-decoration-none" style="position: absolute;left: 33rem;top: 6rem; font-family: 'Staatliches', cursive;"><i class="left"></i>Back to Sign In</a>
	<div id="wrapper" class="pt-5 mt-5 ">
		<div id="loginContainer" class="mx-auto">
			<form id="formForgot" name="formForgot" method="post" class="text-center">
				<h2 class="heading text-center text-uppercase text-white">Forgotten Password</h2>

				<?php if (!empty($success_message)) { ?>
					<div class="success_message">
						<?php echo $success_message; ?>
					</div>
				<?php } ?>
				<?php if (isset($error_message)) { ?>
					<div class="error_message">
						<?php echo $error_message; ?>
					</div>
				<?php } ?>
				<input type="email" name="user_email" placeholder="Enter a valid email address" class="text-md-left mt-2 ms-2 w-100" style="font-family: 'Staatliches', cursive;" required><br>
				<input type="submit" name="forgot_password" value="submit" id="forgot_password" class="glossy-button btn btn-danger mt-2 ms-2 mb-3 text-md-center w-100 text-uppercase">
				<p class="text-center text-secondary" style="font-family: 'Staatliches', cursive;">To reset your password, enter the registered e-mail adddress and we'll send you password reset link with instruction on your e-mail!</p>
			</form>
		</div>
	</div>