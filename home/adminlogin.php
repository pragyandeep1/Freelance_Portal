<?php
	require_once('config.php');
	session_start();
	
	if (isset($_POST['signin'])) {

		$user = $_POST['adminName'];
		$pass = $_POST['adminPassword'];
	   	$sql = "SELECT * FROM admin_login WHERE admin_name = ? AND admin_password = ? LIMIT 1";
	   	$stmt = $db->prepare($sql);
	   	$result = $stmt->execute([$user,$pass]);

	   	if ($result) {
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			// var_dump($user);
			if ($stmt->rowCount()>0) {
				$_SESSION['signin'] = $user;
				echo "You are successfully logged in";
			}
			else{
				echo "invalid username or password";
			}
		}
		else{
			echo "login operation failed";
		}
	}
?>	

<?php require "./views/header.php"?>

<!-- <div class="container center-div"> -->
<div class="login-form mx-2 mt-5 me-2 pt-5">
	<h3 class="heading text-center text-uppercase text-white">
		Admin Login Page
	</h3>
	<form method="post">
		<div class="input-field">
			<i class="fa fa-user"></i>
			<input type="text" placeholder="admin name" name="adminName" id="adminName" class="text-uppercase" required>
		</div>

		<div class="input-field">
			<i class="fa fa-lock"></i>
			<input type="password" placeholder="password" name="adminPassword" id="adminPassword" required>
		</div>

		<button type="submit" name="signin">Sign in</button>

		<div class="extra">
			<a href="#!">Forgot Password</a>
		</div>
	</form>
</div>

<?php require "./views/footer.php"?>