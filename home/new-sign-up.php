<?php
	require_once('config.php');
?>

<?php include ("./views/header.php")?>

<?php
	if (isset($_GET['newpwd'])) {
		if ($_GET['newpwd']	== "passwordupdated") {
			echo "<p class="signupsuccess">Your password has been reset!</p>";
		}
	}
?>

<?php include ("./views/footer.php")?>