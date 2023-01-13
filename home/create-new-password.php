<?php require "./views/header.php"?>

<main>
	<div class="wrapper-main">
		<section class="section-default">
			
				<?php
					$selector = $_GET['selector'];
					$validator = $_GET['validator'];

					if (empty($selector)||empty($validator)) {
						echo "We couldn't validate your request.";
					}
					else{
						if (ctype_xdigit($selector)!= false && ctype_xdigit($validator) != false) {
							?>

							<form action="includes/reset-password.inc.php" method="post">
								<input type="hidden" name="selector" value="<?php echo '$selector' ?>">
								<input type="hidden" name="selector" value="<?php echo '$selector' ?>">
								<input type="password" name="pwd" placeholder="Enter a new password.">
								<input type="password" name="pwd-repeat" placeholder="Reenter the new password.">
								<button type="submit" name="reset-password-submit">Reset Password</button>
							</form>

							<?php
						}
					}
				?>
			
		</section>
	</div>
</main>

<?php require "./views/footer.php"?>