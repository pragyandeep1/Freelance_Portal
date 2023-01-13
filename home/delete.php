<?php 
	require_once "config.php";

	if (isset($_GET['id'])) {
		$delete_id = $_GET['id'];

		$delete = "DELETE FROM message WHERE id = '$delete_id'";
		$stmt_dlt = $db->prepare($delete);
		$stmt_dlt->execute();

		if ($stmt_dlt) {
			header('location: readMsg.php');
		}
		else{
			echo $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
?>