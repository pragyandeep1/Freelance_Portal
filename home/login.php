<?php
	session_start();
	if (!isset($_SESSION['userlogin'])) {
		header("");
	}
?>

<?php include "views/links.php" ?>
<title>Login</title>

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
			<div class="user-card mx-auto">
				<div class="d-flex justify-content-center h-25">
					<div class="brand-logo-container">
						<img class="brand-logo" src="../img/favicons/okcl-logo-md.png" alt="logo">
					</div>
				</div>
				
				<div class="justify-content-center form_container">

					<form action="jslogin.php" method="POST">
						<div class="input-group mb-3 mx-5" style="width: auto;">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="far fa-user fa-lg fa-fw"></i>
								</span>
							</div>
							<input type="text" name="username" id="username" class="form-control input-user text-secondary" placeholder="Username/E-mail" required>
						</div>
						<div class="input-group mb-3 mx-5" style="width: auto;">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="fa fa-lock fa-lg fa-fw"></i>
								</span>
							</div>
							<input type="password" name="password" id="password" class="form-control input-pass" placeholder="Password" required>
							<!-- <button class="visibility-toggle">show</button> -->
							<!-- <span class="material-icons-outlined">visibility</span> -->
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox mx-5">
								<input type="checkbox" name="remember_me" class="custom-control-input" id="customControlInline" required>
								<label class="custom-control-label" required>Remember Me</label>
							</div>
						</div>

						<div class="d-flex justify-content-center mt-3 login-container">
							<button class="btn login-btn text-md-center" type="button" id="login" name="login" onclick="login_click(this)">Login</button>
						</div>
					
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<p class="text-danger">Don't have an account?&emsp;</p><a class="ml-2" href="registration.php" style="text-decoration: none;">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="forgot.php" style="text-decoration: none;">Password Forgotten?</a>
					</div>
				</div>
				</form>
			</div>
			
		</div>
	</div>	
</div>

<script type="text/javascript" src="../js/script_signin.js"></script>