<?php
	session_start();
	require_once "config.php";



	if (isset($_GET['email'])) {

			$email = $_GET['email'];

			$sql = "SELECT * FROM contact WHERE user_email = ? LIMIT 1";
			$query = $db->prepare($sql);
 			$query->execute([$user_email]);
 			$user = $query->fetchAll(PDO::FETCH_ASSOC);

	}
?>