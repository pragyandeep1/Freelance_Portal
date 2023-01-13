<?php
	session_start();
	require_once "config.php";



	if (isset($_GET['email']) && isset($_GET['token'])) {

			$email = $_GET['email'];
			$token = $_GET['token'];

			$sql = "SELECT * FROM pwdreset WHERE email = ? AND token = ? LIMIT 1";
			$query = $db->prepare($sql);
 			$query->execute([$email,$token]);
 			$user = $query->fetchAll(PDO::FETCH_ASSOC);

 			if (!empty($user)) {

 				$exp_dt = $user[0]["exp_dt"];

 				if (date('Y-m-d H:i:s') >  date('Y-m-d H:i:s', strtotime($exp_dt)) ) {
 					echo "Link is expired.";
 					exit();
 				}
 				


 			}
 			else{
 				echo "Link not found";
 				exit();
 			}

	}

	if (isset($_POST['resetPwdBtn'])) {
		$username = $_GET['email'];
		$password = trim($_POST['password']);
		$passwordconf = trim($_POST['passwordconf']);
		if ($password == $passwordconf) {
	
			$stmt = $db->prepare("UPDATE users SET password = ? WHERE email = ?");
			$stmt->execute([$password,$username]);
			$affected_rows = $stmt->rowCount();
			if ($affected_rows) {

				$stmt = $db->prepare("DELETE FROM pwdreset WHERE email = ? AND token = ?");
				$stmt->execute([$username, $token]);	



				$success_message = "password reset successfully<br>Now you're redirecting.<a class='btn btn-success' href='login.php'></a>";
				header("Refresh:3; url=login.php");
			}
			else{
				$error_message = "Failed<br>Password not updated";
			}
		}
		else{
			$error_message = "Password not matching";
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

	<div class="container h-100 mt-5 pt-2">
		<div class="d-flex">
			<div class="user-card">
				<div class="d-flex justify-content-center h-25">
					<div class="brand-logo-container">
						<img class="brand-logo" src="../img/favicons/okcl-logo-md.png" alt="logo">
					</div>
				</div>
				
				<div class="justify-content-center form_container">

					<form method="post" id="resetPassword" name="resetPassword">
						<h3 class="text-center text-secondary">Reset Your Password</h3>
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

						<div class="mb-3 row input-group mx-1">
							<label for="password" class="col-sm-2 col-form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" id="password" minlength="5" class="form-control">
							</div>
						</div>

						<div class="mb-3 row input-group mx-1">
							<label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
							<div class="col-sm-10">
								<input type="password" name="passwordconf" id="passwordconf" minlength="5" class="form-control">
							</div>
						</div>

						<div class="form-group" style="margin-left: 5rem;" >
							<button class="btn btn-primary btn-block btn-lg" type="submit" name="resetPwdBtn" id="resetPwd">
								Reset Password
							</button>
						</div>
				</form>
			</div>
			
		</div>
	</div>	
</div>