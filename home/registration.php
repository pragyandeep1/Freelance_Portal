<?php
	require_once('config.php');
?>


		<?php include "views/links.php" ?>
		<title>Registration</title>
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


	<div class="container h-90 my-3 py-3">

		<form action="" method="POST" id="signup_form" enctype="multipart/form-data">
			<div class="container h-100">
				<div class="row">
					<div class="col-sm-6 bg-warning text-danger shadow-lg mt-3 mb-2 mx-auto" style="border-radius: 1rem; max-width: 33rem; margin: 0 auto;">
						<div class="my-3">
							<h1 class="text-md-center text-secondary">Registration</h1>
							<p class="text-md-center text-secondary">Fill in the form with correct details.</p>
						</div>
							<hr class="mb-3">			

						<div class="my-3">
							<label for="firstname"><b>First Name</b></label>
							<input class="form-control" id="firstname" type="text" placeholder="Enter Your First Name" name="firstname" required>
						</div>

						<div class="my-3">
							<label for="lastname"><b>Last Name</b></label>
							<input class="form-control" id="lastname" type="text" placeholder="Enter Your Last Name" name="lastname" required>
						</div>

						<div class="my-3">
							<label for="lastname"><b>User Name</b></label>
							<input class="form-control" id="username" type="text" placeholder="Enter User Name" name="username" required>
						</div>

						<div class="my-3">
							<label for="email"><b>Email Address</b></label>
							<input class="form-control" id="email" type="email" placeholder="Enter Your Email Address" name="email" required>
						</div>

						<div class="my-3">
							<label for="contact"><b>Contact Number</b></label>
							<input class="form-control" id="contact" type="text" placeholder="Enter Your Contact Number" name="contact" required>
							<!-- <label id="validity" style="color: red; visibility: hidden;"></label> -->
						</div>

						<div class="my-3">
							<label for="password"><b>Password</b></label>
							<input class="form-control" id="password" type="password" placeholder="Enter Password" minlength="5" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required> 
						</div>

						<div class="my-3">
							<label for="password"><b>Confirm Password</b></label>
							<input class="form-control" id="confPassword" type="password" placeholder="Confirm Password" minlength="5" name="password_confirm" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required>
						</div>

						<hr class="mb-3">

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" name="remember_me" class="custom-control-input" id="customControlInline" required>
								<label class="custom-control-label">I agree to the Freelancer
									<a _ngcontent-webapp-c122="" class="LinkElement ng-star-inserted" rel="" data-underline="always" data-display="inline" data-icon-position="left" href="terms.php" target="_blank">Terms</a> and

									<a _ngcontent-webapp-c122="" class="LinkElement ng-star-inserted" rel="" data-underline="always" data-display="inline" data-icon-position="left" href="privacy.php" target="_blank">Conditions</a>
								</label>
							</div>
						</div>
						<div class="my-3">
							<input class="btn btn-primary bg-danger mx-auto text-md-center" id="register" name="create" type="submit" value="Sign Up" style="width: 100%;">
						</div>
						<div class="d-flex justify-content-center links">
						<p class="text-success">Already Registered?&emsp;</p>
						<a class="ml-2 text-primary" href="login.php" style="text-decoration: none;">Login Here</a>
					</div>
					</div>
				</div>
			</div>
		</form>
	</div>

<script type="text/javascript" src="../js/script_signup.js"></script>


<?php

	error_reporting(0);
	if(isset($_POST['create'])){
		
		$firstname	= $_POST['firstname'];
		$lastname	= $_POST['lastname'];
		$username	= $_POST['username'];
		$email		= $_POST['email'];
		$contact	= $_POST['contact'];
		$password	 = md5($_POST['password']);
		// $password	= $_POST['password'];

		if(preg_match('/^([a-zA-Z])*$/',$firstname)){
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Name should contain alphabets only!',
					text: 'Please enter a valid name.',
					icon: 'error'
				})
			</script>";
			$return = false;
		}
		if(preg_match('/^([a-zA-Z])*$/', $lastname)){
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Name should contain alphabets only!',
					text: 'Please enter a valid name.',
					icon: 'error'
				})
			</script>";
			$return = false;
		}
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Invalid email address',
					text: 'Please enter a valid email address!',
					icon: 'error'
				})
			</script>";
			$return = false;
			/*header("location: registration.php?error=invalidcontact");
			exit();*/
		}
		if(preg_match('/^([6-9]\d{9})$/', $contact)){
			$return = true;
		}
		else{
			echo "<script>
				Swal.fire({
					title: 'Invalid mobile number',
					text: 'Please enter a valid mobile number!',
					icon: 'error'
				})
			</script>";
			$return = false;
			/*header("location: registration.php?error=invalidcontact");
			exit();*/
		}



		if($return){

			$query = $db->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
 			$query->execute([$email,$username]);
 			$user = $query->fetchAll(PDO::FETCH_ASSOC);
 			if (empty($user)) {

				$sql = "INSERT INTO users(firstname, lastname, username, email, contact, password) VALUES (?,?,?,?,?,?);";
				$stmtinsert = $db->prepare($sql);
				$result = $stmtinsert->execute([$firstname, $lastname, $username, $email, $contact, $password]);

				require_once "signupSuccess-mail.php";

				if($result){
					if ($stmtinsert->rowCount()>0) {
							echo "<script>
								Swal.fire({
									title: 'User Registration Successful',
									text: 'You are succesfully registered. A notification e-mail is sent to your registered e-mail address.',
									icon: 'success'
								})
								var r = 'login.php';
								setTimeout('window.location.href = r',2000);
							</script>";
							
					}
					
				}

			}
			else{
				echo "<script>
								Swal.fire({
									title: 'User Registration Failed',
									text: 'Email Address or Username already exists!',
									icon: 'error'
								})
							</script>";
			}


		}
	}
?>