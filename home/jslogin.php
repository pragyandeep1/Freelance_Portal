<?php
	require_once('config.php');
	session_start();

	error_reporting(0);

	$user = $_POST['username'];
	$pass = $_POST['password'];

	// username & password combination or email & password combination
	$sql = "SELECT * FROM users WHERE email = ? OR username = ? AND password = ? LIMIT 1;";

	$stmt = $db->prepare($sql);
	$result = $stmt->execute([$user, $user, $pass]);

	if ($result) {
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		// var_dump($user);
		if ($stmt->rowCount()>0) {
			$_SESSION['userlogin'] = $user;
				echo "1";
		}
		else{
			echo "invalid username or password or please click the check box";
		}
	}
	else{
		echo "login operation failed";
	}

?>