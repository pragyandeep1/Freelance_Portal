<?php 
	require_once "config.php";

	if (isset($_GET['project_id'])) {
		$delete_id = $_GET['project_id'];

		$delete = "DELETE FROM job_posting WHERE project_id = '$delete_id'";
		$stmt_dlt = $db->prepare($delete);
		$stmt_dlt->execute();

		if ($stmt_dlt) {
			header('location: viewJob.php');
		}
		else{
			echo $db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	}
?>